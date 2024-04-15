<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deliveryOption) {
            $res['deliveryOption'] = null !== $this->deliveryOption ? $this->deliveryOption->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EventSinkConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['deliveryOption'])) {
            $model->deliveryOption = DeliveryOption::fromMap($map['deliveryOption']);
        }

        return $model;
    }
}
