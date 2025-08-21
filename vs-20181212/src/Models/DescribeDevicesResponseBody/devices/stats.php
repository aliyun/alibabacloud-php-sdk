<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeDevicesResponseBody\devices;

use AlibabaCloud\Dara\Model;

class stats extends Model
{
    /**
     * @var int
     */
    public $channelNum;

    /**
     * @var int
     */
    public $failedNum;

    /**
     * @var int
     */
    public $offlineNum;

    /**
     * @var int
     */
    public $onlineNum;

    /**
     * @var int
     */
    public $streamNum;
    protected $_name = [
        'channelNum' => 'ChannelNum',
        'failedNum' => 'FailedNum',
        'offlineNum' => 'OfflineNum',
        'onlineNum' => 'OnlineNum',
        'streamNum' => 'StreamNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
