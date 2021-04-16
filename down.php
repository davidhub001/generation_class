<?php
$file = "https://www.youtube.com/watch?v=iZfmeezWCuQ";
 $mime = 'application/force-download';

                    header('Content-Type: '.$mime);

                    header('Content-Description: File Transfer');
                   
                    header('Content-Transfer-Encoding: binary');
                    header('Expires: 0');
                    header('Cache-Control: must-revalidate');
                    header('Pragma: public');
                    header('Content-Length: ' . filesize($file));
                    ob_clean();
                    flush();
                    readfile($file);
                    exit;
