<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class SetRetcodeShareStatusRequest extends Model
{
    /**
     * @description The name of the application that is monitored by Browser Monitoring.
     *
     * @example test-app
     *
     * @var string
     */
    public $appName;

    /**
     * @description The process identifier (PID) of the application.
     *
     * Log on to the **ARMS console**. In the left-side navigation pane, choose **Browser Monitoring** > **Browser Monitoring**. On the Browser Monitoring page, click the name of an application. The URL in the address bar contains the process ID (PID) of the application. The PID is indicated in the `pid=xxx` format. The PID is usually percent encoded as `xxx%40xxx`. You must modify this value to remove the percent encoding. For example, if the PID in the URL is `eb4zdose6v%409781be0f44d****`, you must replace `%40` with @ to obtain `eb4zdose6v@9781be0f44d****`.
     * @example atc889zkcf@d8deedfa9bf****
     *
     * @var string
     */
    public $pid;

    /**
     * @description Specifies whether to turn on or turn off the logon-free sharing switch. Valid values:
     *
     *   `true`: Turn on the switch.
     *   `false`: Turn off the switch.
     *
     * This parameter is required.
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
