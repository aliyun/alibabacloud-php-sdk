<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertRulesResponseBody\pageBean;

use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertRulesResponseBody\pageBean\alertRules\alarmContext;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertRulesResponseBody\pageBean\alertRules\alertRule;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertRulesResponseBody\pageBean\alertRules\metricParam;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertRulesResponseBody\pageBean\alertRules\notice;
use AlibabaCloud\Tea\Model;

class alertRules extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var alarmContext
     */
    public $alarmContext;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $contactGroupIdList;

    /**
     * @var notice
     */
    public $notice;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $alertTitle;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var int
     */
    public $alertVersion;

    /**
     * @var alertRule
     */
    public $alertRule;

    /**
     * @var metricParam
     */
    public $metricParam;

    /**
     * @var int
     */
    public $alertType;

    /**
     * @var string
     */
    public $contactGroupIds;

    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $alertLevel;

    /**
     * @var string[]
     */
    public $alertWay;

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
    public $taskId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string[]
     */
    public $alertWays;
    protected $_name = [
        'status'             => 'Status',
        'alarmContext'       => 'AlarmContext',
        'updateTime'         => 'UpdateTime',
        'contactGroupIdList' => 'ContactGroupIdList',
        'notice'             => 'Notice',
        'createTime'         => 'CreateTime',
        'alertTitle'         => 'AlertTitle',
        'userId'             => 'UserId',
        'alertVersion'       => 'AlertVersion',
        'alertRule'          => 'AlertRule',
        'metricParam'        => 'MetricParam',
        'alertType'          => 'AlertType',
        'contactGroupIds'    => 'ContactGroupIds',
        'config'             => 'Config',
        'regionId'           => 'RegionId',
        'alertLevel'         => 'AlertLevel',
        'alertWay'           => 'AlertWay',
        'taskStatus'         => 'TaskStatus',
        'title'              => 'Title',
        'taskId'             => 'TaskId',
        'id'                 => 'Id',
        'alertWays'          => 'AlertWays',
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
        if (null !== $this->alarmContext) {
            $res['AlarmContext'] = null !== $this->alarmContext ? $this->alarmContext->toMap() : null;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->contactGroupIdList) {
            $res['ContactGroupIdList'] = $this->contactGroupIdList;
        }
        if (null !== $this->notice) {
            $res['Notice'] = null !== $this->notice ? $this->notice->toMap() : null;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->alertTitle) {
            $res['AlertTitle'] = $this->alertTitle;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->alertVersion) {
            $res['AlertVersion'] = $this->alertVersion;
        }
        if (null !== $this->alertRule) {
            $res['AlertRule'] = null !== $this->alertRule ? $this->alertRule->toMap() : null;
        }
        if (null !== $this->metricParam) {
            $res['MetricParam'] = null !== $this->metricParam ? $this->metricParam->toMap() : null;
        }
        if (null !== $this->alertType) {
            $res['AlertType'] = $this->alertType;
        }
        if (null !== $this->contactGroupIds) {
            $res['ContactGroupIds'] = $this->contactGroupIds;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->alertLevel) {
            $res['AlertLevel'] = $this->alertLevel;
        }
        if (null !== $this->alertWay) {
            $res['AlertWay'] = $this->alertWay;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->alertWays) {
            $res['AlertWays'] = $this->alertWays;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['AlarmContext'])) {
            $model->alarmContext = alarmContext::fromMap($map['AlarmContext']);
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['ContactGroupIdList'])) {
            $model->contactGroupIdList = $map['ContactGroupIdList'];
        }
        if (isset($map['Notice'])) {
            $model->notice = notice::fromMap($map['Notice']);
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['AlertTitle'])) {
            $model->alertTitle = $map['AlertTitle'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['AlertVersion'])) {
            $model->alertVersion = $map['AlertVersion'];
        }
        if (isset($map['AlertRule'])) {
            $model->alertRule = alertRule::fromMap($map['AlertRule']);
        }
        if (isset($map['MetricParam'])) {
            $model->metricParam = metricParam::fromMap($map['MetricParam']);
        }
        if (isset($map['AlertType'])) {
            $model->alertType = $map['AlertType'];
        }
        if (isset($map['ContactGroupIds'])) {
            $model->contactGroupIds = $map['ContactGroupIds'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['AlertLevel'])) {
            $model->alertLevel = $map['AlertLevel'];
        }
        if (isset($map['AlertWay'])) {
            if (!empty($map['AlertWay'])) {
                $model->alertWay = $map['AlertWay'];
            }
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['AlertWays'])) {
            if (!empty($map['AlertWays'])) {
                $model->alertWays = $map['AlertWays'];
            }
        }

        return $model;
    }
}
