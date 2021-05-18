function 直接執行(慾直接執行之內容) {
    慾直接執行之內容
};
function 按鍵按下(按鍵的值,執行內容) {
    window.addEventListener('keyup', function(event){
        // console.log(event.key, event.keyCode, event);
        switch(event.key){
            case 按鍵的值:
                執行內容();
                break;

        }
    });
};