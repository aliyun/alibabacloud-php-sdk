<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Tea\Model;

class SetRunningPlanRequest extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $controlType;

    /**
     * @example 0
     *
     * @var int
     */
    public $dateType;

    /**
     * @example 05:00:00
     *
     * @var string
     */
    public $earliestStartupTime;

    /**
     * @example 2024-07-21
     *
     * @var string
     */
    public $endTime;

    /**
     * @example ***
     *
     * @var string
     */
    public $factoryId;

    /**
     * @example 05:30:00
     *
     * @var string
     */
    public $latestShutdownTime;

    /**
     * @example 2.1
     *
     * @var float
     */
    public $maxCarbonDioxide;

    /**
     * @example 3.1
     *
     * @var float
     */
    public $maxTem;

    /**
     * @example 2.1
     *
     * @var float
     */
    public $minTem;

    /**
     * @example ib
     *
     * @var string
     */
    public $pKey;

    /**
     * @example 0
     *
     * @var int
     */
    public $seasonMode;

    /**
     * @example 2024-07-20
     *
     * @var string
     */
    public $startTime;

    /**
     * @example 2024-07-31
     *
     * @var string
     */
    public $statisticsTime;

    /**
     * @example system1
     *
     * @var string
     */
    public $systemId;

    /**
     * @example 05:30:00
     *
     * @var string
     */
    public $workingEndTime;

    /**
     * @example 05:00:00
     *
     * @var string
     */
    public $workingStartTime;
    protected $_name = [
        'controlType'         => 'controlType',
        'dateType'            => 'dateType',
        'earliestStartupTime' => 'earliestStartupTime',
        'endTime'             => 'endTime',
        'factoryId'           => 'factoryId',
        'latestShutdownTime'  => 'latestShutdownTime',
        'maxCarbonDioxide'    => 'maxCarbonDioxide',
        'maxTem'              => 'maxTem',
        'minTem'              => 'minTem',
        'pKey'                => 'pKey',
        'seasonMode'          => 'seasonMode',
        'startTime'           => 'startTime',
        'statisticsTime'      => 'statisticsTime',
        'systemId'            => 'systemId',
        'workingEndTime'      => 'workingEndTime',
        'workingStartTime'    => 'workingStartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->controlType) {
            $res['controlType'] = $this->controlType;
        }
        if (null !== $this->dateType) {
            $res['dateType'] = $this->dateType;
        }
        if (null !== $this->earliestStartupTime) {
            $res['earliestStartupTime'] = $this->earliestStartupTime;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->factoryId) {
            $res['factoryId'] = $this->factoryId;
        }
        if (null !== $this->latestShutdownTime) {
            $res['latestShutdownTime'] = $this->latestShutdownTime;
        }
        if (null !== $this->maxCarbonDioxide) {
            $res['maxCarbonDioxide'] = $this->maxCarbonDioxide;
        }
        if (null !== $this->maxTem) {
            $res['maxTem'] = $this->maxTem;
        }
        if (null !== $this->minTem) {
            $res['minTem'] = $this->minTem;
        }
        if (null !== $this->pKey) {
            $res['pKey'] = $this->pKey;
        }
        if (null !== $this->seasonMode) {
            $res['seasonMode'] = $this->seasonMode;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->statisticsTime) {
            $res['statisticsTime'] = $this->statisticsTime;
        }
        if (null !== $this->systemId) {
            $res['systemId'] = $this->systemId;
        }
        if (null !== $this->workingEndTime) {
            $res['workingEndTime'] = $this->workingEndTime;
        }
        if (null !== $this->workingStartTime) {
            $res['workingStartTime'] = $this->workingStartTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetRunningPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['controlType'])) {
            $model->controlType = $map['controlType'];
        }
        if (isset($map['dateType'])) {
            $model->dateType = $map['dateType'];
        }
        if (isset($map['earliestStartupTime'])) {
            $model->earliestStartupTime = $map['earliestStartupTime'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['factoryId'])) {
            $model->factoryId = $map['factoryId'];
        }
        if (isset($map['latestShutdownTime'])) {
            $model->latestShutdownTime = $map['latestShutdownTime'];
        }
        if (isset($map['maxCarbonDioxide'])) {
            $model->maxCarbonDioxide = $map['maxCarbonDioxide'];
        }
        if (isset($map['maxTem'])) {
            $model->maxTem = $map['maxTem'];
        }
        if (isset($map['minTem'])) {
            $model->minTem = $map['minTem'];
        }
        if (isset($map['pKey'])) {
            $model->pKey = $map['pKey'];
        }
        if (isset($map['seasonMode'])) {
            $model->seasonMode = $map['seasonMode'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['statisticsTime'])) {
            $model->statisticsTime = $map['statisticsTime'];
        }
        if (isset($map['systemId'])) {
            $model->systemId = $map['systemId'];
        }
        if (isset($map['workingEndTime'])) {
            $model->workingEndTime = $map['workingEndTime'];
        }
        if (isset($map['workingStartTime'])) {
            $model->workingStartTime = $map['workingStartTime'];
        }

        return $model;
    }
}
