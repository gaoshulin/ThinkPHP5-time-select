<?php
/**
 *----------------------------------------------------------------------
 * User: later
 *----------------------------------------------------------------------
 * Desc: tp5时间查询方法，time格式时间戳
 *----------------------------------------------------------------------
 */

//1.查询今天
$list = db('test')->whereTime('time','today')->select();

//2.查询昨天
$list = db('test')->whereTime('time','yesterday')->select();

//3.查询明天
$list = db('test')->whereTime('time','between', ['today +1 days','today +2 days'])->select();

//4.查询本周
$list = db('test')->whereTime('time','week')->select();

//5.查询上周
$list = db('test')->whereTime('time','last week')->select();

//6.查询下周
$list = db('test')->whereTime('update_time','between', ['next week 00:00:00','next week 00:00:00 +1 weeks'])->select();

//7.查询本周末
$start_time = mktime(0,0,0,date('m'),date('d')-date('w')+6,date('Y'));
$end_time   = mktime(23,59,59,date('m'),date('d')-date('w')+7,date('Y'));
$list = db('test')->whereTime('time','between', [$start_time , $end_time])->select();

//8.查询本月
$list = db('test')->whereTime('time', 'month')->select();

//9.查询上月
$list = db('test')->whereTime('time', 'last month')->select();

//10.查询本年
$list = db('test')->whereTime('time', 'year')->select();

//11.查询去年
$list = db('test')->whereTime('time', 'last year')->select();




