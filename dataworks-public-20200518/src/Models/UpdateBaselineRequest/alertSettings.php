<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateBaselineRequest;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateBaselineRequest\alertSettings\dingRobots;
use AlibabaCloud\Tea\Model;

class alertSettings extends Model
{
    /**
     * @description The interval at which an event alert notification is sent. Unit: minutes. Minimum value: 5. Maximum value: 1,440.
     *
     * @example 1800
     *
     * @var int
     */
    public $alertInterval;

    /**
     * @description The maximum number of times an event alert notification is sent. Maximum value: 24.
     *
     * @example 1
     *
     * @var int
     */
    public $alertMaximum;

    /**
     * @description The alert notification methods. Valid values: MAIL, SMS, PHONE, DINGROBOTS, and Webhooks. The value MAIL indicates that alert notifications are sent by email. The value SMS indicates that alert notifications are sent by text message. The value PHONE indicates that alert notifications are sent by phone call. You can use this notification method only in DataWorks Professional Edition or a more advanced edition. The value DINGROBOTS indicates that alert notifications are sent by using a DingTalk chatbot. You can use this notification method only if the RobotUrls parameter is configured. The value Webhooks indicates that alert notifications are sent by WeCom or Lark. You can use this notification method only if the Webhooks parameter is configured.
     *
     * @var string[]
     */
    public $alertMethods;

    /**
     * @description The details of the alert recipient. If you set AlertRecipientType to OWNER, leave this parameter empty. If you set AlertRecipientType to SHIFT_SCHEDULE, set this parameter to the name of the shift schedule. If you set AlertRecipientType to OTHER, set this parameter to the employee IDs of specified personnel.
     *
     * @example 123123
     *
     * @var string
     */
    public $alertRecipient;

    /**
     * @description The type of the alert recipient. Valid values: OWNER, OTHER, and SHIFT_SCHEDULE. The value OWNER indicates the node owner. The value OTHER indicates specified personnel. The value SHIFT_SCHEDULE indicates personnel in a shift schedule.
     *
     * @example OWNER
     *
     * @var string
     */
    public $alertRecipientType;

    /**
     * @description The type of the alert. Valid values: BASELINE and TOPIC. The value BASELINE indicates a baseline alert. The value TOPIC indicates an event alert.
     *
     * @example BASELINE
     *
     * @var string
     */
    public $alertType;

    /**
     * @description Specifies whether to enable the baseline alerting feature. This feature is specific to baselines. Valid values: true and false.
     *
     * @example true
     *
     * @var bool
     */
    public $baselineAlertEnabled;

    /**
     * @description The DingTalk chatbots.
     *
     * @var dingRobots[]
     */
    public $dingRobots;

    /**
     * @description The end time of silence.
     *
     * @example 00:00:00
     *
     * @var string
     */
    public $silenceEndTime;

    /**
     * @description The start time of silence.
     *
     * @example 00:00:00
     *
     * @var string
     */
    public $silenceStartTime;

    /**
     * @description The types of event alerts, which are event-specific configurations.
     *
     * @var string[]
     */
    public $topicTypes;

    /**
     * @description The webhook URLs.
     *
     * @var string[]
     */
    public $webhooks;
    protected $_name = [
        'alertInterval'        => 'AlertInterval',
        'alertMaximum'         => 'AlertMaximum',
        'alertMethods'         => 'AlertMethods',
        'alertRecipient'       => 'AlertRecipient',
        'alertRecipientType'   => 'AlertRecipientType',
        'alertType'            => 'AlertType',
        'baselineAlertEnabled' => 'BaselineAlertEnabled',
        'dingRobots'           => 'DingRobots',
        'silenceEndTime'       => 'SilenceEndTime',
        'silenceStartTime'     => 'SilenceStartTime',
        'topicTypes'           => 'TopicTypes',
        'webhooks'             => 'Webhooks',
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
        if (null !== $this->alertMaximum) {
            $res['AlertMaximum'] = $this->alertMaximum;
        }
        if (null !== $this->alertMethods) {
            $res['AlertMethods'] = $this->alertMethods;
        }
        if (null !== $this->alertRecipient) {
            $res['AlertRecipient'] = $this->alertRecipient;
        }
        if (null !== $this->alertRecipientType) {
            $res['AlertRecipientType'] = $this->alertRecipientType;
        }
        if (null !== $this->alertType) {
            $res['AlertType'] = $this->alertType;
        }
        if (null !== $this->baselineAlertEnabled) {
            $res['BaselineAlertEnabled'] = $this->baselineAlertEnabled;
        }
        if (null !== $this->dingRobots) {
            $res['DingRobots'] = [];
            if (null !== $this->dingRobots && \is_array($this->dingRobots)) {
                $n = 0;
                foreach ($this->dingRobots as $item) {
                    $res['DingRobots'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->silenceEndTime) {
            $res['SilenceEndTime'] = $this->silenceEndTime;
        }
        if (null !== $this->silenceStartTime) {
            $res['SilenceStartTime'] = $this->silenceStartTime;
        }
        if (null !== $this->topicTypes) {
            $res['TopicTypes'] = $this->topicTypes;
        }
        if (null !== $this->webhooks) {
            $res['Webhooks'] = $this->webhooks;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertSettings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertInterval'])) {
            $model->alertInterval = $map['AlertInterval'];
        }
        if (isset($map['AlertMaximum'])) {
            $model->alertMaximum = $map['AlertMaximum'];
        }
        if (isset($map['AlertMethods'])) {
            if (!empty($map['AlertMethods'])) {
                $model->alertMethods = $map['AlertMethods'];
            }
        }
        if (isset($map['AlertRecipient'])) {
            $model->alertRecipient = $map['AlertRecipient'];
        }
        if (isset($map['AlertRecipientType'])) {
            $model->alertRecipientType = $map['AlertRecipientType'];
        }
        if (isset($map['AlertType'])) {
            $model->alertType = $map['AlertType'];
        }
        if (isset($map['BaselineAlertEnabled'])) {
            $model->baselineAlertEnabled = $map['BaselineAlertEnabled'];
        }
        if (isset($map['DingRobots'])) {
            if (!empty($map['DingRobots'])) {
                $model->dingRobots = [];
                $n                 = 0;
                foreach ($map['DingRobots'] as $item) {
                    $model->dingRobots[$n++] = null !== $item ? dingRobots::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SilenceEndTime'])) {
            $model->silenceEndTime = $map['SilenceEndTime'];
        }
        if (isset($map['SilenceStartTime'])) {
            $model->silenceStartTime = $map['SilenceStartTime'];
        }
        if (isset($map['TopicTypes'])) {
            if (!empty($map['TopicTypes'])) {
                $model->topicTypes = $map['TopicTypes'];
            }
        }
        if (isset($map['Webhooks'])) {
            if (!empty($map['Webhooks'])) {
                $model->webhooks = $map['Webhooks'];
            }
        }

        return $model;
    }
}
