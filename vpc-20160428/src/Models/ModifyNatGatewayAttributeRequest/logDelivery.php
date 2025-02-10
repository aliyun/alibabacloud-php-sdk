<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyNatGatewayAttributeRequest;

use AlibabaCloud\Dara\Model;

class logDelivery extends Model
{
    /**
     * @var string
     */
    public $logDeliveryType;
    /**
     * @var string
     */
    public $logDestination;
    protected $_name = [
        'logDeliveryType' => 'LogDeliveryType',
        'logDestination'  => 'LogDestination',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logDeliveryType) {
            $res['LogDeliveryType'] = $this->logDeliveryType;
        }

        if (null !== $this->logDestination) {
            $res['LogDestination'] = $this->logDestination;
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
        if (isset($map['LogDeliveryType'])) {
            $model->logDeliveryType = $map['LogDeliveryType'];
        }

        if (isset($map['LogDestination'])) {
            $model->logDestination = $map['LogDestination'];
        }

        return $model;
    }
}
