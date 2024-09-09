<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Tea\Model;

class DataTopicLagMapValue extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $readyCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $inflightCount;

    /**
     * @example 12
     *
     * @var int
     */
    public $deliveryDuration;
    protected $_name = [
        'readyCount'       => 'readyCount',
        'inflightCount'    => 'inflightCount',
        'deliveryDuration' => 'deliveryDuration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->readyCount) {
            $res['readyCount'] = $this->readyCount;
        }
        if (null !== $this->inflightCount) {
            $res['inflightCount'] = $this->inflightCount;
        }
        if (null !== $this->deliveryDuration) {
            $res['deliveryDuration'] = $this->deliveryDuration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DataTopicLagMapValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['readyCount'])) {
            $model->readyCount = $map['readyCount'];
        }
        if (isset($map['inflightCount'])) {
            $model->inflightCount = $map['inflightCount'];
        }
        if (isset($map['deliveryDuration'])) {
            $model->deliveryDuration = $map['deliveryDuration'];
        }

        return $model;
    }
}
