<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class EventSinkConfig extends Model
{
    /**
     * @var DeliveryOption
     */
    public $deliveryOption;
    protected $_name = [
        'deliveryOption' => 'deliveryOption',
    ];

    public function validate()
    {
        if (null !== $this->deliveryOption) {
            $this->deliveryOption->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deliveryOption) {
            $res['deliveryOption'] = null !== $this->deliveryOption ? $this->deliveryOption->toArray($noStream) : $this->deliveryOption;
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
        if (isset($map['deliveryOption'])) {
            $model->deliveryOption = DeliveryOption::fromMap($map['deliveryOption']);
        }

        return $model;
    }
}
