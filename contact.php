<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: https://drarpangandhi.org');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  echo json_encode(['ok' => false]);
  exit;
}

$name         = trim(strip_tags($_POST['name']         ?? ''));
$email        = trim(strip_tags($_POST['email']        ?? ''));
$phone        = trim(strip_tags($_POST['phone']        ?? ''));
$organisation = trim(strip_tags($_POST['organisation'] ?? ''));
$reason       = trim(strip_tags($_POST['reason']       ?? ''));
$message      = trim(strip_tags($_POST['message']      ?? ''));

if (!$name || !$email || !$phone || !$organisation || !$reason || !$message) {
  http_response_code(400);
  echo json_encode(['ok' => false]);
  exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  http_response_code(400);
  echo json_encode(['ok' => false]);
  exit;
}

$reason_labels = [
  'consulting' => 'Diagnostics Consulting',
  'academic'   => 'Academic / Research Collaboration',
  'mentorship' => 'Mentorship',
  'advisory'   => 'Board / Advisory Role',
  'speaking'   => 'Speaking Engagement',
  'general'    => 'General Inquiry',
];
$reason_label = $reason_labels[$reason] ?? ucfirst($reason);
$first_name   = htmlspecialchars(explode(' ', $name)[0]);
$message_html = nl2br(htmlspecialchars($message));

$html = '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<title>New Enquiry</title>
</head>
<body style="margin:0;padding:0;background:#f4f4f0;font-family:Georgia,serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="background:#f4f4f0;padding:40px 16px;">
<tr><td align="center">
<table width="600" cellpadding="0" cellspacing="0" style="max-width:600px;width:100%;background:#ffffff;border-radius:12px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,0.07);">

  <!-- Header -->
  <tr>
    <td style="background:linear-gradient(135deg,#40916c 0%,#1b8882 100%);padding:36px 40px;">
      <p style="margin:0 0 6px;font-family:Arial,sans-serif;font-size:11px;letter-spacing:0.18em;text-transform:uppercase;color:rgba(255,255,255,0.65);">drarpangandhi.org</p>
      <h1 style="margin:0;font-family:Georgia,serif;font-size:26px;font-weight:400;color:#ffffff;line-height:1.3;">New Enquiry Received</h1>
    </td>
  </tr>

  <!-- Reason tag -->
  <tr>
    <td style="padding:28px 40px 0;">
      <span style="display:inline-block;background:#e8f4ee;color:#40916c;font-family:Arial,sans-serif;font-size:11px;font-weight:700;letter-spacing:0.14em;text-transform:uppercase;padding:5px 16px;border-radius:20px;">' . htmlspecialchars($reason_label) . '</span>
    </td>
  </tr>

  <!-- Details -->
  <tr>
    <td style="padding:24px 40px 0;">
      <table width="100%" cellpadding="0" cellspacing="0">

        <tr>
          <td style="padding-bottom:18px;border-bottom:1px solid #f0f0ec;">
            <p style="margin:0 0 3px;font-family:Arial,sans-serif;font-size:10px;letter-spacing:0.14em;text-transform:uppercase;color:#aaa;">Full Name</p>
            <p style="margin:0;font-family:Georgia,serif;font-size:18px;color:#1a1a1a;">' . htmlspecialchars($name) . '</p>
          </td>
        </tr>

        <tr>
          <td style="padding:18px 0;border-bottom:1px solid #f0f0ec;">
            <p style="margin:0 0 3px;font-family:Arial,sans-serif;font-size:10px;letter-spacing:0.14em;text-transform:uppercase;color:#aaa;">Organisation</p>
            <p style="margin:0;font-family:Georgia,serif;font-size:18px;color:#1a1a1a;">' . htmlspecialchars($organisation) . '</p>
          </td>
        </tr>

        <tr>
          <td style="padding:18px 0;border-bottom:1px solid #f0f0ec;">
            <table width="100%" cellpadding="0" cellspacing="0">
              <tr>
                <td width="50%" style="padding-right:16px;">
                  <p style="margin:0 0 3px;font-family:Arial,sans-serif;font-size:10px;letter-spacing:0.14em;text-transform:uppercase;color:#aaa;">Email</p>
                  <p style="margin:0;"><a href="mailto:' . htmlspecialchars($email) . '" style="font-family:Arial,sans-serif;font-size:14px;color:#40916c;text-decoration:none;">' . htmlspecialchars($email) . '</a></p>
                </td>
                <td width="50%">
                  <p style="margin:0 0 3px;font-family:Arial,sans-serif;font-size:10px;letter-spacing:0.14em;text-transform:uppercase;color:#aaa;">Phone</p>
                  <p style="margin:0;"><a href="tel:' . htmlspecialchars($phone) . '" style="font-family:Arial,sans-serif;font-size:14px;color:#40916c;text-decoration:none;">' . htmlspecialchars($phone) . '</a></p>
                </td>
              </tr>
            </table>
          </td>
        </tr>

      </table>
    </td>
  </tr>

  <!-- Message -->
  <tr>
    <td style="padding:24px 40px;">
      <p style="margin:0 0 12px;font-family:Arial,sans-serif;font-size:10px;letter-spacing:0.14em;text-transform:uppercase;color:#aaa;">Message</p>
      <div style="background:#f7f8f6;border-left:3px solid #40916c;border-radius:0 8px 8px 0;padding:20px 24px;">
        <p style="margin:0;font-family:Georgia,serif;font-size:15px;color:#333;line-height:1.8;">' . $message_html . '</p>
      </div>
    </td>
  </tr>

  <!-- Reply button -->
  <tr>
    <td style="padding:0 40px 36px;">
      <a href="mailto:' . htmlspecialchars($email) . '" style="display:inline-block;background:#40916c;color:#ffffff;font-family:Arial,sans-serif;font-size:12px;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;text-decoration:none;padding:14px 30px;border-radius:6px;">Reply to ' . $first_name . '</a>
    </td>
  </tr>

  <!-- Footer -->
  <tr>
    <td style="background:#f7f8f6;padding:20px 40px;border-top:1px solid #efefeb;">
      <p style="margin:0;font-family:Arial,sans-serif;font-size:12px;color:#bbb;line-height:1.6;">Submitted via the contact form on <a href="https://drarpangandhi.org" style="color:#40916c;text-decoration:none;">drarpangandhi.org</a></p>
    </td>
  </tr>

</table>
</td></tr>
</table>

</body>
</html>';

$to      = 'arpangandhi@gmail.com';
$subject = 'New Enquiry from ' . $name . ' — drarpangandhi.org';
$headers = implode("\r\n", [
  'MIME-Version: 1.0',
  'Content-Type: text/html; charset=UTF-8',
  'From: Dr Arpan Gandhi Website <noreply@drarpangandhi.org>',
  'Reply-To: ' . $name . ' <' . $email . '>',
]);

$sent = mail($to, $subject, $html, $headers);

http_response_code($sent ? 200 : 500);
echo json_encode(['ok' => $sent]);
?>
