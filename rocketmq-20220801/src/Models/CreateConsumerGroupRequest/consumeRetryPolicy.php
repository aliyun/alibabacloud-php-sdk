<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateConsumerGroupRequest;

use AlibabaCloud\Tea\Model;

class consumeRetryPolicy extends Model
{
    /**
     * @var int
     */
    public $maxRetryTimes;

    /**
     * @var string
     */
    public $retryPolicy;
    protected $_name = [
        'maxRetryTimes' => 'maxRetryTimes',
        'retryPolicy'   => 'retryPolicy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (isset($map['maxRetryTimes'])) {
            $model->maxRetryTimes = $map['maxRetryTimes'];
        }
        if (isset($map['retryPolicy'])) {
            $model->retryPolicy = $map['retryPolicy'];
        }

        return $model;
    }
}
