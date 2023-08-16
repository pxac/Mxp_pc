//获取当前时间
let endtime = new Date()
let endseconds = endtime.getTime()+60*1000
let id = setInterval(function(){
    let nowtime = new Date()
    let remaining = parseInt((endseconds - nowtime.getTime())/1000)
    if(remaining > 0){
        remaining = remaining < 10?'0'+remaining:remaining
    }
    else{
        clearInterval(id)
        remaining = '00'
    }
    document.getElementById('s').innerHTML = `距活动结束仅剩:<span>${remaining}</span>秒`;
},1000)