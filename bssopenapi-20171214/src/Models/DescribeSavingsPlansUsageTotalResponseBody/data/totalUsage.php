<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSavingsPlansUsageTotalResponseBody\data;

use AlibabaCloud\Tea\Model;

class totalUsage extends Model
{
    /**
     * @var float
     */
    public $poolValue;

    /**
     * @var float
     */
    public $postpaidCost;

    /**
     * @var float
     */
    public $savedCost;

    /**
     * @var float
     */
    public $usagePercentage;
    protected $_name = [
        'poolValue'       => 'PoolValue',
        'postpaidCost'    => 'PostpaidCost',
        'savedCost'       => 'SavedCost',
        'usagePercentage' => 'UsagePercentage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->poolValue) {
            $res['PoolValue'] = $this->poolValue;
        }
        if (null !== $this->postpaidCost) {
            $res['PostpaidCost'] = $this->postpaidCost;
        }
        if (null !== $this->savedCost) {
            $res['SavedCost'] = $this->savedCost;
        }
        if (null !== $this->usagePercentage) {
            $res['UsagePercentage'] = $this->usagePercentage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return totalUsage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PoolValue'])) {
            $model->poolValue = $map['PoolValue'];
        }
        if (isset($map['PostpaidCost'])) {
            $model->postpaidCost = $map['PostpaidCost'];
        }
        if (isset($map['SavedCost'])) {
            $model->savedCost = $map['SavedCost'];
        }
        if (isset($map['UsagePercentage'])) {
            $model->usagePercentage = $map['UsagePercentage'];
        }

        return $model;
    }
}
