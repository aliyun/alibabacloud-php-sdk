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
     * @description The format of the alert notification.
     *
     * @var alarmContext
     */
    public $alarmContext;

    /**
     * @description The severity of the alerts. Only the value `WARN` is supported.
     *
     * @example WARN
     *
     * @var string
     */
    public $alertLevel;

    /**
     * @description The conditions of the alert rule. Multiple conditions are separated by the AND or OR logical operators.
     *
     * @var alertRule
     */
    public $alertRule;

    /**
     * @description The name of the alert rule.
     *
     * @example TestAlertRule
     *
     * @var string
     */
    public $alertTitle;

    /**
     * @description The type of the alert rule. Valid values:
     *
     *   `1`: custom alert rules that are used to monitor drill-down data sets
     *   `3`: custom alert rules that are used to monitor tiled data sets
     *   `4`: alert rules that are used to monitor the browser, including the default frontend alert rules
     *   `5`: alert rules that are used to monitor applications, including the default application alert rules
     *   `6`: the default browser alert rules
     *   `7`: the default application alert rules
     *   `8`: Tracing Analysis alert rules
     *   `101`: Prometheus alert rules
     *
     * @example 4
     *
     * @var int
     */
    public $alertType;

    /**
     * @description The version of the alert rule. Default value: `1`.
     *
     * @example 1
     *
     * @var int
     */
    public $alertVersion;

    /**
     * @description Sending method of alarm notification.
     *
     * @var string[]
     */
    public $alertWays;

    /**
     * @description The configuration items of the alert rule. The value is a JSON string.
     *
     * The configuration item **continuous** indicates whether alert notifications are continuously sent. Valid values:
     *
     *   `true`: Alert notifications are sent every minute.
     *   `false`: The alert silence feature is enabled.
     *
     * The configuration item **dataRevision** indicates the data revision policy that is used if no data is obtained or the data is null. Default value: 2. Valid values:
     *
     *   `0`: overwrites the data by using the value 0
     *   `1`: overwrites the data by using the value 1
     *   `2`: overwrites the data by using the value null. This value indicates that no alert is triggered if no data exists
     *
     * @example {\\"continuous\\":true,\\"dataRevision\\":2}
     *
     * @var string
     */
    public $config;

    /**
     * @description The ID of the contact group. Multiple IDs are separated by commas (,).
     *
     * @example 381*,572*
     *
     * @var string
     */
    public $contactGroupIdList;

    /**
     * @description The IDs of the alert contact groups. The value is a JSON array.
     *
     * @example [123, 234]
     *
     * @var string
     */
    public $contactGroupIds;

    /**
     * @description The timestamp that shows when the alert rule was created.
     *
     * @example 1579508519683
     *
     * @var int
     */
    public $createTime;

    /**
     * @description Indicates whether the alert is sent through the alert center. Valid values:
     *
     *   `true`
     *   `false`
     *
     * @example true
     *
     * @var bool
     */
    public $hostByAlertManager;

    /**
     * @description The ID of the alert rule.
     *
     * @example 123
     *
     * @var int
     */
    public $id;

    /**
     * @description The information about the application that is associated with the alert rule.
     *
     * @var metricParam
     */
    public $metricParam;

    /**
     * @description The time ranges when the alert rule takes effect and when alert notifications are sent.
     *
     * @var notice
     */
    public $notice;

    /**
     * @description The ID of the region to which the alert rule belongs.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmxyexli2****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The status of the alert rule. `RUNNING`: The alert rule is enabled. `STOPPED`: The alert rule is disabled.
     *
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the Application Real-Time Monitoring Service (ARMS) task that is associated with the alert rule.
     *
     * @example 123
     *
     * @var int
     */
    public $taskId;

    /**
     * @description The status of the task. This parameter is hidden from users.
     *
     * @example ""
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @description The name of the alert.
     *
     * @example AlertTest
     *
     * @var string
     */
    public $title;

    /**
     * @description The timestamp that shows when the alert rule was updated.
     *
     * @example 1480521600000
     *
     * @var int
     */
    public $updateTime;

    /**
     * @description The ID of the user to which the alert rule belongs.
     *
     * @example 113197164949****
     *
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
        'alertWays'          => 'AlertWays',
        'config'             => 'Config',
        'contactGroupIdList' => 'ContactGroupIdList',
        'contactGroupIds'    => 'ContactGroupIds',
        'createTime'         => 'CreateTime',
        'hostByAlertManager' => 'HostByAlertManager',
        'id'                 => 'Id',
        'metricParam'        => 'MetricParam',
        'notice'             => 'Notice',
        'regionId'           => 'RegionId',
        'resourceGroupId'    => 'ResourceGroupId',
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
        if (null !== $this->hostByAlertManager) {
            $res['HostByAlertManager'] = $this->hostByAlertManager;
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (isset($map['HostByAlertManager'])) {
            $model->hostByAlertManager = $map['HostByAlertManager'];
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
