<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInstancesResponseBody\data\list_;

use AlibabaCloud\Dara\Model;

class productInfo extends Model
{
    /**
     * @var string
     */
    public $capacityType;

    /**
     * @var bool
     */
    public $traceOn;
    protected $_name = [
        'capacityType' => 'capacityType',
        'traceOn' => 'traceOn',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capacityType) {
            $res['capacityType'] = $this->capacityType;
        }

        if (null !== $this->traceOn) {
            $res['traceOn'] = $this->traceOn;
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
        if (isset($map['capacityType'])) {
            $model->capacityType = $map['capacityType'];
        }

        if (isset($map['traceOn'])) {
            $model->traceOn = $map['traceOn'];
        }

        return $model;
    }
}
