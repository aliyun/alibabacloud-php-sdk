<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateConsumerGroupRequest;

use AlibabaCloud\Tea\Model;

class consumeRetryPolicy extends Model
{
    /**
     * @description The dead-letter topic.
     *
     * If a consumer still fails to consume a message after the message is retried for a specified number of times, the message is delivered to a dead-letter topic for subsequent business recovery or troubleshooting. For more information, see [Consumption retry and dead-letter messages](~~440356~~).
     * @example DLQ_mqtest
     *
     * @var string
     */
    public $deadLetterTargetTopic;

    /**
     * @description The maximum number of retries.
     *
     * @example 16
     *
     * @var int
     */
    public $maxRetryTimes;

    /**
     * @description The retry policy. For more information, see [Message retry](~~440356~~).
     *
     * Valid values:
     *
     *   FixedRetryPolicy: Failed messages are retried at a fixed interval.
     *   DefaultRetryPolicy: Failed messages are retried at incremental intervals as the number of retries increases.
     *
     * @example DefaultRetryPolicy
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return consumeRetryPolicy
     */
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
