<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDataNetworkListResponseBody\items\networks;

use AlibabaCloud\Dara\Model;

class channels extends Model
{
    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $channelStatus;

    /**
     * @var bool
     */
    public $freezeSourceDuringSync;

    /**
     * @var string
     */
    public $progress;
    protected $_name = [
        'channelId' => 'ChannelId',
        'channelStatus' => 'ChannelStatus',
        'freezeSourceDuringSync' => 'FreezeSourceDuringSync',
        'progress' => 'Progress',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->channelStatus) {
            $res['ChannelStatus'] = $this->channelStatus;
        }

        if (null !== $this->freezeSourceDuringSync) {
            $res['FreezeSourceDuringSync'] = $this->freezeSourceDuringSync;
        }

        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
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
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        if (isset($map['ChannelStatus'])) {
            $model->channelStatus = $map['ChannelStatus'];
        }

        if (isset($map['FreezeSourceDuringSync'])) {
            $model->freezeSourceDuringSync = $map['FreezeSourceDuringSync'];
        }

        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        return $model;
    }
}
