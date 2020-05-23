 <?php
// ffmpeg -i ny.mp3 -af silenceremove=stop_periods=-1:stop_duration=0.05:stop_threshold=-50dB -y out.mp3
chdir(__DIR__);
$dir = 'finals';
if(!is_dir($dir)) return;
$files = scandir($dir);
array_shift($files);
array_shift($files);
foreach ($files as $file) {
    // echo $file."\n";
    echo system("ffmpeg -i \"{$dir}/{$file}\" -af silenceremove=stop_periods=-1:stop_duration=0.05:stop_threshold=-30dB -y \"{$dir}/out-{$file}\"")."\n";
}