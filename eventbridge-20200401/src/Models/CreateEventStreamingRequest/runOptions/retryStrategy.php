<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\runOptions;

use AlibabaCloud\Dara\Model;

class retryStrategy extends Model
{
    /**
     * @var int
     */
    public $maximumEventAgeInSeconds;

    /**
     * @var int
     */
    public $maximumRetryAttempts;

    /**
     * @var string
     */
    public $pushRetryStrategy;
    protected $_name = [
        'maximumEventAgeInSeconds' => 'MaximumEventAgeInSeconds',
        'maximumRetryAttempts' => 'MaximumRetryAttempts',
        'pushRetryStrategy' => 'PushRetryStrategy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
