<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class UpdateProblemImprovementRequest extends Model
{
    /**
     * @description 幂等校验token
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 发现来源 码表:PROBLEM_DISCOVER_SOURCE
     *
     * @var int
     */
    public $discoverSource;

    /**
     * @description 故障责任部门ID
     *
     * @var int
     */
    public $dutyDepartmentId;

    /**
     * @description 故障责任部门
     *
     * @var string
     */
    public $dutyDepartmentName;

    /**
     * @description 故障责任人id
     *
     * @var int
     */
    public $dutyUserId;

    /**
     * @description 注入方式 码表:PROBLEM_INJECTION_MODE
     *
     * @var string
     */
    public $injectionMode;

    /**
     * @description 监控源
     *
     * @var string
     */
    public $monitorSourceName;

    /**
     * @description 故障ID
     *
     * @var int
     */
    public $problemId;

    /**
     * @description 故障原因
     *
     * @var string
     */
    public $problemReason;

    /**
     * @description 最近活动 码表:PROBLEM_RECENT_ACTIVITY
     *
     * @var string
     */
    public $recentActivity;

    /**
     * @description 恢复方式  码表:PROBLEM_RECOVERY_MODE
     *
     * @var string
     */
    public $recoveryMode;

    /**
     * @description 关联变更
     *
     * @var string
     */
    public $relationChanges;

    /**
     * @description 备注
     *
     * @var string
     */
    public $remark;

    /**
     * @description 复盘负责人id
     *
     * @var int
     */
    public $replayDutyUserId;

    /**
     * @description 用户上报 码表:PROBLEM_USER_REPORT
     *
     * @var int
     */
    public $userReport;
    protected $_name = [
        'clientToken'        => 'clientToken',
        'discoverSource'     => 'discoverSource',
        'dutyDepartmentId'   => 'dutyDepartmentId',
        'dutyDepartmentName' => 'dutyDepartmentName',
        'dutyUserId'         => 'dutyUserId',
        'injectionMode'      => 'injectionMode',
        'monitorSourceName'  => 'monitorSourceName',
        'problemId'          => 'problemId',
        'problemReason'      => 'problemReason',
        'recentActivity'     => 'recentActivity',
        'recoveryMode'       => 'recoveryMode',
        'relationChanges'    => 'relationChanges',
        'remark'             => 'remark',
        'replayDutyUserId'   => 'replayDutyUserId',
        'userReport'         => 'userReport',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->discoverSource) {
            $res['discoverSource'] = $this->discoverSource;
        }
        if (null !== $this->dutyDepartmentId) {
            $res['dutyDepartmentId'] = $this->dutyDepartmentId;
        }
        if (null !== $this->dutyDepartmentName) {
            $res['dutyDepartmentName'] = $this->dutyDepartmentName;
        }
        if (null !== $this->dutyUserId) {
            $res['dutyUserId'] = $this->dutyUserId;
        }
        if (null !== $this->injectionMode) {
            $res['injectionMode'] = $this->injectionMode;
        }
        if (null !== $this->monitorSourceName) {
            $res['monitorSourceName'] = $this->monitorSourceName;
        }
        if (null !== $this->problemId) {
            $res['problemId'] = $this->problemId;
        }
        if (null !== $this->problemReason) {
            $res['problemReason'] = $this->problemReason;
        }
        if (null !== $this->recentActivity) {
            $res['recentActivity'] = $this->recentActivity;
        }
        if (null !== $this->recoveryMode) {
            $res['recoveryMode'] = $this->recoveryMode;
        }
        if (null !== $this->relationChanges) {
            $res['relationChanges'] = $this->relationChanges;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        if (null !== $this->replayDutyUserId) {
            $res['replayDutyUserId'] = $this->replayDutyUserId;
        }
        if (null !== $this->userReport) {
            $res['userReport'] = $this->userReport;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateProblemImprovementRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['discoverSource'])) {
            $model->discoverSource = $map['discoverSource'];
        }
        if (isset($map['dutyDepartmentId'])) {
            $model->dutyDepartmentId = $map['dutyDepartmentId'];
        }
        if (isset($map['dutyDepartmentName'])) {
            $model->dutyDepartmentName = $map['dutyDepartmentName'];
        }
        if (isset($map['dutyUserId'])) {
            $model->dutyUserId = $map['dutyUserId'];
        }
        if (isset($map['injectionMode'])) {
            $model->injectionMode = $map['injectionMode'];
        }
        if (isset($map['monitorSourceName'])) {
            $model->monitorSourceName = $map['monitorSourceName'];
        }
        if (isset($map['problemId'])) {
            $model->problemId = $map['problemId'];
        }
        if (isset($map['problemReason'])) {
            $model->problemReason = $map['problemReason'];
        }
        if (isset($map['recentActivity'])) {
            $model->recentActivity = $map['recentActivity'];
        }
        if (isset($map['recoveryMode'])) {
            $model->recoveryMode = $map['recoveryMode'];
        }
        if (isset($map['relationChanges'])) {
            $model->relationChanges = $map['relationChanges'];
        }
        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }
        if (isset($map['replayDutyUserId'])) {
            $model->replayDutyUserId = $map['replayDutyUserId'];
        }
        if (isset($map['userReport'])) {
            $model->userReport = $map['userReport'];
        }

        return $model;
    }
}
