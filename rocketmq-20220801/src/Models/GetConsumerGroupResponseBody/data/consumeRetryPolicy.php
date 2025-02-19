<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerGroupResponseBody\data;

use AlibabaCloud\Dara\Model;

class consumeRetryPolicy extends Model
{
    /**
     * @var string
     */
    public $deadLetterTargetTopic;
    /**
     * @var int
     */
    public $maxRetryTimes;
    /**
     * @var string
     */
    public $retryPolicy;
    protected $_name = [
        'deadLetterTargetTopic' => 'deadLetterTargetTopic',
        'maxRetryTimes'         => 'maxRetryTimes',
        'retryPolicy'           => 'retryPolicy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deadLetterTargetTopic) {
            $res['deadLetterTargetTopic'] = $this->deadLetterTargetTopic;
        }

        if (null !== $this->maxRetryTimes) {
            $res['maxRetryTimes'] = $this->maxRetryTimes;
        }

        if (null !== $this->retryPolicy) {
            $res['retryPolicy'] = $this->retryPolicy;
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
        if (isset($map['deadLetterTargetTopic'])) {
            $model->deadLetterTargetTopic = $map['deadLetterTargetTopic'];
        }

        if (isset($map['maxRetryTimes'])) {
            $model->maxRetryTimes = $map['maxRetryTimes'];
        }

        if (isset($map['retryPolicy'])) {
            $model->retryPolicy = $map['retryPolicy'];
        }

        return $model;
    }
}
