<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Tea\Model;

class SetRunningPlanRequest extends Model
{
    /**
     * @var int
     */
    public $controlType;

    /**
     * @var int
     */
    public $dateType;

    /**
     * @var string
     */
    public $earliestStartupTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $factoryId;

    /**
     * @var string
     */
    public $latestShutdownTime;

    /**
     * @var float
     */
    public $maxCarbonDioxide;

    /**
     * @var float
     */
    public $maxTem;

    /**
     * @var float
     */
    public $minTem;

    /**
     * @var string
     */
    public $pKey;

    /**
     * @var int
     */
    public $seasonMode;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $statisticsTime;

    /**
     * @var string
     */
    public $systemId;

    /**
     * @var string
     */
    public $workingEndTime;

    /**
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
