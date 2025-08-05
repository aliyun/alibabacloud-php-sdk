<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\runOptions;

use AlibabaCloud\Tea\Model;

class retryStrategy extends Model
{
    /**
     * @description The retry policy. Valid values: BACKOFF_RETRY and EXPONENTIAL_DECAY_RETRY.
     *
     * @example EXPONENTIALDECAY_RETRY
     *
     * @var string
     */
    public $pushRetryStrategy;
    protected $_name = [
        'pushRetryStrategy' => 'PushRetryStrategy',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->pushRetryStrategy) {
            $res['PushRetryStrategy'] = $this->pushRetryStrategy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return retryStrategy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PushRetryStrategy'])) {
            $model->pushRetryStrategy = $map['PushRetryStrategy'];
        }

        return $model;
    }
}
