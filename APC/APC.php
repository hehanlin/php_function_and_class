<?php
/**
 * Created by PhpStorm.
 * User: hehanlin
 * Date: 2015/8/8
 * Time: 9:15
 */

//Alternative PHP Cache (APC) ��һ���������ɵ�PHP opcode ���档����Ŀ�����ṩһ�����ɡ� ���ţ�
//�ͽ�ȫ�Ŀ�����ڻ�����Ż�PHP���м���롣
//��Windows�ϣ�APC��Ҫһ����ʱĿ¼������Web�����������Ŀ¼��д��APC����TMP,TEMP,USERPROFILE
//��ЩWindows�Ļ��������������Щ��û�У�����ϵͳ�ļ����µ�WINDOWSĿ¼��
//PHP5.6Ϊopcache��php.ini�ļ��ĺ�
//���opcacheĬ�ϱ���̬Ԥ���뵽��php�У���ֱ�Ӵ�enabled = 1��
$a = "111";
apc_add("ap1",$a);
