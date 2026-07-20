<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetNotificationContactsResponseBody\data;

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
     * @var string
     */
    public $defaultChecked;

    /**
     * @var int
     */
    public $fatigueDayLimit;

    /**
     * @var string
     */
    public $optional;
    protected $_name = [
        'channelType' => 'ChannelType',
        'checkedState' => 'CheckedState',
        'defaultChecked' => 'DefaultChecked',
        'fatigueDayLimit' => 'FatigueDayLimit',
        'optional' => 'Optional',
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

        if (null !== $this->defaultChecked) {
            $res['DefaultChecked'] = $this->defaultChecked;
        }

        if (null !== $this->fatigueDayLimit) {
            $res['FatigueDayLimit'] = $this->fatigueDayLimit;
        }

        if (null !== $this->optional) {
            $res['Optional'] = $this->optional;
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

        if (isset($map['DefaultChecked'])) {
            $model->defaultChecked = $map['DefaultChecked'];
        }

        if (isset($map['FatigueDayLimit'])) {
            $model->fatigueDayLimit = $map['FatigueDayLimit'];
        }

        if (isset($map['Optional'])) {
            $model->optional = $map['Optional'];
        }

        return $model;
    }
}
