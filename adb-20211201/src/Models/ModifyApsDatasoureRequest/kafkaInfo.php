<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\ModifyApsDatasoureRequest;

use AlibabaCloud\Tea\Model;

class kafkaInfo extends Model
{
    /**
     * @example -
     *
     * @var string
     */
    public $kafkaClusterId;

    /**
     * @example test-topic
     *
     * @var string
     */
    public $kafkaTopic;
    protected $_name = [
        'kafkaClusterId' => 'KafkaClusterId',
        'kafkaTopic'     => 'KafkaTopic',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return kafkaInfo
     */
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
