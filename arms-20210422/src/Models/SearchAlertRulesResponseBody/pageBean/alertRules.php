<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210422\Models\SearchAlertRulesResponseBody\pageBean;

use AlibabaCloud\SDK\ARMS\V20210422\Models\SearchAlertRulesResponseBody\pageBean\alertRules\alarmContext;
use AlibabaCloud\SDK\ARMS\V20210422\Models\SearchAlertRulesResponseBody\pageBean\alertRules\alertRule;
use AlibabaCloud\SDK\ARMS\V20210422\Models\SearchAlertRulesResponseBody\pageBean\alertRules\metricParam;
use AlibabaCloud\SDK\ARMS\V20210422\Models\SearchAlertRulesResponseBody\pageBean\alertRules\notice;
use AlibabaCloud\Tea\Model;

class alertRules extends Model
{
    /**
     * @var alarmContext
     */
    public $alarmContext;

    /**
     * @var string
     */
    public $alertLevel;

    /**
     * @var alertRule
     */
    public $alertRule;

    /**
     * @var string
     */
    public $alertTitle;

    /**
     * @var int
     */
    public $alertType;

    /**
     * @var int
     */
    public $alertVersion;

    /**
     * @var string[]
     */
    public $alertWay;

    /**
     * @var string[]
     */
    public $alertWays;

    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $contactGroupIdList;

    /**
     * @var string
     */
    public $contactGroupIds;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $id;

    /**
     * @var metricParam
     */
    public $metricParam;

    /**
     * @var notice
     */
    public $notice;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $title;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'alarmContext'       => 'AlarmContext',
        'alertLevel'         => 'AlertLevel',
        'alertRule'          => 'AlertRule',
        'alertTitle'         => 'AlertTitle',
        'alertType'          => 'AlertType',
        'alertVersion'       => 'AlertVersion',
        'alertWay'           => 'AlertWay',
        'alertWays'          => 'AlertWays',
        'config'             => 'Config',
        'contactGroupIdList' => 'ContactGroupIdList',
        'contactGroupIds'    => 'ContactGroupIds',
        'createTime'         => 'CreateTime',
        'id'                 => 'Id',
        'metricParam'        => 'MetricParam',
        'notice'             => 'Notice',
        'regionId'           => 'RegionId',
        'status'             => 'Status',
        'taskId'             => 'TaskId',
        'taskStatus'         => 'TaskStatus',
        'title'              => 'Title',
        'updateTime'         => 'UpdateTime',
        'userId'             => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmContext) {
            $res['AlarmContext'] = null !== $this->alarmContext ? $this->alarmContext->toMap() : null;
        }
        if (null !== $this->alertLevel) {
            $res['AlertLevel'] = $this->alertLevel;
        }
        if (null !== $this->alertRule) {
            $res['AlertRule'] = null !== $this->alertRule ? $this->alertRule->toMap() : null;
        }
        if (null !== $this->alertTitle) {
            $res['AlertTitle'] = $this->alertTitle;
        }
        if (null !== $this->alertType) {
            $res['AlertType'] = $this->alertType;
        }
        if (null !== $this->alertVersion) {
            $res['AlertVersion'] = $this->alertVersion;
        }
        if (null !== $this->alertWay) {
            $res['AlertWay'] = $this->alertWay;
        }
        if (null !== $this->alertWays) {
            $res['AlertWays'] = $this->alertWays;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->contactGroupIdList) {
            $res['ContactGroupIdList'] = $this->contactGroupIdList;
        }
        if (null !== $this->contactGroupIds) {
            $res['ContactGroupIds'] = $this->contactGroupIds;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->metricParam) {
            $res['MetricParam'] = null !== $this->metricParam ? $this->metricParam->toMap() : null;
        }
        if (null !== $this->notice) {
            $res['Notice'] = null !== $this->notice ? $this->notice->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmContext'])) {
            $model->alarmContext = alarmContext::fromMap($map['AlarmContext']);
        }
        if (isset($map['AlertLevel'])) {
            $model->alertLevel = $map['AlertLevel'];
        }
        if (isset($map['AlertRule'])) {
            $model->alertRule = alertRule::fromMap($map['AlertRule']);
        }
        if (isset($map['AlertTitle'])) {
            $model->alertTitle = $map['AlertTitle'];
        }
        if (isset($map['AlertType'])) {
            $model->alertType = $map['AlertType'];
        }
        if (isset($map['AlertVersion'])) {
            $model->alertVersion = $map['AlertVersion'];
        }
        if (isset($map['AlertWay'])) {
            if (!empty($map['AlertWay'])) {
                $model->alertWay = $map['AlertWay'];
            }
        }
        if (isset($map['AlertWays'])) {
            if (!empty($map['AlertWays'])) {
                $model->alertWays = $map['AlertWays'];
            }
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['ContactGroupIdList'])) {
            $model->contactGroupIdList = $map['ContactGroupIdList'];
        }
        if (isset($map['ContactGroupIds'])) {
            $model->contactGroupIds = $map['ContactGroupIds'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MetricParam'])) {
            $model->metricParam = metricParam::fromMap($map['MetricParam']);
        }
        if (isset($map['Notice'])) {
            $model->notice = notice::fromMap($map['Notice']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
