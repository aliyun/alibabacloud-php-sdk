<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerGroupLagResponseBody\data;

use AlibabaCloud\Tea\Model;

class totalLag extends Model
{
    /**
     * @example 12
     *
     * @var int
     */
    public $deliveryDuration;

    /**
     * @example 1
     *
     * @var int
     */
    public $inflightCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $readyCount;
    protected $_name = [
        'deliveryDuration' => 'deliveryDuration',
        'inflightCount'    => 'inflightCount',
        'readyCount'       => 'readyCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deliveryDuration) {
            $res['deliveryDuration'] = $this->deliveryDuration;
        }
        if (null !== $this->inflightCount) {
            $res['inflightCount'] = $this->inflightCount;
        }
        if (null !== $this->readyCount) {
            $res['readyCount'] = $this->readyCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return totalLag
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['deliveryDuration'])) {
            $model->deliveryDuration = $map['deliveryDuration'];
        }
        if (isset($map['inflightCount'])) {
            $model->inflightCount = $map['inflightCount'];
        }
        if (isset($map['readyCount'])) {
            $model->readyCount = $map['readyCount'];
        }

        return $model;
    }
}
