<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourceUsageTotalResponseBody\data;

use AlibabaCloud\Tea\Model;

class totalUsage extends Model
{
    /**
     * @description The total costs of pay-as-you-go instances.
     *
     * @example 200
     *
     * @var float
     */
    public $postpaidCost;

    /**
     * @description The total potential savings.
     *
     * @example 100
     *
     * @var float
     */
    public $potentialSavedCost;

    /**
     * @description The fee of purchased resource plans.
     *
     * @example 10
     *
     * @var float
     */
    public $reservationCost;

    /**
     * @description The total savings.
     *
     * @example 100
     *
     * @var float
     */
    public $savedCost;

    /**
     * @description The total usage of resource plans.
     *
     * @example 1
     *
     * @var float
     */
    public $usagePercentage;
    protected $_name = [
        'postpaidCost'       => 'PostpaidCost',
        'potentialSavedCost' => 'PotentialSavedCost',
        'reservationCost'    => 'ReservationCost',
        'savedCost'          => 'SavedCost',
        'usagePercentage'    => 'UsagePercentage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->postpaidCost) {
            $res['PostpaidCost'] = $this->postpaidCost;
        }
        if (null !== $this->potentialSavedCost) {
            $res['PotentialSavedCost'] = $this->potentialSavedCost;
        }
        if (null !== $this->reservationCost) {
            $res['ReservationCost'] = $this->reservationCost;
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
        if (isset($map['PostpaidCost'])) {
            $model->postpaidCost = $map['PostpaidCost'];
        }
        if (isset($map['PotentialSavedCost'])) {
            $model->potentialSavedCost = $map['PotentialSavedCost'];
        }
        if (isset($map['ReservationCost'])) {
            $model->reservationCost = $map['ReservationCost'];
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
