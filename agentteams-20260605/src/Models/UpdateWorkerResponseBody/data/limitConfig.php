<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\UpdateWorkerResponseBody\data;

use AlibabaCloud\Dara\Model;

class limitConfig extends Model
{
    /**
     * @var string
     */
    public $limitType;

    /**
     * @var string
     */
    public $periodType;

    /**
     * @var int
     */
    public $usageLimit;
    protected $_name = [
        'limitType' => 'LimitType',
        'periodType' => 'PeriodType',
        'usageLimit' => 'UsageLimit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->limitType) {
            $res['LimitType'] = $this->limitType;
        }

        if (null !== $this->periodType) {
            $res['PeriodType'] = $this->periodType;
        }

        if (null !== $this->usageLimit) {
            $res['UsageLimit'] = $this->usageLimit;
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
        if (isset($map['LimitType'])) {
            $model->limitType = $map['LimitType'];
        }

        if (isset($map['PeriodType'])) {
            $model->periodType = $map['PeriodType'];
        }

        if (isset($map['UsageLimit'])) {
            $model->usageLimit = $map['UsageLimit'];
        }

        return $model;
    }
}
