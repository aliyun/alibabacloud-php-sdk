<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class ApplyMetricRuleTemplateRequest extends Model
{
    /**
     * @description The error message returned.
     *
     * @example GROUP_INSTANCE_FIRST
     *
     * @var string
     */
    public $applyMode;

    /**
     * @description The callback URL to which a POST request is sent when an alert is triggered based on the alert rule.
     *
     * @example 23
     *
     * @var int
     */
    public $enableEndTime;

    /**
     * @description The mode in which the alert template is applied. Valid values:
     *
     *   GROUP_INSTANCE_FIRST: The metrics in the application group take precedence. If a metric specified in the alert template does not exist in the application group, the system does not generate an alert rule for the metric based on the alert template.
     *   ALARM_TEMPLATE_FIRST: The metrics specified in the alert template take precedence. If a metric specified in the alert template does not exist in the application group, the system still generates an alert rule for the metric based on the alert template.
     *
     * @example 00
     *
     * @var int
     */
    public $enableStartTime;

    /**
     * @description The beginning of the time period during which the alert rule is effective. Valid values: 00 to 23. A value of 00 indicates 00:00 and a value of 23 indicates 23:00.
     *
     * @example 123456
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The response code.
     *
     * >  The HTTP status code 200 indicates that the call succeeds.
     * @example 4
     *
     * @var int
     */
    public $notifyLevel;

    /**
     * @description The ID of the alert template.
     *
     * For more information about how to query the IDs of alert templates, see [DescribeMetricRuleTemplateList](~~114982~~).
     * @example 86400
     *
     * @var int
     */
    public $silenceTime;

    /**
     * @description The alert notification method. Valid values:
     *
     * Set the value to 4. A value of 4 indicates that alert notifications are sent by using TradeManager and DingTalk chatbots.
     * @example 700****
     *
     * @var string
     */
    public $templateIds;

    /**
     * @description The ID of the request.
     *
     * @example https://www.aliyun.com
     *
     * @var string
     */
    public $webhook;
    protected $_name = [
        'applyMode'       => 'ApplyMode',
        'enableEndTime'   => 'EnableEndTime',
        'enableStartTime' => 'EnableStartTime',
        'groupId'         => 'GroupId',
        'notifyLevel'     => 'NotifyLevel',
        'silenceTime'     => 'SilenceTime',
        'templateIds'     => 'TemplateIds',
        'webhook'         => 'Webhook',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyMode) {
            $res['ApplyMode'] = $this->applyMode;
        }
        if (null !== $this->enableEndTime) {
            $res['EnableEndTime'] = $this->enableEndTime;
        }
        if (null !== $this->enableStartTime) {
            $res['EnableStartTime'] = $this->enableStartTime;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->notifyLevel) {
            $res['NotifyLevel'] = $this->notifyLevel;
        }
        if (null !== $this->silenceTime) {
            $res['SilenceTime'] = $this->silenceTime;
        }
        if (null !== $this->templateIds) {
            $res['TemplateIds'] = $this->templateIds;
        }
        if (null !== $this->webhook) {
            $res['Webhook'] = $this->webhook;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyMetricRuleTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplyMode'])) {
            $model->applyMode = $map['ApplyMode'];
        }
        if (isset($map['EnableEndTime'])) {
            $model->enableEndTime = $map['EnableEndTime'];
        }
        if (isset($map['EnableStartTime'])) {
            $model->enableStartTime = $map['EnableStartTime'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['NotifyLevel'])) {
            $model->notifyLevel = $map['NotifyLevel'];
        }
        if (isset($map['SilenceTime'])) {
            $model->silenceTime = $map['SilenceTime'];
        }
        if (isset($map['TemplateIds'])) {
            $model->templateIds = $map['TemplateIds'];
        }
        if (isset($map['Webhook'])) {
            $model->webhook = $map['Webhook'];
        }

        return $model;
    }
}
