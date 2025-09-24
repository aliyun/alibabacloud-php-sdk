<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourceUsageTotalResponseBody\data;

use AlibabaCloud\Dara\Model;

class totalUsage extends Model
{
    /**
     * @var float
     */
    public $postpaidCost;

    /**
     * @var float
     */
    public $potentialSavedCost;

    /**
     * @var float
     */
    public $reservationCost;

    /**
     * @var float
     */
    public $savedCost;

    /**
     * @var float
     */
    public $usagePercentage;
    protected $_name = [
        'postpaidCost' => 'PostpaidCost',
        'potentialSavedCost' => 'PotentialSavedCost',
        'reservationCost' => 'ReservationCost',
        'savedCost' => 'SavedCost',
        'usagePercentage' => 'UsagePercentage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
