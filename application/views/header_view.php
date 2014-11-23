<!DOCTYPE html>
<html lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <title><?php echo (isset($title)) ? $title : "My CI Site" ?> </title>
<style>
@charset "utf-8";
/* CSS Document */
body{
background-color:#FFF;
font-family:Monaco,Consolas,'Lucida Grande','Lucida Console';
font-size:16px;
text-shadow:rgba(0,0,0,0.01) 0 0 0;
}
#wrapper{
width:960px;
margin:0 auto;
}
#content{
width:960px;
margin:5px;
float:left;
}
/************************************************/
.signup_wrap{
height:25px;
width:100%;
padding:5px;
background-color:#2A1FFF;
}
.signin_form{
float:right;
}
.signin_form input{
width:80px;
}
.reg_form{
width:460px;
padding:20px;
margin:0 auto;
border:3px solid #DFDFDF;
background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#cbd4e5));
background: -moz-linear-gradient(top,  #fff,  #cbd4e5);
filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff', endColorstr='#cbd4e5');
}
.form_title,
.form_sub_title{
font-size:20px;

font-family:"Lucida Grande",Tahoma,Verdana,Arial,sans-serif;
font-size:20px;
font-weight:bold;
}
.form_sub_title{
font-weight:normal;
padding:6px 0 15px 0;
}
.reg_form p{
width: 300px;
clear: left;
margin: 0;
padding: 5px 0 8px 0;
padding-left: 155px; /*width of left column containing the label elements*/
border-top: 1px dashed gray;
height: 1%;
}
.reg_form label{
font-weight: bold;
float: left;
margin-left: -155px; /*width of left column*/
width: 150px; /*width of labels. Should be smaller than left column (155px) to create some right margin*/
}
input{
padding:3px;
color:#333333;
border:1px solid #96A6C5;
margin-top:2px;
width:180px;
font-size:11px;
}
.greenButton{
width:auto;
margin:10px 0 0 2px;
padding:3px 4px 3px 4px;
color:white;
background-color:#589d39;
outline:none;
border:1px solid #006600;
font-weight:bold;
}
.greenButton:active{
background-color:#006600;
padding:4px 3px 2px 5px;
}
.error{
color:#F00;
}
#footer{
color:#fff;
padding-top:20px;
text-align:center;
background: #454546; 
height: 20px;
clear:both;
}
</style>
</head>
<body>
 <div id="wrapper">