<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Tea\Model;

class DescribeStreamingOutStatusRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1qaz***x
     *
     * @var string
     */
    public $appId;

    /**
     * @description This parameter is required.
     *
     * @example testChannel
     *
     * @var string
     */
    public $channelId;

    /**
     * @description This parameter is required.
     *
     * @example taskId
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'appId' => 'AppId',
        'channelId' => 'ChannelId',
        'taskId' => 'TaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeStreamingOutStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
