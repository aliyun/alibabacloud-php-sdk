<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\GetUserConfigResponseBody;

use AlibabaCloud\Tea\Model;

class freeTier extends Model
{
    /**
     * @example 2020-11-08T15:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 个
     *
     * @var string
     */
    public $initBaseUnit;

    /**
     * @example 5000
     *
     * @var float
     */
    public $initBaseValue;

    /**
     * @example 个
     *
     * @var string
     */
    public $initShowUnit;

    /**
     * @example 5000
     *
     * @var string
     */
    public $initShowValue;

    /**
     * @example true
     *
     * @var bool
     */
    public $isFreeTierUser;

    /**
     * @example 个
     *
     * @var string
     */
    public $periodBaseUnit;

    /**
     * @example 3000
     *
     * @var float
     */
    public $periodBaseValue;

    /**
     * @example 个
     *
     * @var string
     */
    public $periodShowUnit;

    /**
     * @example 3000
     *
     * @var string
     */
    public $periodShowValue;

    /**
     * @example 2020-11-08T15:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example valid
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'endTime'         => 'EndTime',
        'initBaseUnit'    => 'InitBaseUnit',
        'initBaseValue'   => 'InitBaseValue',
        'initShowUnit'    => 'InitShowUnit',
        'initShowValue'   => 'InitShowValue',
        'isFreeTierUser'  => 'IsFreeTierUser',
        'periodBaseUnit'  => 'PeriodBaseUnit',
        'periodBaseValue' => 'PeriodBaseValue',
        'periodShowUnit'  => 'PeriodShowUnit',
        'periodShowValue' => 'PeriodShowValue',
        'startTime'       => 'StartTime',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return freeTier
     */
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
