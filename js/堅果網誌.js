var evt = {
        getEvent:function (event) {
            return window.event || event;
        },
        getClientX:function (event) {
            return this.getEvent(event).clientX;
        },
        getClientY:function (event) {
            return this.getEvent(event).clientY;
        },
        getScrollLeft:function () {
            return document.body.scrollLeft||window.pageXOffset||document.documentElement.scrollLeft||0;
        },
        getScrollTop:function () {
            return document.body.scrollTop||window.pageYOffset||document.documentElement.scrollTop||0;
        },
        getPageX:function (event) {
          return this.getEvent(event).pageX?this.getEvent(event).pageX:this.getClientX(event)+this.getScrollLeft();
        },
        getPageY:function (event) {
            return this.getEvent(event).pageY?this.getEvent(event).pageY:this.getClientY(event)+this.getScrollTop();
        }
    };
    document.onmousemove=function (e) {
      document.getElementById("im").style.left = evt.getPageX(e)+2+"px";
      document.getElementById("im").style.top = evt.getPageY(e)+2+"px";
    };
    document.getElementById('canvas_div_no_cursor').style.cursor = "none"; 