<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemImprovementResponseBody;

use AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemImprovementResponseBody\data\measureList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $customProblemReason;

    /**
     * @example 1
     *
     * @var string
     */
    public $discoverSource;

    /**
     * @example 12312
     *
     * @var string
     */
    public $dutyDepartmentId;

    /**
     * @var string
     */
    public $dutyDepartmentName;

    /**
     * @example 231
     *
     * @var int
     */
    public $dutyUserId;

    /**
     * @var int
     */
    public $dutyUserIsValid;

    /**
     * @var string
     */
    public $dutyUserName;

    /**
     * @example 13098898****
     *
     * @var string
     */
    public $dutyUserPhone;

    /**
     * @example 3
     *
     * @var string
     */
    public $injectionMode;

    /**
     * @example true
     *
     * @var bool
     */
    public $isManual;

    /**
     * @var measureList[]
     */
    public $measureList;

    /**
     * @example Zabbix
     *
     * @var string
     */
    public $monitorSourceName;

    /**
     * @example 231231
     *
     * @var string
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
     * @example 23123
     *
     * @var int
     */
    public $replayDutyUserId;

    /**
     * @var int
     */
    public $replayDutyUserIsValid;

    /**
     * @var string
     */
    public $replayDutyUserName;

    /**
     * @example 1308787****
     *
     * @var string
     */
    public $replayDutyUserPhone;

    /**
     * @example 1
     *
     * @var int
     */
    public $userReport;
    protected $_name = [
        'customProblemReason'   => 'customProblemReason',
        'discoverSource'        => 'discoverSource',
        'dutyDepartmentId'      => 'dutyDepartmentId',
        'dutyDepartmentName'    => 'dutyDepartmentName',
        'dutyUserId'            => 'dutyUserId',
        'dutyUserIsValid'       => 'dutyUserIsValid',
        'dutyUserName'          => 'dutyUserName',
        'dutyUserPhone'         => 'dutyUserPhone',
        'injectionMode'         => 'injectionMode',
        'isManual'              => 'isManual',
        'measureList'           => 'measureList',
        'monitorSourceName'     => 'monitorSourceName',
        'problemId'             => 'problemId',
        'problemReason'         => 'problemReason',
        'recentActivity'        => 'recentActivity',
        'recoveryMode'          => 'recoveryMode',
        'relationChanges'       => 'relationChanges',
        'remark'                => 'remark',
        'replayDutyUserId'      => 'replayDutyUserId',
        'replayDutyUserIsValid' => 'replayDutyUserIsValid',
        'replayDutyUserName'    => 'replayDutyUserName',
        'replayDutyUserPhone'   => 'replayDutyUserPhone',
        'userReport'            => 'userReport',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->dutyUserIsValid) {
            $res['dutyUserIsValid'] = $this->dutyUserIsValid;
        }
        if (null !== $this->dutyUserName) {
            $res['dutyUserName'] = $this->dutyUserName;
        }
        if (null !== $this->dutyUserPhone) {
            $res['dutyUserPhone'] = $this->dutyUserPhone;
        }
        if (null !== $this->injectionMode) {
            $res['injectionMode'] = $this->injectionMode;
        }
        if (null !== $this->isManual) {
            $res['isManual'] = $this->isManual;
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
        if (null !== $this->replayDutyUserIsValid) {
            $res['replayDutyUserIsValid'] = $this->replayDutyUserIsValid;
        }
        if (null !== $this->replayDutyUserName) {
            $res['replayDutyUserName'] = $this->replayDutyUserName;
        }
        if (null !== $this->replayDutyUserPhone) {
            $res['replayDutyUserPhone'] = $this->replayDutyUserPhone;
        }
        if (null !== $this->userReport) {
            $res['userReport'] = $this->userReport;
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
        if (isset($map['dutyUserIsValid'])) {
            $model->dutyUserIsValid = $map['dutyUserIsValid'];
        }
        if (isset($map['dutyUserName'])) {
            $model->dutyUserName = $map['dutyUserName'];
        }
        if (isset($map['dutyUserPhone'])) {
            $model->dutyUserPhone = $map['dutyUserPhone'];
        }
        if (isset($map['injectionMode'])) {
            $model->injectionMode = $map['injectionMode'];
        }
        if (isset($map['isManual'])) {
            $model->isManual = $map['isManual'];
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
        if (isset($map['replayDutyUserIsValid'])) {
            $model->replayDutyUserIsValid = $map['replayDutyUserIsValid'];
        }
        if (isset($map['replayDutyUserName'])) {
            $model->replayDutyUserName = $map['replayDutyUserName'];
        }
        if (isset($map['replayDutyUserPhone'])) {
            $model->replayDutyUserPhone = $map['replayDutyUserPhone'];
        }
        if (isset($map['userReport'])) {
            $model->userReport = $map['userReport'];
        }

        return $model;
    }
}
