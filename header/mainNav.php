
<div class="flex bg-black text-white font-bold justify-around p-3">

    <div style="<?php if($_GET['comp']=='listorders') echo 'border:10px solid yellow';?>" class="rounded-md bg-white text-black p-1 flex justify-center items-center"><a href="?comp=listorders">List Orders</a></div>
    <div style="<?php if($_GET['comp']=='inprogress') echo 'border:10px solid yellow';?>"  class="rounded-md bg-white text-black p-1 flex justify-center items-center"><a href="?comp=inprogress">In Progress Orders</a></div>
    <div style="<?php if($_GET['comp']=='outsidesla') echo 'border:10px solid yellow';?>"  class="rounded-md bg-white text-black p-1 flex justify-center items-center"><a href="?comp=outsidesla">OUTSIDE SLA</a></div>
    <div style="<?php if($_GET['comp']=='download') echo 'border:10px solid yellow';?>"  class="rounded-md bg-white text-black p-1 flex justify-center items-center"><a href="?comp=download">DOWNLOAD</a></div>
    <div style="<?php if($_GET['comp']=='scan_station') echo 'border:10px solid yellow';?>"  class="rounded-md bg-white text-black p-1 flex justify-center items-center"><a href="?comp=scan_station">SCAN STATIONS</a></div>
    <div style="<?php if($_GET['comp']=='report') echo 'border:10px solid yellow';?>"  class="rounded-md bg-white text-black p-1 flex justify-center items-center"><a href="?comp=report">REPORT</a></div>
    <div style="<?php if($_GET['comp']=='status') echo 'border:10px solid yellow';?>"  class="rounded-md bg-white text-black p-1 flex justify-center items-center"><a href="?comp=status">STATUS</a></div>

</div>