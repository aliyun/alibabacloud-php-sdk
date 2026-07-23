<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteEventAnalysisJobRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteEventAnalysisJobRequest\sourceResource\kafka;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteEventAnalysisJobRequest\sourceResource\rocketMQ;

class sourceResource extends Model
{
    /**
     * @var kafka
     */
    public $kafka;

    /**
     * @var rocketMQ
     */
    public $rocketMQ;
    protected $_name = [
        'kafka' => 'Kafka',
        'rocketMQ' => 'RocketMQ',
    ];

    public function validate()
    {
        if (null !== $this->kafka) {
            $this->kafka->validate();
        }
        if (null !== $this->rocketMQ) {
            $this->rocketMQ->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->kafka) {
            $res['Kafka'] = null !== $this->kafka ? $this->kafka->toArray($noStream) : $this->kafka;
        }

        if (null !== $this->rocketMQ) {
            $res['RocketMQ'] = null !== $this->rocketMQ ? $this->rocketMQ->toArray($noStream) : $this->rocketMQ;
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
        if (isset($map['Kafka'])) {
            $model->kafka = kafka::fromMap($map['Kafka']);
        }

        if (isset($map['RocketMQ'])) {
            $model->rocketMQ = rocketMQ::fromMap($map['RocketMQ']);
        }

        return $model;
    }
}
