<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemImprovementResponseBody;

use AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemImprovementResponseBody\data\measureList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 故障ID
     *
     * @var string
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
     * @description 注入方式 码表:PROBLEM_INJECTION_MODE
     *
     * @var string
     */
    public $injectionMode;

    /**
     * @description 恢复方式  码表:PROBLEM_RECOVERY_MODE
     *
     * @var string
     */
    public $recoveryMode;

    /**
     * @description 发现来源 码表:PROBLEM_DISCOVER_SOURCE
     *
     * @var string
     */
    public $discoverSource;

    /**
     * @description 用户上报 码表:PROBLEM_USER_REPORT
     *
     * @var int
     */
    public $userReport;

    /**
     * @description 监控源
     *
     * @var string
     */
    public $monitorSourceName;

    /**
     * @description 关联变更
     *
     * @var string
     */
    public $relationChanges;

    /**
     * @description 故障责任人id
     *
     * @var int
     */
    public $dutyUserId;

    /**
     * @description 复盘负责人id
     *
     * @var int
     */
    public $replayDutyUserId;

    /**
     * @description 复盘负责人手机号
     *
     * @var string
     */
    public $replayDutyUserPhone;

    /**
     * @description 故障责任部门
     *
     * @var string
     */
    public $dutyDepartmentId;

    /**
     * @description 故障责任人名称
     *
     * @var string
     */
    public $dutyUserName;

    /**
     * @description 故障责任人手机号
     *
     * @var string
     */
    public $dutyUserPhone;

    /**
     * @description 复盘负责人名称
     *
     * @var string
     */
    public $replayDutyUserName;

    /**
     * @description 备注
     *
     * @var string
     */
    public $remark;

    /**
     * @description 是否手动
     *
     * @var bool
     */
    public $isManual;

    /**
     * @description 故障责任部门名称
     *
     * @var string
     */
    public $dutyDepartmentName;

    /**
     * @description 改进措施列表
     *
     * @var measureList[]
     */
    public $measureList;
    protected $_name = [
        'problemId'           => 'problemId',
        'problemReason'       => 'problemReason',
        'recentActivity'      => 'recentActivity',
        'injectionMode'       => 'injectionMode',
        'recoveryMode'        => 'recoveryMode',
        'discoverSource'      => 'discoverSource',
        'userReport'          => 'userReport',
        'monitorSourceName'   => 'monitorSourceName',
        'relationChanges'     => 'relationChanges',
        'dutyUserId'          => 'dutyUserId',
        'replayDutyUserId'    => 'replayDutyUserId',
        'replayDutyUserPhone' => 'replayDutyUserPhone',
        'dutyDepartmentId'    => 'dutyDepartmentId',
        'dutyUserName'        => 'dutyUserName',
        'dutyUserPhone'       => 'dutyUserPhone',
        'replayDutyUserName'  => 'replayDutyUserName',
        'remark'              => 'remark',
        'isManual'            => 'isManual',
        'dutyDepartmentName'  => 'dutyDepartmentName',
        'measureList'         => 'measureList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->problemId) {
            $res['problemId'] = $this->problemId;
        }
        if (null !== $this->problemReason) {
            $res['problemReason'] = $this->problemReason;
        }
        if (null !== $this->recentActivity) {
            $res['recentActivity'] = $this->recentActivity;
        }
        if (null !== $this->injectionMode) {
            $res['injectionMode'] = $this->injectionMode;
        }
        if (null !== $this->recoveryMode) {
            $res['recoveryMode'] = $this->recoveryMode;
        }
        if (null !== $this->discoverSource) {
            $res['discoverSource'] = $this->discoverSource;
        }
        if (null !== $this->userReport) {
            $res['userReport'] = $this->userReport;
        }
        if (null !== $this->monitorSourceName) {
            $res['monitorSourceName'] = $this->monitorSourceName;
        }
        if (null !== $this->relationChanges) {
            $res['relationChanges'] = $this->relationChanges;
        }
        if (null !== $this->dutyUserId) {
            $res['dutyUserId'] = $this->dutyUserId;
        }
        if (null !== $this->replayDutyUserId) {
            $res['replayDutyUserId'] = $this->replayDutyUserId;
        }
        if (null !== $this->replayDutyUserPhone) {
            $res['replayDutyUserPhone'] = $this->replayDutyUserPhone;
        }
        if (null !== $this->dutyDepartmentId) {
            $res['dutyDepartmentId'] = $this->dutyDepartmentId;
        }
        if (null !== $this->dutyUserName) {
            $res['dutyUserName'] = $this->dutyUserName;
        }
        if (null !== $this->dutyUserPhone) {
            $res['dutyUserPhone'] = $this->dutyUserPhone;
        }
        if (null !== $this->replayDutyUserName) {
            $res['replayDutyUserName'] = $this->replayDutyUserName;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        if (null !== $this->isManual) {
            $res['isManual'] = $this->isManual;
        }
        if (null !== $this->dutyDepartmentName) {
            $res['dutyDepartmentName'] = $this->dutyDepartmentName;
        }
        if (null !== $this->measureList) {
            $res['measureList'] = [];
            if (null !== $this->measureList && \is_array($this->measureList)) {
                $n = 0;
                foreach ($this->measureList as $item) {
                    $res['measureList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['problemId'])) {
            $model->problemId = $map['problemId'];
        }
        if (isset($map['problemReason'])) {
            $model->problemReason = $map['problemReason'];
        }
        if (isset($map['recentActivity'])) {
            $model->recentActivity = $map['recentActivity'];
        }
        if (isset($map['injectionMode'])) {
            $model->injectionMode = $map['injectionMode'];
        }
        if (isset($map['recoveryMode'])) {
            $model->recoveryMode = $map['recoveryMode'];
        }
        if (isset($map['discoverSource'])) {
            $model->discoverSource = $map['discoverSource'];
        }
        if (isset($map['userReport'])) {
            $model->userReport = $map['userReport'];
        }
        if (isset($map['monitorSourceName'])) {
            $model->monitorSourceName = $map['monitorSourceName'];
        }
        if (isset($map['relationChanges'])) {
            $model->relationChanges = $map['relationChanges'];
        }
        if (isset($map['dutyUserId'])) {
            $model->dutyUserId = $map['dutyUserId'];
        }
        if (isset($map['replayDutyUserId'])) {
            $model->replayDutyUserId = $map['replayDutyUserId'];
        }
        if (isset($map['replayDutyUserPhone'])) {
            $model->replayDutyUserPhone = $map['replayDutyUserPhone'];
        }
        if (isset($map['dutyDepartmentId'])) {
            $model->dutyDepartmentId = $map['dutyDepartmentId'];
        }
        if (isset($map['dutyUserName'])) {
            $model->dutyUserName = $map['dutyUserName'];
        }
        if (isset($map['dutyUserPhone'])) {
            $model->dutyUserPhone = $map['dutyUserPhone'];
        }
        if (isset($map['replayDutyUserName'])) {
            $model->replayDutyUserName = $map['replayDutyUserName'];
        }
        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }
        if (isset($map['isManual'])) {
            $model->isManual = $map['isManual'];
        }
        if (isset($map['dutyDepartmentName'])) {
            $model->dutyDepartmentName = $map['dutyDepartmentName'];
        }
        if (isset($map['measureList'])) {
            if (!empty($map['measureList'])) {
                $model->measureList = [];
                $n                  = 0;
                foreach ($map['measureList'] as $item) {
                    $model->measureList[$n++] = null !== $item ? measureList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
