<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateRemindRequest extends Model
{
    /**
     * @description The recipient to whom alert notifications are sent. Valid values: OWNER and OTHER. The value OWNER indicates that alert notifications are sent to the object owner. The value OTHER indicates that alert notifications are sent to a specified user.
     *
     * @example 1800
     *
     * @var int
     */
    public $alertInterval;

    /**
     * @description Specifies whether to enable the alert rule. Valid values:
     *
     *   true: enables the alert rule.
     *   false: disables the alert rule.
     *
     * @example SMS,MAIL
     *
     * @var string
     */
    public $alertMethods;

    /**
     * @description The webhook URL of the DingTalk chatbot. You can specify multiple webhook URLs. Separate them with commas (,).
     *
     * If this parameter is set to undefined, the specified webhook URLs are cleared.
     * @example 9527952795279527
     *
     * @var string
     */
    public $alertTargets;

    /**
     * @description The value format required by this parameter varies based on the value that you specify for the AlertUnit parameter. Take note of the following items:
     *
     *   If the AlertUnit parameter is set to OWNER, leave this parameter empty.
     *   If the AlertUnit parameter is set to OTHER, set this parameter to the unique ID (UID) of the specified user. You can specify multiple IDs. Separate them with commas (,). You can specify a maximum of 10 IDs.
     *
     * @example OWNER
     *
     * @var string
     */
    public $alertUnit;

    /**
     * @description The ID of the workflow to which the custom alert rule is applied.. An alert rule can monitor a maximum of five workflows. Separate multiple IDs with commas (,).
     *
     * This parameter takes effect when you set the RemindUnit parameter to BIZPROCESS.
     * @example 1,2,3
     *
     * @var string
     */
    public $baselineIds;

    /**
     * @description The maximum number of alerts. Valid values: 1 to 10. Default value: 3.
     *
     * @example 1,2,3
     *
     * @var string
     */
    public $bizProcessIds;

    /**
     * @description The notification method. Valid values:
     *
     *   MAIL: Alert notifications are sent by emails.
     *   SMS: Alert notifications are sent by text messages.
     *   PHONE: Alert notifications are sent by phone calls. You can use this notification method only in DataWorks Professional Edition or more advanced editions.
     *   DINGROBOTS: Alert notifications are sent by DingTalk messages. You can use this notification method only if the RobotUrls parameter is configured.
     *   WEBHOOKS (WeCom or Lark chatbot): Alert notifications are sent by WeCom or Lark messages. If you want to use this notification method, you must configure the Webhooks parameter.
     *
     * You can specify multiple notification methods. Separate the specified notification methods with commas (,).
     * @example {"hour":23,"minu":59}
     *
     * @var string
     */
    public $detail;

    /**
     * @description The ID of the node to which the custom alert rule is applied.. An alert rule can monitor a maximum of 50 nodes. Separate multiple IDs with commas (,).
     *
     * This parameter takes effect when you set the RemindUnit parameter to NODE.
     * @example 08:00
     *
     * @var string
     */
    public $dndEnd;

    /**
     * @description The details of the conditions that trigger an alert.
     *
     *   If the RemindType parameter is set to FINISHED, leave this parameter empty.
     *
     *   If the RemindType parameter is set to UNFINISHED, set this parameter to key-value pairs. Example: {"hour":23,"minu":59}. Valid values of hour: 0 to 47. Valid values of minu: 0 to 59.
     *
     *   If the RemindType parameter is set to ERROR, leave this parameter empty.
     *
     *   If the RemindType parameter is set to CYCLE_UNFINISHED, set this parameter to key-value pairs in the JSON format. Example: {"1":"05:50","2":"06:50","3":"07:50","4":"08:50","5":"09:50","6":"10:50","7":"11:50","8":"12:50","9":"13:50","10":"14:50","11":"15:50","12":"16:50","13":"17:50","14":"18:50","15":"19:50","16":"20:50","17":"21:50","18":"22:50","19":"23:50","20":"24:50","21":"25:50"}.
     *
     * A key in the JSON string indicates the sequence number of a cycle. Valid values of keys: 1 to 288. A value in the JSON string indicates the time in point when a monitored instance times out in the relevant cycle. Values must be in the format of hh:mm. Valid values of hh: 0 to 47. Valid values of mm: 0 to 59.
     *
     *   If the RemindType parameter is set to TIMEOUT, set this parameter to the timeout period. Unit: seconds. Example: 1800. This indicates that an alert notification is sent if the duration of a monitored instance exceeds 30 minutes.
     *
     * @example 3
     *
     * @var int
     */
    public $maxAlertTimes;

    /**
     * @description The ID of the workspace to which the custom alert rule is applied.. Only one workspace can be specified for a custom alert rule.
     *
     * This parameter takes effect when you set the RemindUnit parameter to PROJECT.
     * @example 1,2,3
     *
     * @var string
     */
    public $nodeIds;

    /**
     * @description The condition that triggers the alert rule. Valid values:
     *
     *   FINISHED: The system monitors an instance when it starts to run and sends an alert notification after the running of the instance is complete.
     *   UNFINISHED: The system monitors an instance when it starts to run and sends an alert notification if the instance is still running at the specified point in time.
     *   ERROR: The system monitors an instance when it starts to run and sends an alert notification if an error occurs.
     *   CYCLE_UNFINISHED: The system sends an alert notification if a monitored instance is still running at the end of the specified cycle. In most cases, you can configure this trigger condition for node instances that are scheduled to run by hour.
     *   TIMEOUT: The system monitors an instance when it starts to run and sends an alert notification if the instance is still running after the specified period ends. In most cases, you can configure this trigger condition to monitor the duration of node instances.
     *
     * For more information, see [Manage custom alert rules](https://help.aliyun.com/document_detail/138172.html).
     * @example 1234
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The end of the period during which no alert notifications are sent. Specify the time in the hh:mm format. Valid values of hh: 0 to 23. Valid values of mm: 0 to 59.
     *
     * This parameter is required.
     * @example 1234
     *
     * @var int
     */
    public $remindId;

    /**
     * @description The type of the object to which the custom alert rule is applied.. Valid values:
     *
     *   NODE: node
     *   BASELINE: baseline
     *   PROJECT: workspace
     *   BIZPROCESS: workflow
     *
     * @example update_remindname
     *
     * @var string
     */
    public $remindName;

    /**
     * @description The intervals at which alert notifications are sent. Unit: seconds. Minimum value: 1200. Default value: 1800.
     *
     * @example FINISHED
     *
     * @var string
     */
    public $remindType;

    /**
     * @description The ID of the baseline to which the custom alert rule is applied.. An alert rule can monitor a maximum of five baselines. Separate multiple IDs with commas (,).
     *
     * This parameter takes effect when you set the RemindUnit parameter to BASELINE.
     * @example NODE
     *
     * @var string
     */
    public $remindUnit;

    /**
     * @description The HTTP status code returned.
     *
     * @example https://oapi.dingtalk.com/robot/send?access_token=******************************
     *
     * @var string
     */
    public $robotUrls;

    /**
     * @description The webhook URL of the WeCom or Lark chatbot. You can specify multiple webhook URLs. Separate the specified webhook URLs with commas (,). The WEBHOOKS notification method must be specified for alertMethods. If this parameter is set to undefined, the specified webhook URLs are cleared.
     *
     * The webhook URL-based alerting feature is supported in the following regions: China (Shanghai), China (Chengdu), China (Zhangjiakou), China (Beijing), China (Hangzhou), China (Shenzhen), China (Hong Kong), Germany (Frankfurt), and Singapore.
     * @example true
     *
     * @var bool
     */
    public $useFlag;

    /**
     * @description Indicates whether the modification to the custom alert rule succeeds.
     *
     * @example https://open.feishu.cn/open-apis/bot/v2/hook/*******
     *
     * @var string
     */
    public $webhooks;
    protected $_name = [
        'alertInterval' => 'AlertInterval',
        'alertMethods'  => 'AlertMethods',
        'alertTargets'  => 'AlertTargets',
        'alertUnit'     => 'AlertUnit',
        'baselineIds'   => 'BaselineIds',
        'bizProcessIds' => 'BizProcessIds',
        'detail'        => 'Detail',
        'dndEnd'        => 'DndEnd',
        'maxAlertTimes' => 'MaxAlertTimes',
        'nodeIds'       => 'NodeIds',
        'projectId'     => 'ProjectId',
        'remindId'      => 'RemindId',
        'remindName'    => 'RemindName',
        'remindType'    => 'RemindType',
        'remindUnit'    => 'RemindUnit',
        'robotUrls'     => 'RobotUrls',
        'useFlag'       => 'UseFlag',
        'webhooks'      => 'Webhooks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertInterval) {
            $res['AlertInterval'] = $this->alertInterval;
        }
        if (null !== $this->alertMethods) {
            $res['AlertMethods'] = $this->alertMethods;
        }
        if (null !== $this->alertTargets) {
            $res['AlertTargets'] = $this->alertTargets;
        }
        if (null !== $this->alertUnit) {
            $res['AlertUnit'] = $this->alertUnit;
        }
        if (null !== $this->baselineIds) {
            $res['BaselineIds'] = $this->baselineIds;
        }
        if (null !== $this->bizProcessIds) {
            $res['BizProcessIds'] = $this->bizProcessIds;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->dndEnd) {
            $res['DndEnd'] = $this->dndEnd;
        }
        if (null !== $this->maxAlertTimes) {
            $res['MaxAlertTimes'] = $this->maxAlertTimes;
        }
        if (null !== $this->nodeIds) {
            $res['NodeIds'] = $this->nodeIds;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->remindId) {
            $res['RemindId'] = $this->remindId;
        }
        if (null !== $this->remindName) {
            $res['RemindName'] = $this->remindName;
        }
        if (null !== $this->remindType) {
            $res['RemindType'] = $this->remindType;
        }
        if (null !== $this->remindUnit) {
            $res['RemindUnit'] = $this->remindUnit;
        }
        if (null !== $this->robotUrls) {
            $res['RobotUrls'] = $this->robotUrls;
        }
        if (null !== $this->useFlag) {
            $res['UseFlag'] = $this->useFlag;
        }
        if (null !== $this->webhooks) {
            $res['Webhooks'] = $this->webhooks;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRemindRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertInterval'])) {
            $model->alertInterval = $map['AlertInterval'];
        }
        if (isset($map['AlertMethods'])) {
            $model->alertMethods = $map['AlertMethods'];
        }
        if (isset($map['AlertTargets'])) {
            $model->alertTargets = $map['AlertTargets'];
        }
        if (isset($map['AlertUnit'])) {
            $model->alertUnit = $map['AlertUnit'];
        }
        if (isset($map['BaselineIds'])) {
            $model->baselineIds = $map['BaselineIds'];
        }
        if (isset($map['BizProcessIds'])) {
            $model->bizProcessIds = $map['BizProcessIds'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['DndEnd'])) {
            $model->dndEnd = $map['DndEnd'];
        }
        if (isset($map['MaxAlertTimes'])) {
            $model->maxAlertTimes = $map['MaxAlertTimes'];
        }
        if (isset($map['NodeIds'])) {
            $model->nodeIds = $map['NodeIds'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RemindId'])) {
            $model->remindId = $map['RemindId'];
        }
        if (isset($map['RemindName'])) {
            $model->remindName = $map['RemindName'];
        }
        if (isset($map['RemindType'])) {
            $model->remindType = $map['RemindType'];
        }
        if (isset($map['RemindUnit'])) {
            $model->remindUnit = $map['RemindUnit'];
        }
        if (isset($map['RobotUrls'])) {
            $model->robotUrls = $map['RobotUrls'];
        }
        if (isset($map['UseFlag'])) {
            $model->useFlag = $map['UseFlag'];
        }
        if (isset($map['Webhooks'])) {
            $model->webhooks = $map['Webhooks'];
        }

        return $model;
    }
}
