<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Tea\Model;

class DataTopicLagMapValue extends Model
{
    /**
     * @description Ready message count
     *
     * @example 1
     *
     * @var int
     */
    public $readyCount;

    /**
     * @description The number of messages being consumed.
     *
     * @example 1
     *
     * @var int
     */
    public $inflightCount;

    /**
     * @description Delivery delay time, in seconds
     *
     * @example 12
     *
     * @var int
     */
    public $deliveryDuration;

    /**
     * @var int
     */
    public $lastConsumeTimestamp;
    protected $_name = [
        'readyCount'           => 'readyCount',
        'inflightCount'        => 'inflightCount',
        'deliveryDuration'     => 'deliveryDuration',
        'lastConsumeTimestamp' => 'lastConsumeTimestamp',
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
        if (null !== $this->lastConsumeTimestamp) {
            $res['lastConsumeTimestamp'] = $this->lastConsumeTimestamp;
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
        if (isset($map['lastConsumeTimestamp'])) {
            $model->lastConsumeTimestamp = $map['lastConsumeTimestamp'];
        }

        return $model;
    }
}
