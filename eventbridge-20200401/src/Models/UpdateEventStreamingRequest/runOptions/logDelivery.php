<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\runOptions;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\runOptions\logDelivery\kafkaLogParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\runOptions\logDelivery\SLSLogParameters;
use AlibabaCloud\Tea\Model;

class logDelivery extends Model
{
    /**
     * @var kafkaLogParameters[]
     */
    public $kafkaLogParameters;

    /**
     * @var SLSLogParameters[]
     */
    public $SLSLogParameters;
    protected $_name = [
        'kafkaLogParameters' => 'KafkaLogParameters',
        'SLSLogParameters'   => 'SLSLogParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->kafkaLogParameters) {
            $res['KafkaLogParameters'] = [];
            if (null !== $this->kafkaLogParameters && \is_array($this->kafkaLogParameters)) {
                $n = 0;
                foreach ($this->kafkaLogParameters as $item) {
                    $res['KafkaLogParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->SLSLogParameters) {
            $res['SLSLogParameters'] = [];
            if (null !== $this->SLSLogParameters && \is_array($this->SLSLogParameters)) {
                $n = 0;
                foreach ($this->SLSLogParameters as $item) {
                    $res['SLSLogParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logDelivery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KafkaLogParameters'])) {
            if (!empty($map['KafkaLogParameters'])) {
                $model->kafkaLogParameters = [];
                $n                         = 0;
                foreach ($map['KafkaLogParameters'] as $item) {
                    $model->kafkaLogParameters[$n++] = null !== $item ? kafkaLogParameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SLSLogParameters'])) {
            if (!empty($map['SLSLogParameters'])) {
                $model->SLSLogParameters = [];
                $n                       = 0;
                foreach ($map['SLSLogParameters'] as $item) {
                    $model->SLSLogParameters[$n++] = null !== $item ? SLSLogParameters::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
