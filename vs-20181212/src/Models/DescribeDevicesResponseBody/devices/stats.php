<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeDevicesResponseBody\devices;

use AlibabaCloud\Tea\Model;

class stats extends Model
{
    /**
     * @var int
     */
    public $failedNum;

    /**
     * @var int
     */
    public $streamNum;

    /**
     * @var int
     */
    public $onlineNum;

    /**
     * @var int
     */
    public $offlineNum;

    /**
     * @var int
     */
    public $channelNum;
    protected $_name = [
        'failedNum'  => 'FailedNum',
        'streamNum'  => 'StreamNum',
        'onlineNum'  => 'OnlineNum',
        'offlineNum' => 'OfflineNum',
        'channelNum' => 'ChannelNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedNum) {
            $res['FailedNum'] = $this->failedNum;
        }
        if (null !== $this->streamNum) {
            $res['StreamNum'] = $this->streamNum;
        }
        if (null !== $this->onlineNum) {
            $res['OnlineNum'] = $this->onlineNum;
        }
        if (null !== $this->offlineNum) {
            $res['OfflineNum'] = $this->offlineNum;
        }
        if (null !== $this->channelNum) {
            $res['ChannelNum'] = $this->channelNum;
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
        if (isset($map['FailedNum'])) {
            $model->failedNum = $map['FailedNum'];
        }
        if (isset($map['StreamNum'])) {
            $model->streamNum = $map['StreamNum'];
        }
        if (isset($map['OnlineNum'])) {
            $model->onlineNum = $map['OnlineNum'];
        }
        if (isset($map['OfflineNum'])) {
            $model->offlineNum = $map['OfflineNum'];
        }
        if (isset($map['ChannelNum'])) {
            $model->channelNum = $map['ChannelNum'];
        }

        return $model;
    }
}
