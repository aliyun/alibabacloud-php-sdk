<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Dara\Model;

class DataTopicLagMapValue extends Model
{
    /**
     * @var int
     */
    public $readyCount;
    /**
     * @var int
     */
    public $inflightCount;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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
