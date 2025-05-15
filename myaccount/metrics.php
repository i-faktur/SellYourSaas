<?php
header("Content-Type: text/plain");
echo "# HELP website_requests_total Total requests\n";
echo "# TYPE website_requests_total counter\n";
echo "website_requests_total 123\n";
?>