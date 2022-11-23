<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyStrategyRequest extends Model
{
    /**
     * @var string
     */
    public $customType;

    /**
     * @var string
     */
    public $cycleDays;

    /**
     * @var string
     */
    public $cycleStartTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $riskCustomParams;

    /**
     * @var string
     */
    public $riskSubTypeName;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $targetType;
    protected $_name = [
        'customType'       => 'CustomType',
        'cycleDays'        => 'CycleDays',
        'cycleStartTime'   => 'CycleStartTime',
        'endTime'          => 'EndTime',
        'id'               => 'Id',
        'name'             => 'Name',
        'riskCustomParams' => 'RiskCustomParams',
        'riskSubTypeName'  => 'RiskSubTypeName',
        'sourceIp'         => 'SourceIp',
        'startTime'        => 'StartTime',
        'targetType'       => 'TargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customType) {
            $res['CustomType'] = $this->customType;
        }
        if (null !== $this->cycleDays) {
            $res['CycleDays'] = $this->cycleDays;
        }
        if (null !== $this->cycleStartTime) {
            $res['CycleStartTime'] = $this->cycleStartTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->riskCustomParams) {
            $res['RiskCustomParams'] = $this->riskCustomParams;
        }
        if (null !== $this->riskSubTypeName) {
            $res['RiskSubTypeName'] = $this->riskSubTypeName;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyStrategyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomType'])) {
            $model->customType = $map['CustomType'];
        }
        if (isset($map['CycleDays'])) {
            $model->cycleDays = $map['CycleDays'];
        }
        if (isset($map['CycleStartTime'])) {
            $model->cycleStartTime = $map['CycleStartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RiskCustomParams'])) {
            $model->riskCustomParams = $map['RiskCustomParams'];
        }
        if (isset($map['RiskSubTypeName'])) {
            $model->riskSubTypeName = $map['RiskSubTypeName'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
