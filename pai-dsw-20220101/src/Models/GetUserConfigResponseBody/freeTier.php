<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\GetUserConfigResponseBody;

use AlibabaCloud\Dara\Model;

class freeTier extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $initBaseUnit;

    /**
     * @var float
     */
    public $initBaseValue;

    /**
     * @var string
     */
    public $initShowUnit;

    /**
     * @var string
     */
    public $initShowValue;

    /**
     * @var bool
     */
    public $isFreeTierUser;

    /**
     * @var string
     */
    public $periodBaseUnit;

    /**
     * @var float
     */
    public $periodBaseValue;

    /**
     * @var string
     */
    public $periodShowUnit;

    /**
     * @var string
     */
    public $periodShowValue;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'endTime' => 'EndTime',
        'initBaseUnit' => 'InitBaseUnit',
        'initBaseValue' => 'InitBaseValue',
        'initShowUnit' => 'InitShowUnit',
        'initShowValue' => 'InitShowValue',
        'isFreeTierUser' => 'IsFreeTierUser',
        'periodBaseUnit' => 'PeriodBaseUnit',
        'periodBaseValue' => 'PeriodBaseValue',
        'periodShowUnit' => 'PeriodShowUnit',
        'periodShowValue' => 'PeriodShowValue',
        'startTime' => 'StartTime',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->initBaseUnit) {
            $res['InitBaseUnit'] = $this->initBaseUnit;
        }

        if (null !== $this->initBaseValue) {
            $res['InitBaseValue'] = $this->initBaseValue;
        }

        if (null !== $this->initShowUnit) {
            $res['InitShowUnit'] = $this->initShowUnit;
        }

        if (null !== $this->initShowValue) {
            $res['InitShowValue'] = $this->initShowValue;
        }

        if (null !== $this->isFreeTierUser) {
            $res['IsFreeTierUser'] = $this->isFreeTierUser;
        }

        if (null !== $this->periodBaseUnit) {
            $res['PeriodBaseUnit'] = $this->periodBaseUnit;
        }

        if (null !== $this->periodBaseValue) {
            $res['PeriodBaseValue'] = $this->periodBaseValue;
        }

        if (null !== $this->periodShowUnit) {
            $res['PeriodShowUnit'] = $this->periodShowUnit;
        }

        if (null !== $this->periodShowValue) {
            $res['PeriodShowValue'] = $this->periodShowValue;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['InitBaseUnit'])) {
            $model->initBaseUnit = $map['InitBaseUnit'];
        }

        if (isset($map['InitBaseValue'])) {
            $model->initBaseValue = $map['InitBaseValue'];
        }

        if (isset($map['InitShowUnit'])) {
            $model->initShowUnit = $map['InitShowUnit'];
        }

        if (isset($map['InitShowValue'])) {
            $model->initShowValue = $map['InitShowValue'];
        }

        if (isset($map['IsFreeTierUser'])) {
            $model->isFreeTierUser = $map['IsFreeTierUser'];
        }

        if (isset($map['PeriodBaseUnit'])) {
            $model->periodBaseUnit = $map['PeriodBaseUnit'];
        }

        if (isset($map['PeriodBaseValue'])) {
            $model->periodBaseValue = $map['PeriodBaseValue'];
        }

        if (isset($map['PeriodShowUnit'])) {
            $model->periodShowUnit = $map['PeriodShowUnit'];
        }

        if (isset($map['PeriodShowValue'])) {
            $model->periodShowValue = $map['PeriodShowValue'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
