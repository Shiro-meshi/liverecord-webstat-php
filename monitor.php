<head>
<meta http-equiv="refresh" content="5">
<title>Record Monitor</title>
<style>
a, a:visited{
     color: blue;
     text-decoration: none;
}
</style>
</head>
<?php
	echo "<p><big><a href='https://www.youtube.com/channel/UCWCc8tO-uUl_7SJXIKJACMw/live' target='_blank'>YOUTUBE</a></big></p><p>";
	exec("ps aux | grep 'record' | grep 'y2b' | grep -v grep | awk '{ print $2 }' | head -1" , $out_y);
	if ($out_y[0] == "") {
		echo "<span style='color:red'>OFF</span></p>";
	}		
	else {
		print "<span style='color:green'>ON</span>" .",PID=" .$out_y[0] ."</p>" ;
	}
	exec("ps aux | grep 'streamlink' | grep 'youtube' | grep -v grep | awk '{ print $2 }' | head -1" , $rec_y);
        if ($rec_y[0] == "") {
                echo "<p style='color:grey'>NOT RECORDING</p>";
        }
        else {
                echo "<p style='color:orange'>RECORDING</p>" ;
        }

	exec("tail -1 /4T/record_log/mea_y2b.log", $log_y);
	print "<p>Last Log is :" .$log_y[0] ."</p>";
	echo "----------------------------------------------------";

	echo "<p><big><a href='https://live.bilibili.com/12235923' target='_blank'>BILIBILI</a></big></p><p>";
	exec("ps aux | grep 'record' | grep 'bili' | grep -v grep | awk '{ print $2 }' | head -1" , $out_b);
        if ($out_b[0] == "") {
                echo "<span style='color:red'>OFF</span></p>";
        }
        else {
                print "<span style='color:green'>ON</span>" .",PID=" .$out_b[0]. "</p>" ;
	}
        exec("ps aux | grep 'streamlink' | grep -v 'youtube' | grep -v grep | awk '{ print $2 }' | head -1" , $rec_b);
        if ($rec_b[0] == "") {
                echo "<p style='color:grey'>NOT RECORDING</p>";
        }
        else {
                echo "<p style='color:orange'>RECORDING</p>" ;
        }

	exec("tail -1 /4T/record_log/mea_bili.log", $log_b);
        print "<p>Last Log is :" .$log_b[0] ."</p>";
        echo "----------------------------------------------------";


        echo "<p><big><a href='https://twitcasting.tv/kaguramea_vov' target='_blank'>TC</a></big></p><p>";
        exec("ps aux | grep 'record' | grep 'twitcastffmpeg' | grep -v grep | awk '{ print $2 }' | head -1" , $out_t);
        if ($out_t[0] == "") {
                echo "<span style='color:red'>OFF</span></p>";
        }
        else {
                print "<span style='color:green'>ON</span>" .",PID=" .$out_t[0] ."</p>";
	}
        exec("ps aux | grep 'ffmpeg' | grep 'kaguramea_vov' | grep -v 'twitcastffmpeg' | grep -v grep | awk '{ print $2 }' | head -1" , $rec_t);
        if ($rec_t[0] == "") {
                echo "<p style='color:grey'>NOT RECORDING</p>";
        }
        else {
                echo "<p style='color:orange'>RECORDING</p>" ;
        }

        exec("tail -1 /4T/record_log/mea_tc.log", $log_t);
	print "<p>Last Log is :" .$log_t[0] ."</p>";
        echo "----------------------------------------------------";

	
	echo "<p><big><a href='https://twitcasting.tv/kaguramea_vov' target='_blank'>TC_Py</a></big></p><p>";
	exec("ps aux | grep 'record' | grep 'tcpy' | grep -v grep | awk '{ print $2 }' | head -1" , $out_tp);
        if ($out_tp[0] == "") {
                echo "<span style='color:red'>OFF</span></p>";
        }
        else {
		print "<span style='color:green'>ON</span>" .",PID=" .$out_tp[0] ."</p>" ;
	}
	exec("ps aux | grep 'python3' | grep 'record_twitcast.py' | grep -v grep | awk '{ print $2 }' | head -1" , $rec_tp);
        if ($rec_tp[0] == "") {
                echo "<p style='color:grey'>NOT RECORDING</p>";
        }
        else {
                echo "<p style='color:orange'>RECORDING</p>" ;
        }

        exec("tail -1 /4T/record_log/mea_tcpy.log", $log_tp);
        print "<p>Last Log is :" .$log_tp[0] ."</p>";
        echo "----------------------------------------------------";

	echo "<br/><p><big><a href='/log.php' target='_blank'>FULL LOG</a></big></p>";
	$now = date('Y/m/d H:i:s');
	echo "<br/>" .$now;
?>
