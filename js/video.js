


var videoObj = document.querySelector('video')
var playBtn = document.querySelector('.play_pause')
var progressTimer = document.querySelector('.progress_timer')
var durationTimer = document.querySelector('.duration_timer')
var progress = document.querySelector('.progress')
var player = document.querySelector('.player')
var muted = document.querySelector('.muted')
var expand = document.querySelector('.expand')
playBtn.addEventListener('click', function(){
    if(videoObj.paused){
        // 如果视频处于播放状态
        videoObj.play()
        // this.innerHTML="pause"
        this.classList.remove('fa-play-circle-o')
        this.classList.add('fa-pause-circle-o')
    }else{
        videoObj.pause()
        // this.innerHTML="play"
        this.classList.add('fa-play-circle-o')
        this.classList.remove('fa-pause-circle-o')
    }
})
let {totalT,presentT} = {totalT:0,presentT:0}
videoObj.addEventListener('canplay',function(){
    totalT = this.duration
    var videoDuration = formatTime(totalT)
    durationTimer.innerHTML = videoDuration
})

videoObj.addEventListener('timeupdate',function(){
    presentT = this.currentTime
    var videoCurrent = formatTime(presentT)
    progressTimer.innerHTML = videoCurrent
    var percent = presentT/totalT*100
    progress.style.width = percent+'%'
})

function formatTime(t){
    var h = parseInt(t/3600)
    h = h<10?'0'+h:h 
    var m = parseInt(t%3600/60)
    m = m<10?'0'+m:m
    var s = parseInt(t%60)
    s = s<10?'0'+s:s
    return h+':'+m+':'+s
}

muted.addEventListener('click', function(){
    if(videoObj.muted!=false){
        // 如果视频处于播放状态
        videoObj.muted=false
        // this.innerHTML="pause"
        this.classList.remove('fa-bell-slash')
        this.classList.add('fa-bell-o')
    }else{
        videoObj.muted=true
        // this.innerHTML="play"
        this.classList.add('fa-bell-slash')
        this.classList.remove('fa-bell-o')
    }
})

expand.addEventListener('click',function(){
    player.webkitRequestFullScreen()
})
