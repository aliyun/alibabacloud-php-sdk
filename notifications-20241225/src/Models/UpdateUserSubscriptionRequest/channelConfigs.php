<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Notifications\V20241225\Models\UpdateUserSubscriptionRequest;

use AlibabaCloud\Dara\Model;

class channelConfigs extends Model
{
    /**
     * @var string
     */
    public $channelType;

    /**
     * @var string
     */
    public $checkedState;

    /**
     * @var int
     */
    public $fatigueDayLimit;
    protected $_name = [
        'channelType' => 'ChannelType',
        'checkedState' => 'CheckedState',
        'fatigueDayLimit' => 'FatigueDayLimit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelType) {
            $res['ChannelType'] = $this->channelType;
        }

        if (null !== $this->checkedState) {
            $res['CheckedState'] = $this->checkedState;
        }

        if (null !== $this->fatigueDayLimit) {
            $res['FatigueDayLimit'] = $this->fatigueDayLimit;
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
        if (isset($map['ChannelType'])) {
            $model->channelType = $map['ChannelType'];
        }

        if (isset($map['CheckedState'])) {
            $model->checkedState = $map['CheckedState'];
        }

        if (isset($map['FatigueDayLimit'])) {
            $model->fatigueDayLimit = $map['FatigueDayLimit'];
        }

        return $model;
    }
}
