<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListOutboundStrategiesResponseBody;

use AlibabaCloud\Tea\Model;

class outboundStrategies extends Model
{
    /**
     * @var int
     */
    public $buId;

    /**
     * @var int
     */
    public $creatorId;

    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var int
     */
    public $departmentId;

    /**
     * @var string
     */
    public $extAttr;

    /**
     * @var string
     */
    public $gmtCreateStr;

    /**
     * @var string
     */
    public $gmtModifiedStr;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $modifierId;

    /**
     * @var string
     */
    public $modifierName;

    /**
     * @var int
     */
    public $numType;

    /**
     * @var string
     */
    public $outboundNum;

    /**
     * @var int
     */
    public $process;

    /**
     * @var int
     */
    public $resourceAllocation;

    /**
     * @var string
     */
    public $robotId;

    /**
     * @var string
     */
    public $robotName;

    /**
     * @var int
     */
    public $robotType;

    /**
     * @var int
     */
    public $ruleCode;

    /**
     * @var string
     */
    public $sceneName;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $successRate;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'buId'               => 'BuId',
        'creatorId'          => 'CreatorId',
        'creatorName'        => 'CreatorName',
        'departmentId'       => 'DepartmentId',
        'extAttr'            => 'ExtAttr',
        'gmtCreateStr'       => 'GmtCreateStr',
        'gmtModifiedStr'     => 'GmtModifiedStr',
        'id'                 => 'Id',
        'modifierId'         => 'ModifierId',
        'modifierName'       => 'ModifierName',
        'numType'            => 'NumType',
        'outboundNum'        => 'OutboundNum',
        'process'            => 'Process',
        'resourceAllocation' => 'ResourceAllocation',
        'robotId'            => 'RobotId',
        'robotName'          => 'RobotName',
        'robotType'          => 'RobotType',
        'ruleCode'           => 'RuleCode',
        'sceneName'          => 'SceneName',
        'status'             => 'Status',
        'successRate'        => 'SuccessRate',
        'name'               => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buId) {
            $res['BuId'] = $this->buId;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->creatorName) {
            $res['CreatorName'] = $this->creatorName;
        }
        if (null !== $this->departmentId) {
            $res['DepartmentId'] = $this->departmentId;
        }
        if (null !== $this->extAttr) {
            $res['ExtAttr'] = $this->extAttr;
        }
        if (null !== $this->gmtCreateStr) {
            $res['GmtCreateStr'] = $this->gmtCreateStr;
        }
        if (null !== $this->gmtModifiedStr) {
            $res['GmtModifiedStr'] = $this->gmtModifiedStr;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->modifierId) {
            $res['ModifierId'] = $this->modifierId;
        }
        if (null !== $this->modifierName) {
            $res['ModifierName'] = $this->modifierName;
        }
        if (null !== $this->numType) {
            $res['NumType'] = $this->numType;
        }
        if (null !== $this->outboundNum) {
            $res['OutboundNum'] = $this->outboundNum;
        }
        if (null !== $this->process) {
            $res['Process'] = $this->process;
        }
        if (null !== $this->resourceAllocation) {
            $res['ResourceAllocation'] = $this->resourceAllocation;
        }
        if (null !== $this->robotId) {
            $res['RobotId'] = $this->robotId;
        }
        if (null !== $this->robotName) {
            $res['RobotName'] = $this->robotName;
        }
        if (null !== $this->robotType) {
            $res['RobotType'] = $this->robotType;
        }
        if (null !== $this->ruleCode) {
            $res['RuleCode'] = $this->ruleCode;
        }
        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->successRate) {
            $res['SuccessRate'] = $this->successRate;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outboundStrategies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuId'])) {
            $model->buId = $map['BuId'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['CreatorName'])) {
            $model->creatorName = $map['CreatorName'];
        }
        if (isset($map['DepartmentId'])) {
            $model->departmentId = $map['DepartmentId'];
        }
        if (isset($map['ExtAttr'])) {
            $model->extAttr = $map['ExtAttr'];
        }
        if (isset($map['GmtCreateStr'])) {
            $model->gmtCreateStr = $map['GmtCreateStr'];
        }
        if (isset($map['GmtModifiedStr'])) {
            $model->gmtModifiedStr = $map['GmtModifiedStr'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ModifierId'])) {
            $model->modifierId = $map['ModifierId'];
        }
        if (isset($map['ModifierName'])) {
            $model->modifierName = $map['ModifierName'];
        }
        if (isset($map['NumType'])) {
            $model->numType = $map['NumType'];
        }
        if (isset($map['OutboundNum'])) {
            $model->outboundNum = $map['OutboundNum'];
        }
        if (isset($map['Process'])) {
            $model->process = $map['Process'];
        }
        if (isset($map['ResourceAllocation'])) {
            $model->resourceAllocation = $map['ResourceAllocation'];
        }
        if (isset($map['RobotId'])) {
            $model->robotId = $map['RobotId'];
        }
        if (isset($map['RobotName'])) {
            $model->robotName = $map['RobotName'];
        }
        if (isset($map['RobotType'])) {
            $model->robotType = $map['RobotType'];
        }
        if (isset($map['RuleCode'])) {
            $model->ruleCode = $map['RuleCode'];
        }
        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SuccessRate'])) {
            $model->successRate = $map['SuccessRate'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
