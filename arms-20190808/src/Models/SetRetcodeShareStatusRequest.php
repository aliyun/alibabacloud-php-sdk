<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class SetRetcodeShareStatusRequest extends Model
{
    /**
     * @description Turns on or turns off logon-free sharing for an application monitored by Browser Monitoring.
     *
     * @example test-app
     *
     * @var string
     */
    public $appName;

    /**
     * @description Indicates whether the call is successful. Valid values:
     *
     *   `true`: The call is successful.
     *   `false`: The call fails.
     *
     * @example atc889zkcf@d8deedfa9bf****
     *
     * @var string
     */
    public $pid;

    /**
     * @description SetRetcodeShareStatus
     *
     * @example true
     *
     * @var bool
     */
    public $status;
    protected $_name = [
        'appName' => 'AppName',
        'pid'     => 'Pid',
        'status'  => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetRetcodeShareStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
