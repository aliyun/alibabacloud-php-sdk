<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeDeviceResponseBody;

use AlibabaCloud\Tea\Model;

class stats extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $channelNum;

    /**
     * @example 1
     *
     * @var int
     */
    public $failedNum;

    /**
     * @example 1
     *
     * @var int
     */
    public $offlineNum;

    /**
     * @example 1
     *
     * @var int
     */
    public $onlineNum;

    /**
     * @example 1
     *
     * @var int
     */
    public $streamNum;
    protected $_name = [
        'channelNum' => 'ChannelNum',
        'failedNum'  => 'FailedNum',
        'offlineNum' => 'OfflineNum',
        'onlineNum'  => 'OnlineNum',
        'streamNum'  => 'StreamNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelNum) {
            $res['ChannelNum'] = $this->channelNum;
        }
        if (null !== $this->failedNum) {
            $res['FailedNum'] = $this->failedNum;
        }
        if (null !== $this->offlineNum) {
            $res['OfflineNum'] = $this->offlineNum;
        }
        if (null !== $this->onlineNum) {
            $res['OnlineNum'] = $this->onlineNum;
        }
        if (null !== $this->streamNum) {
            $res['StreamNum'] = $this->streamNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stats
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelNum'])) {
            $model->channelNum = $map['ChannelNum'];
        }
        if (isset($map['FailedNum'])) {
            $model->failedNum = $map['FailedNum'];
        }
        if (isset($map['OfflineNum'])) {
            $model->offlineNum = $map['OfflineNum'];
        }
        if (isset($map['OnlineNum'])) {
            $model->onlineNum = $map['OnlineNum'];
        }
        if (isset($map['StreamNum'])) {
            $model->streamNum = $map['StreamNum'];
        }

        return $model;
    }
}
