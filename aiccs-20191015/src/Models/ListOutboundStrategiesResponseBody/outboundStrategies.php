<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\ListOutboundStrategiesResponseBody;

use AlibabaCloud\Tea\Model;

class outboundStrategies extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $successRate;

    /**
     * @var int
     */
    public $process;

    /**
     * @var string
     */
    public $gmtModifiedStr;

    /**
     * @var string
     */
    public $outboundNum;

    /**
     * @var string
     */
    public $outboundStrategyName;

    /**
     * @var int
     */
    public $modifierId;

    /**
     * @var string
     */
    public $sceneName;

    /**
     * @var int
     */
    public $outboundStrategyId;

    /**
     * @var int
     */
    public $creatorId;

    /**
     * @var string
     */
    public $robotName;

    /**
     * @var string
     */
    public $modifierName;

    /**
     * @var int
     */
    public $resourceAllocation;

    /**
     * @var string
     */
    public $extAttr;

    /**
     * @var int
     */
    public $numType;

    /**
     * @var int
     */
    public $buId;

    /**
     * @var string
     */
    public $robotId;

    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var int
     */
    public $departmentId;

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
    public $gmtCreateStr;
    protected $_name = [
        'status'               => 'Status',
        'successRate'          => 'SuccessRate',
        'process'              => 'Process',
        'gmtModifiedStr'       => 'GmtModifiedStr',
        'outboundNum'          => 'OutboundNum',
        'outboundStrategyName' => 'OutboundStrategyName',
        'modifierId'           => 'ModifierId',
        'sceneName'            => 'SceneName',
        'outboundStrategyId'   => 'OutboundStrategyId',
        'creatorId'            => 'CreatorId',
        'robotName'            => 'RobotName',
        'modifierName'         => 'ModifierName',
        'resourceAllocation'   => 'ResourceAllocation',
        'extAttr'              => 'ExtAttr',
        'numType'              => 'NumType',
        'buId'                 => 'BuId',
        'robotId'              => 'RobotId',
        'creatorName'          => 'CreatorName',
        'departmentId'         => 'DepartmentId',
        'robotType'            => 'RobotType',
        'ruleCode'             => 'RuleCode',
        'gmtCreateStr'         => 'GmtCreateStr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->successRate) {
            $res['SuccessRate'] = $this->successRate;
        }
        if (null !== $this->process) {
            $res['Process'] = $this->process;
        }
        if (null !== $this->gmtModifiedStr) {
            $res['GmtModifiedStr'] = $this->gmtModifiedStr;
        }
        if (null !== $this->outboundNum) {
            $res['OutboundNum'] = $this->outboundNum;
        }
        if (null !== $this->outboundStrategyName) {
            $res['OutboundStrategyName'] = $this->outboundStrategyName;
        }
        if (null !== $this->modifierId) {
            $res['ModifierId'] = $this->modifierId;
        }
        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }
        if (null !== $this->outboundStrategyId) {
            $res['OutboundStrategyId'] = $this->outboundStrategyId;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->robotName) {
            $res['RobotName'] = $this->robotName;
        }
        if (null !== $this->modifierName) {
            $res['ModifierName'] = $this->modifierName;
        }
        if (null !== $this->resourceAllocation) {
            $res['ResourceAllocation'] = $this->resourceAllocation;
        }
        if (null !== $this->extAttr) {
            $res['ExtAttr'] = $this->extAttr;
        }
        if (null !== $this->numType) {
            $res['NumType'] = $this->numType;
        }
        if (null !== $this->buId) {
            $res['BuId'] = $this->buId;
        }
        if (null !== $this->robotId) {
            $res['RobotId'] = $this->robotId;
        }
        if (null !== $this->creatorName) {
            $res['CreatorName'] = $this->creatorName;
        }
        if (null !== $this->departmentId) {
            $res['DepartmentId'] = $this->departmentId;
        }
        if (null !== $this->robotType) {
            $res['RobotType'] = $this->robotType;
        }
        if (null !== $this->ruleCode) {
            $res['RuleCode'] = $this->ruleCode;
        }
        if (null !== $this->gmtCreateStr) {
            $res['GmtCreateStr'] = $this->gmtCreateStr;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SuccessRate'])) {
            $model->successRate = $map['SuccessRate'];
        }
        if (isset($map['Process'])) {
            $model->process = $map['Process'];
        }
        if (isset($map['GmtModifiedStr'])) {
            $model->gmtModifiedStr = $map['GmtModifiedStr'];
        }
        if (isset($map['OutboundNum'])) {
            $model->outboundNum = $map['OutboundNum'];
        }
        if (isset($map['OutboundStrategyName'])) {
            $model->outboundStrategyName = $map['OutboundStrategyName'];
        }
        if (isset($map['ModifierId'])) {
            $model->modifierId = $map['ModifierId'];
        }
        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }
        if (isset($map['OutboundStrategyId'])) {
            $model->outboundStrategyId = $map['OutboundStrategyId'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['RobotName'])) {
            $model->robotName = $map['RobotName'];
        }
        if (isset($map['ModifierName'])) {
            $model->modifierName = $map['ModifierName'];
        }
        if (isset($map['ResourceAllocation'])) {
            $model->resourceAllocation = $map['ResourceAllocation'];
        }
        if (isset($map['ExtAttr'])) {
            $model->extAttr = $map['ExtAttr'];
        }
        if (isset($map['NumType'])) {
            $model->numType = $map['NumType'];
        }
        if (isset($map['BuId'])) {
            $model->buId = $map['BuId'];
        }
        if (isset($map['RobotId'])) {
            $model->robotId = $map['RobotId'];
        }
        if (isset($map['CreatorName'])) {
            $model->creatorName = $map['CreatorName'];
        }
        if (isset($map['DepartmentId'])) {
            $model->departmentId = $map['DepartmentId'];
        }
        if (isset($map['RobotType'])) {
            $model->robotType = $map['RobotType'];
        }
        if (isset($map['RuleCode'])) {
            $model->ruleCode = $map['RuleCode'];
        }
        if (isset($map['GmtCreateStr'])) {
            $model->gmtCreateStr = $map['GmtCreateStr'];
        }

        return $model;
    }
}
