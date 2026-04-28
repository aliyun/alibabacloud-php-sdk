<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class CloudOutboundPreviewObReportRequest extends Model
{
    /**
     * @var string
     */
    public $cnos;

    /**
     * @var int
     */
    public $endHour;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $enterpriseId;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var int
     */
    public $start;

    /**
     * @var int
     */
    public $startHour;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $statisticMethod;

    /**
     * @var int
     */
    public $timeRangeType;
    protected $_name = [
        'cnos' => 'Cnos',
        'endHour' => 'EndHour',
        'endTime' => 'EndTime',
        'enterpriseId' => 'EnterpriseId',
        'limit' => 'Limit',
        'start' => 'Start',
        'startHour' => 'StartHour',
        'startTime' => 'StartTime',
        'statisticMethod' => 'StatisticMethod',
        'timeRangeType' => 'TimeRangeType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cnos) {
            $res['Cnos'] = $this->cnos;
        }

        if (null !== $this->endHour) {
            $res['EndHour'] = $this->endHour;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->enterpriseId) {
            $res['EnterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }

        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }

        if (null !== $this->startHour) {
            $res['StartHour'] = $this->startHour;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->statisticMethod) {
            $res['StatisticMethod'] = $this->statisticMethod;
        }

        if (null !== $this->timeRangeType) {
            $res['TimeRangeType'] = $this->timeRangeType;
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
        if (isset($map['Cnos'])) {
            $model->cnos = $map['Cnos'];
        }

        if (isset($map['EndHour'])) {
            $model->endHour = $map['EndHour'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['EnterpriseId'])) {
            $model->enterpriseId = $map['EnterpriseId'];
        }

        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }

        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }

        if (isset($map['StartHour'])) {
            $model->startHour = $map['StartHour'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['StatisticMethod'])) {
            $model->statisticMethod = $map['StatisticMethod'];
        }

        if (isset($map['TimeRangeType'])) {
            $model->timeRangeType = $map['TimeRangeType'];
        }

        return $model;
    }
}
