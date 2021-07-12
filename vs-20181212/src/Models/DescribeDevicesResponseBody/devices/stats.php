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
    public $channelNum;

    /**
     * @var int
     */
    public $onlineNum;

    /**
     * @var int
     */
    public $offlineNum;
    protected $_name = [
        'failedNum'  => 'FailedNum',
        'streamNum'  => 'StreamNum',
        'channelNum' => 'ChannelNum',
        'onlineNum'  => 'OnlineNum',
        'offlineNum' => 'OfflineNum',
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
        if (null !== $this->channelNum) {
            $res['ChannelNum'] = $this->channelNum;
        }
        if (null !== $this->onlineNum) {
            $res['OnlineNum'] = $this->onlineNum;
        }
        if (null !== $this->offlineNum) {
            $res['OfflineNum'] = $this->offlineNum;
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
        if (isset($map['ChannelNum'])) {
            $model->channelNum = $map['ChannelNum'];
        }
        if (isset($map['OnlineNum'])) {
            $model->onlineNum = $map['OnlineNum'];
        }
        if (isset($map['OfflineNum'])) {
            $model->offlineNum = $map['OfflineNum'];
        }

        return $model;
    }
}
