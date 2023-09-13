<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\runOptions;

use AlibabaCloud\Tea\Model;

class retryStrategy extends Model
{
    /**
     * @example 512
     *
     * @var float
     */
    public $maximumEventAgeInSeconds;

    /**
     * @example 2
     *
     * @var float
     */
    public $maximumRetryAttempts;

    /**
     * @example EXPONENTIALDECAY_RETRY
     *
     * @var string
     */
    public $pushRetryStrategy;
    protected $_name = [
        'maximumEventAgeInSeconds' => 'MaximumEventAgeInSeconds',
        'maximumRetryAttempts'     => 'MaximumRetryAttempts',
        'pushRetryStrategy'        => 'PushRetryStrategy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maximumEventAgeInSeconds) {
            $res['MaximumEventAgeInSeconds'] = $this->maximumEventAgeInSeconds;
        }
        if (null !== $this->maximumRetryAttempts) {
            $res['MaximumRetryAttempts'] = $this->maximumRetryAttempts;
        }
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
        if (isset($map['MaximumEventAgeInSeconds'])) {
            $model->maximumEventAgeInSeconds = $map['MaximumEventAgeInSeconds'];
        }
        if (isset($map['MaximumRetryAttempts'])) {
            $model->maximumRetryAttempts = $map['MaximumRetryAttempts'];
        }
        if (isset($map['PushRetryStrategy'])) {
            $model->pushRetryStrategy = $map['PushRetryStrategy'];
        }

        return $model;
    }
}
