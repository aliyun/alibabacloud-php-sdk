<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyStrategyRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $cycleDays;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $cycleStartTime;

    /**
     * @var string
     */
    public $riskSubTypeName;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $riskCustomParams;

    /**
     * @var string
     */
    public $customType;
    protected $_name = [
        'sourceIp'         => 'SourceIp',
        'cycleDays'        => 'CycleDays',
        'name'             => 'Name',
        'cycleStartTime'   => 'CycleStartTime',
        'riskSubTypeName'  => 'RiskSubTypeName',
        'id'               => 'Id',
        'riskCustomParams' => 'RiskCustomParams',
        'customType'       => 'CustomType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->cycleDays) {
            $res['CycleDays'] = $this->cycleDays;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->cycleStartTime) {
            $res['CycleStartTime'] = $this->cycleStartTime;
        }
        if (null !== $this->riskSubTypeName) {
            $res['RiskSubTypeName'] = $this->riskSubTypeName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->riskCustomParams) {
            $res['RiskCustomParams'] = $this->riskCustomParams;
        }
        if (null !== $this->customType) {
            $res['CustomType'] = $this->customType;
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
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['CycleDays'])) {
            $model->cycleDays = $map['CycleDays'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['CycleStartTime'])) {
            $model->cycleStartTime = $map['CycleStartTime'];
        }
        if (isset($map['RiskSubTypeName'])) {
            $model->riskSubTypeName = $map['RiskSubTypeName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RiskCustomParams'])) {
            $model->riskCustomParams = $map['RiskCustomParams'];
        }
        if (isset($map['CustomType'])) {
            $model->customType = $map['CustomType'];
        }

        return $model;
    }
}
