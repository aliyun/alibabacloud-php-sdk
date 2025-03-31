<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\CreateApsDatasoureRequest;

use AlibabaCloud\Dara\Model;

class kafkaInfo extends Model
{
    /**
     * @var string
     */
    public $kafkaClusterId;

    /**
     * @var string
     */
    public $kafkaTopic;
    protected $_name = [
        'kafkaClusterId' => 'KafkaClusterId',
        'kafkaTopic' => 'KafkaTopic',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->kafkaClusterId) {
            $res['KafkaClusterId'] = $this->kafkaClusterId;
        }

        if (null !== $this->kafkaTopic) {
            $res['KafkaTopic'] = $this->kafkaTopic;
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
        if (isset($map['KafkaClusterId'])) {
            $model->kafkaClusterId = $map['KafkaClusterId'];
        }

        if (isset($map['KafkaTopic'])) {
            $model->kafkaTopic = $map['KafkaTopic'];
        }

        return $model;
    }
}
