<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Dara\Model;

class DataLiteTopicLagMapValue extends Model
{
    /**
     * @var int
     */
    public $readyCount;

    /**
     * @var int
     */
    public $deliveryDuration;
    protected $_name = [
        'readyCount' => 'readyCount',
        'deliveryDuration' => 'deliveryDuration',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->readyCount) {
            $res['readyCount'] = $this->readyCount;
        }

        if (null !== $this->deliveryDuration) {
            $res['deliveryDuration'] = $this->deliveryDuration;
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
        if (isset($map['readyCount'])) {
            $model->readyCount = $map['readyCount'];
        }

        if (isset($map['deliveryDuration'])) {
            $model->deliveryDuration = $map['deliveryDuration'];
        }

        return $model;
    }
}
