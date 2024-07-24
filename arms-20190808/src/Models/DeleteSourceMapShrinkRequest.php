<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class DeleteSourceMapShrinkRequest extends Model
{
    /**
     * @description The ID of the SourceMap file.
     *
     * This parameter is required.
     * @var string
     */
    public $fidListShrink;

    /**
     * @description The process ID (PID) of the application.
     *
     * Log on to the ARMS console. In the left-side navigation pane, choose **Browser Monitoring** > **Browser Monitoring**. On the **Browser Monitoring** page, click the name of an application. The URL in the browser address bar contains the PID of this application in the format of `pid=xxx`. As the browser is encoded, the PID needs to be modified. Assume that the PID contained is `xxx%4074xxx`. You need to **replace** \\*\\*%40 with @\\*\\* and change the PID to `xxx@74xxx`.
     *
     * This parameter is required.
     * @example atc889zkcf@d8deedfa9bf****
     *
     * @var string
     */
    public $pid;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'fidListShrink' => 'FidList',
        'pid'           => 'Pid',
        'regionId'      => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fidListShrink) {
            $res['FidList'] = $this->fidListShrink;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSourceMapShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FidList'])) {
            $model->fidListShrink = $map['FidList'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
