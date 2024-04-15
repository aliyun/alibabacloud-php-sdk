<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class RetryStrategy extends Model
{
    /**
     * @example BACKOFF_RETRY
     *
     * @var string
     */
    public $pushRetryStrategy;
    protected $_name = [
        'pushRetryStrategy' => 'PushRetryStrategy',
    ];

    public function validate()
    {
    }

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
     * @return RetryStrategy
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
