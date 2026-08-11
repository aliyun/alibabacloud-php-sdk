<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models\UpdateModelLimitsRequest;

use AlibabaCloud\Dara\Model;

class workspaceLimits extends Model
{
    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $operationType;

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
     * @var int
     */
    public $usageLimitPeriod;
    protected $_name = [
        'model' => 'model',
        'operationType' => 'operationType',
        'requestLimit' => 'requestLimit',
        'requestLimitPeriod' => 'requestLimitPeriod',
        'usageLimit' => 'usageLimit',
        'usageLimitPeriod' => 'usageLimitPeriod',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->model) {
            $res['model'] = $this->model;
        }

        if (null !== $this->operationType) {
            $res['operationType'] = $this->operationType;
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
        if (isset($map['model'])) {
            $model->model = $map['model'];
        }

        if (isset($map['operationType'])) {
            $model->operationType = $map['operationType'];
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

        if (isset($map['usageLimitPeriod'])) {
            $model->usageLimitPeriod = $map['usageLimitPeriod'];
        }

        return $model;
    }
}
