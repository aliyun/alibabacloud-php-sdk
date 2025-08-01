<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\GetDiagnosisResultResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $code;

    /**
     * @example {
     * "jobs":[
     * {
     * "cmd":"mkdir -p /var/log/sysak && sysak podmem -r 100  -a -j /var/log/sysak/podmem.json > /dev/null 2>&1 && cat /var/log/sysak/podmem.json",
     * "instance":"172.20.12.174",
     * "fetch_file_list":[
     *
     * ]
     * }
     * ],
     * "in_order":true,
     * "offline_mode":false,
     * "offline_results":[
     *
     * ]
     * }
     *
     * @var mixed
     */
    public $command;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @example Diagnosis failed
     *
     * @var string
     */
    public $errMsg;

    /**
     * @example {
     * "type":"all",
     * "value":"",
     * "channel":"ssh",
     * "instance":"172.1.2.174",
     * "service_name":"filecache"
     * }
     *
     * @var mixed
     */
    public $params;

    /**
     * @example {
     * "summary":"  memory cgroup leak",
     * "dataMemEvent":{
     * "data":[
     * {
     * "key":"Util",
     * "value":20
     * },
     * {
     * "key":"MemLeak",
     * "value":"OK"
     * },
     * {
     * "key":"MemcgLeak",
     * "value":"NG"
     * },
     * {
     * "key":"MemFrag",
     * "value":"OK"
     * }
     * ]
     * },
     * "dataMemOverView":{
     * "data":[
     * {
     * "key":"app",
     * "value":10937332
     * },
     * {
     * "key":"free",
     * "value":806800
     * },
     * {
     * "key":"kernel",
     * "value":4527660
     * }
     * ]
     * },
     * "dataKerMem":{
     * "data":[
     * {
     * "key":"SReclaimable",
     * "value":3411292
     * },
     * {
     * "key":"VmallocUsed",
     * "value":30980
     * },
     * {
     * "key":"allocPage",
     * "value":177732
     * },
     * {
     * "key":"KernelStack",
     * "value":9280
     * },
     * {
     * "key":"PageTables",
     * "value":38056
     * },
     * {
     * "key":"SUnreclaim",
     * "value":170248
     * },
     * {
     * "key":"reserved",
     * "value":690072
     * }
     * ]
     * },
     * "dataUserMem":{
     * "data":[
     * {
     * "key":"filecache",
     * "value":8010008
     * },
     * {
     * "key":"anon",
     * "value":2468608
     * },
     * {
     * "key":"mlock",
     * "value":0
     * },
     * {
     * "key":"huge1G",
     * "value":0
     * },
     * {
     * "key":"huge2M",
     * "value":0
     * },
     * {
     * "key":"buffers",
     * "value":458608
     * },
     * {
     * "key":"shmem",
     * "value":2284
     * }
     * ]
     * },
     * "dataCacheList":{
     * "data":[
     * {
     * "key":0,
     * "Name":"/var/lib/mysql/sysom/sys_handler_log.ibd",
     * "cached":576764,
     * "Task":"mysqld_78575 "
     * },
     * {
     * "key":1,
     * "Name":"/var/log/sysom/sysom-migration-access.log",
     * "cached":276688,
     * "Task":"gunicorn_33647 ,gunicorn_460836 ,gunicorn_559934 ,gunicorn_731758 ,gunicorn_2362682 "
     * },
     * {
     * "key":2,
     * "Name":"/var/log/sysom/sysom-rtdemo-access.log",
     * "cached":229404,
     * "Task":"gunicorn_60718 ,gunicorn_720734 ,gunicorn_722168 "
     * },
     * {
     * "key":3,
     * "Name":"/var/log/sysom/sysom-monitor-server-access.log",
     * "cached":197368,
     * "Task":"gunicorn_33682 ,gunicorn_671155 ,gunicorn_714998 "
     * },
     * {
     * "key":4,
     * "Name":"/var/log/sysom/sysom-channel-access.log",
     * "cached":180276,
     * "Task":"gunicorn_33233 ,gunicorn_499735 ,gunicorn_725497 "
     * },
     * {
     * "key":5,
     * "Name":"total cached of close file",
     * "cached":3729668,
     * "Task":""
     * }
     * ]
     * },
     * "dataProcMemList":{
     * "data":[
     * {
     * "key":0,
     * "task":"mysqld",
     * "MemTotal":240856,
     * "RssAnon":218248,
     * "RssFile":22608
     * },
     * {
     * "key":1,
     * "task":"systemd-journal",
     * "MemTotal":150248,
     * "RssAnon":74300,
     * "RssFile":75944
     * },
     * {
     * "key":2,
     * "task":"gunicorn",
     * "MemTotal":144640,
     * "RssAnon":114200,
     * "RssFile":30440
     * },
     * {
     * "key":3,
     * "task":"gunicorn",
     * "MemTotal":141480,
     * "RssAnon":111040,
     * "RssFile":30440
     * },
     * {
     * "key":4,
     * "task":"grafana-server",
     * "MemTotal":103660,
     * "RssAnon":42732,
     * "RssFile":60928
     * },
     * {
     * "key":5,
     * "task":"gunicorn",
     * "MemTotal":97444,
     * "RssAnon":76256,
     * "RssFile":21188
     * },
     * {
     * "key":6,
     * "task":"gunicorn",
     * "MemTotal":97260,
     * "RssAnon":76072,
     * "RssFile":21188
     * },
     * {
     * "key":7,
     * "task":"prometheus",
     * "MemTotal":95356,
     * "RssAnon":45376,
     * "RssFile":49980
     * },
     * {
     * "key":8,
     * "task":"gunicorn",
     * "MemTotal":90144,
     * "RssAnon":76456,
     * "RssFile":13688
     * },
     * {
     * "key":9,
     * "task":"gunicorn",
     * "MemTotal":89796,
     * "RssAnon":76108,
     * "RssFile":13688
     * }
     * ]
     * }
     * }
     *
     * @var mixed
     */
    public $result;

    /**
     * @example memgraph
     *
     * @var string
     */
    public $serviceName;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example grcuU21a
     *
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @example /diagnose/detail/qe3Z34sa
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'code' => 'code',
        'command' => 'command',
        'createdAt' => 'created_at',
        'errMsg' => 'err_msg',
        'params' => 'params',
        'result' => 'result',
        'serviceName' => 'service_name',
        'status' => 'status',
        'taskId' => 'task_id',
        'updatedAt' => 'updated_at',
        'url' => 'url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->command) {
            $res['command'] = $this->command;
        }
        if (null !== $this->createdAt) {
            $res['created_at'] = $this->createdAt;
        }
        if (null !== $this->errMsg) {
            $res['err_msg'] = $this->errMsg;
        }
        if (null !== $this->params) {
            $res['params'] = $this->params;
        }
        if (null !== $this->result) {
            $res['result'] = $this->result;
        }
        if (null !== $this->serviceName) {
            $res['service_name'] = $this->serviceName;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['task_id'] = $this->taskId;
        }
        if (null !== $this->updatedAt) {
            $res['updated_at'] = $this->updatedAt;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['command'])) {
            $model->command = $map['command'];
        }
        if (isset($map['created_at'])) {
            $model->createdAt = $map['created_at'];
        }
        if (isset($map['err_msg'])) {
            $model->errMsg = $map['err_msg'];
        }
        if (isset($map['params'])) {
            $model->params = $map['params'];
        }
        if (isset($map['result'])) {
            $model->result = $map['result'];
        }
        if (isset($map['service_name'])) {
            $model->serviceName = $map['service_name'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['task_id'])) {
            $model->taskId = $map['task_id'];
        }
        if (isset($map['updated_at'])) {
            $model->updatedAt = $map['updated_at'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
