<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class UpdateProblemImprovementRequest extends Model
{
    /**
     * @example 4361a0e1-6747-4834-96ce-0c4840fd3813
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $customProblemReason;

    /**
     * @example 1
     *
     * @var int
     */
    public $discoverSource;

    /**
     * @example 123123
     *
     * @var int
     */
    public $dutyDepartmentId;

    /**
     * @var string
     */
    public $dutyDepartmentName;

    /**
     * @example 1231
     *
     * @var int
     */
    public $dutyUserId;

    /**
     * @example 1
     *
     * @var string
     */
    public $injectionMode;

    /**
     * @example Zabbix
     *
     * @var string
     */
    public $monitorSourceName;

    /**
     * @example 12312
     *
     * @var int
     */
    public $problemId;

    /**
     * @var string
     */
    public $problemReason;

    /**
     * @example 2
     *
     * @var string
     */
    public $recentActivity;

    /**
     * @example 2
     *
     * @var string
     */
    public $recoveryMode;

    /**
     * @var string
     */
    public $relationChanges;

    /**
     * @var string
     */
    public $remark;

    /**
     * @example 1213
     *
     * @var int
     */
    public $replayDutyUserId;

    /**
     * @example 10
     *
     * @var int
     */
    public $userReport;
    protected $_name = [
        'clientToken'         => 'clientToken',
        'customProblemReason' => 'customProblemReason',
        'discoverSource'      => 'discoverSource',
        'dutyDepartmentId'    => 'dutyDepartmentId',
        'dutyDepartmentName'  => 'dutyDepartmentName',
        'dutyUserId'          => 'dutyUserId',
        'injectionMode'       => 'injectionMode',
        'monitorSourceName'   => 'monitorSourceName',
        'problemId'           => 'problemId',
        'problemReason'       => 'problemReason',
        'recentActivity'      => 'recentActivity',
        'recoveryMode'        => 'recoveryMode',
        'relationChanges'     => 'relationChanges',
        'remark'              => 'remark',
        'replayDutyUserId'    => 'replayDutyUserId',
        'userReport'          => 'userReport',
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
        if (null !== $this->customProblemReason) {
            $res['customProblemReason'] = $this->customProblemReason;
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
        if (isset($map['customProblemReason'])) {
            $model->customProblemReason = $map['customProblemReason'];
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
