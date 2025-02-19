<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerGroupLagResponseBody\data;

use AlibabaCloud\Dara\Model;

class totalLag extends Model
{
    /**
     * @var int
     */
    public $deliveryDuration;
    /**
     * @var int
     */
    public $inflightCount;
    /**
     * @var int
     */
    public $lastConsumeTimestamp;
    /**
     * @var int
     */
    public $readyCount;
    protected $_name = [
        'deliveryDuration'     => 'deliveryDuration',
        'inflightCount'        => 'inflightCount',
        'lastConsumeTimestamp' => 'lastConsumeTimestamp',
        'readyCount'           => 'readyCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deliveryDuration) {
            $res['deliveryDuration'] = $this->deliveryDuration;
        }

        if (null !== $this->inflightCount) {
            $res['inflightCount'] = $this->inflightCount;
        }

        if (null !== $this->lastConsumeTimestamp) {
            $res['lastConsumeTimestamp'] = $this->lastConsumeTimestamp;
        }

        if (null !== $this->readyCount) {
            $res['readyCount'] = $this->readyCount;
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
        if (isset($map['deliveryDuration'])) {
            $model->deliveryDuration = $map['deliveryDuration'];
        }

        if (isset($map['inflightCount'])) {
            $model->inflightCount = $map['inflightCount'];
        }

        if (isset($map['lastConsumeTimestamp'])) {
            $model->lastConsumeTimestamp = $map['lastConsumeTimestamp'];
        }

        if (isset($map['readyCount'])) {
            $model->readyCount = $map['readyCount'];
        }

        return $model;
    }
}
