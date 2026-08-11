<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models\ListModelLimitsResponseBody\limits;

use AlibabaCloud\Dara\Model;

class modelLimit extends Model
{
    /**
     * @var int
     */
    public $asyncUserConcurrencyLimit;

    /**
     * @var int
     */
    public $asyncUserQueueLimit;

    /**
     * @var int
     */
    public $requestLimit;

    /**
     * @var int
     */
    public $requestLimitPeriod;

    /**
     * @var int
     */
    public $usageLimit;

    /**
     * @var string
     */
    public $usageLimitField;

    /**
     * @var int
     */
    public $usageLimitPeriod;
    protected $_name = [
        'asyncUserConcurrencyLimit' => 'asyncUserConcurrencyLimit',
        'asyncUserQueueLimit' => 'asyncUserQueueLimit',
        'requestLimit' => 'requestLimit',
        'requestLimitPeriod' => 'requestLimitPeriod',
        'usageLimit' => 'usageLimit',
        'usageLimitField' => 'usageLimitField',
        'usageLimitPeriod' => 'usageLimitPeriod',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asyncUserConcurrencyLimit) {
            $res['asyncUserConcurrencyLimit'] = $this->asyncUserConcurrencyLimit;
        }

        if (null !== $this->asyncUserQueueLimit) {
            $res['asyncUserQueueLimit'] = $this->asyncUserQueueLimit;
        }

        if (null !== $this->requestLimit) {
            $res['requestLimit'] = $this->requestLimit;
        }

        if (null !== $this->requestLimitPeriod) {
            $res['requestLimitPeriod'] = $this->requestLimitPeriod;
        }

        if (null !== $this->usageLimit) {
            $res['usageLimit'] = $this->usageLimit;
        }

        if (null !== $this->usageLimitField) {
            $res['usageLimitField'] = $this->usageLimitField;
        }

        if (null !== $this->usageLimitPeriod) {
            $res['usageLimitPeriod'] = $this->usageLimitPeriod;
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
        if (isset($map['asyncUserConcurrencyLimit'])) {
            $model->asyncUserConcurrencyLimit = $map['asyncUserConcurrencyLimit'];
        }

        if (isset($map['asyncUserQueueLimit'])) {
            $model->asyncUserQueueLimit = $map['asyncUserQueueLimit'];
        }

        if (isset($map['requestLimit'])) {
            $model->requestLimit = $map['requestLimit'];
        }

        if (isset($map['requestLimitPeriod'])) {
            $model->requestLimitPeriod = $map['requestLimitPeriod'];
        }

        if (isset($map['usageLimit'])) {
            $model->usageLimit = $map['usageLimit'];
        }

        if (isset($map['usageLimitField'])) {
            $model->usageLimitField = $map['usageLimitField'];
        }

        if (isset($map['usageLimitPeriod'])) {
            $model->usageLimitPeriod = $map['usageLimitPeriod'];
        }

        return $model;
    }
}
