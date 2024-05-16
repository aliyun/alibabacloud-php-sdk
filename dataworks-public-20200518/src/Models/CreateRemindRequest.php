<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateRemindRequest extends Model
{
    /**
     * @description The recipient of the alert. Valid values: OWNER and OTHER. The value OWNER indicates the node owner. The value OTHER indicates a specified user.
     *
     * @example 1800
     *
     * @var int
     */
    public $alertInterval;

    /**
     * @description The webhook URL of the DingTalk chatbot. You can specify multiple webhook URLs. Separate the specified webhook URLs with commas (,).
     *
     * This parameter is required.
     * @example SMS,MAIL
     *
     * @var string
     */
    public $alertMethods;

    /**
     * @description The webhook URL of the WeCom or Lark chatbot. You can specify multiple webhook URLs. Separate the specified webhook URLs with commas (,). The WEBHOOKS notification method must be specified for alertMethods.
     *
     * The webhook URL-based alerting feature is supported in the following regions: China (Shanghai), China (Chengdu), China (Zhangjiakou), China (Beijing), China (Hangzhou), China (Shenzhen), China (Hong Kong), Germany (Frankfurt), and Singapore.
     * @example 9527952795279527
     *
     * @var string
     */
    public $alertTargets;

    /**
     * @description *   If the AlertUnit parameter is set to OWNER, leave this parameter empty.
     *   If the AlertUnit parameter is set to OTHER, set this parameter to the ID of the Alibaba Cloud account used by a specific user. You can specify multiple IDs. Separate multiple IDs with commas (,). You can specify a maximum of 10 IDs.
     *
     * This parameter is required.
     * @example OWNER
     *
     * @var string
     */
    public $alertUnit;

    /**
     * @description The ID of the workflow to which the custom alert rule is applied. This parameter takes effect when the RemindUnit parameter is set to BIZPROCESS. You can specify multiple IDs. Separate multiple IDs with commas (,). A maximum of five workflows can be specified for a custom alert rule.
     *
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
     *
     *   SMS: Alert notifications are sent by text messages.
     *
     * Alert notifications can be sent by text messages only in the Singapore, Malaysia (Kuala Lumpur), and Germany (Frankfurt) regions.
     *
     *   WEBHOOKS (WeCom or Lark chatbot): Alert notifications are sent by WeCom or Lark messages. If you want to use this notification method, you must configure the Webhooks parameter.
     *
     * You can specify multiple notification methods. Separate them with commas (,).
     * @example {"hour":23,"minu":59}
     *
     * @var string
     */
    public $detail;

    /**
     * @description The ID of the node to which the custom alert rule is applied. This parameter takes effect when the RemindUnit parameter is set to NODE. You can specify multiple IDs. Separate multiple IDs with commas (,). A maximum of 50 nodes can be specified for a custom alert rule.
     *
     * @example 08:00
     *
     * @var string
     */
    public $dndEnd;

    /**
     * @description The details of the conditions that trigger an alert.
     *
     *   If the RemindType parameter is set to FINISHED, leave this parameter empty.
     *   If the RemindType parameter is set to UNFINISHED, specify this parameter as key-value pairs. Example: {"hour":23,"minu":59}. Valid values of hour: 0 to 47. Valid values of minu: 0 to 59.
     *   If the RemindType parameter is set to ERROR, leave this parameter empty.
     *   If the RemindType parameter is set to CYCLE_UNFINISHED, specify this parameter as key-value pairs. Example: {"1":"05:50","2":"06:50","3":"07:50","4":"08:50","5":"09:50","6":"10:50","7":"11:50","8":"12:50","9":"13:50","10":"14:50","11":"15:50","12":"16:50","13":"17:50","14":"18:50","15":"19:50","16":"20:50","17":"21:50","18":"22:50","19":"23:50","20":"24:50","21":"25:50"}. The key indicates the ID of the cycle. Valid values of the ID: 1 to 288. The value indicates the timeout period of the node that is running in the cycle. Specify the value in the hh:mm format. Valid values of hh: 0 to 47. Valid values of mm: 0 to 59.
     *   If the RemindType parameter is set to TIMEOUT, set this parameter to the timeout period. Unit: seconds. Example: 1800. This value indicates that an alert is reported if the node has run for more than 30 minutes.
     *
     * @example 2
     *
     * @var int
     */
    public $maxAlertTimes;

    /**
     * @description The ID of the workspace to which the custom alert rule is applied. This parameter takes effect when the RemindUnit parameter is set to PROJECT. Only one workspace can be specified for a custom alert rule.
     *
     * @example 1,2,3
     *
     * @var string
     */
    public $nodeIds;

    /**
     * @description The conditions that trigger an alert. Valid values: FINISHED, UNFINISHED, ERROR, CYCLE_UNFINISHED, and TIMEOUT. The value FINISHED indicates that the node is run. The value UNFINISHED indicates that the node is still running at the specified point in time. The value ERROR indicates that an error occurs when the node is running. The value CYCLE_UNFINISHED indicates that the node is still running in the specified cycle. The value TIMEOUT indicates that the node times out.
     *
     * @example 9527
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The type of the object to which the custom alert rule is applied. Valid values: NODE, BASELINE, PROJECT, and BIZPROCESS. The value NODE indicates a node. The value BASELINE indicates a baseline. The value PROJECT indicates a workspace. The value BIZPROCESS indicates a workflow.
     *
     * This parameter is required.
     * @example test_error_remind
     *
     * @var string
     */
    public $remindName;

    /**
     * @description The minimum interval at which alerts are reported. Unit: seconds. Minimum value: 1200. Default value: 1800.
     *
     * This parameter is required.
     * @example FINISHED
     *
     * @var string
     */
    public $remindType;

    /**
     * @description The ID of the baseline to which the custom alert rule is applied. This parameter takes effect when the RemindUnit parameter is set to BASELINE. You can specify multiple IDs. Separate multiple IDs with commas (,). A maximum of five baselines can be specified for a custom alert rule.
     *
     * This parameter is required.
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
     * @description The ID of the custom alert rule returned.
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
        'remindName'    => 'RemindName',
        'remindType'    => 'RemindType',
        'remindUnit'    => 'RemindUnit',
        'robotUrls'     => 'RobotUrls',
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
        if (null !== $this->webhooks) {
            $res['Webhooks'] = $this->webhooks;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRemindRequest
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
        if (isset($map['Webhooks'])) {
            $model->webhooks = $map['Webhooks'];
        }

        return $model;
    }
}
