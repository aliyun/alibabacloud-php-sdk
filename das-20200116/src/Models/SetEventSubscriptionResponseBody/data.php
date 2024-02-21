<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\SetEventSubscriptionResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates whether the event subscription feature is enabled. Valid values:
     *
     *   **0**: The event subscription feature is disabled.
     *   **1**: The event subscription feature is enabled.
     *
     * @example 1
     *
     * @var int
     */
    public $active;

    /**
     * @description The notification method. Valid values:
     *
     *   **hdm_alarm_sms**: text message.
     *   **dingtalk**: DingTalk chatbot.
     *   **hdm_alarm_sms_and_email**: text message and email.
     *   **hdm_alarm_sms,dingtalk**: text message and DingTalk chatbot.
     *
     * @example hdm_alarm_sms,dingtalk
     *
     * @var string
     */
    public $channelType;

    /**
     * @description The name of the contact group that receives alert notifications. Multiple names are separated by commas (,).
     *
     * @example Default contact group
     *
     * @var string
     */
    public $contactGroupName;

    /**
     * @description The name of the contact who receives alert notifications. Multiple names are separated by commas (,).
     *
     * @example Default contact
     *
     * @var string
     */
    public $contactName;

    /**
     * @description The supported event scenarios. Only **AllContext** is returned for this parameter, which indicates that all scenarios are supported.
     *
     * @example AllContext
     *
     * @var string
     */
    public $eventContext;

    /**
     * @description The instance ID.
     *
     * @example rm-2ze8g2am97624****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The language of event notifications. Only **zh-CN** is returned for this parameter, which indicates that event notifications are sent in Chinese.
     *
     * @example zh_CN
     *
     * @var string
     */
    public $lang;

    /**
     * @description The risk level of the events. Valid values:
     *
     *   **Notice**
     *   **Optimization**
     *   **Warn**
     *   **Critical**
     *
     * @example Optimization
     *
     * @var string
     */
    public $level;

    /**
     * @description The minimum interval between consecutive event notifications. Unit: seconds.
     *
     * @example 60
     *
     * @var int
     */
    public $minInterval;

    /**
     * @description The user ID.
     *
     * @example 1088760496****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'active'           => 'active',
        'channelType'      => 'channelType',
        'contactGroupName' => 'contactGroupName',
        'contactName'      => 'contactName',
        'eventContext'     => 'eventContext',
        'instanceId'       => 'instanceId',
        'lang'             => 'lang',
        'level'            => 'level',
        'minInterval'      => 'minInterval',
        'userId'           => 'userId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->active) {
            $res['active'] = $this->active;
        }
        if (null !== $this->channelType) {
            $res['channelType'] = $this->channelType;
        }
        if (null !== $this->contactGroupName) {
            $res['contactGroupName'] = $this->contactGroupName;
        }
        if (null !== $this->contactName) {
            $res['contactName'] = $this->contactName;
        }
        if (null !== $this->eventContext) {
            $res['eventContext'] = $this->eventContext;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->lang) {
            $res['lang'] = $this->lang;
        }
        if (null !== $this->level) {
            $res['level'] = $this->level;
        }
        if (null !== $this->minInterval) {
            $res['minInterval'] = $this->minInterval;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['active'])) {
            $model->active = $map['active'];
        }
        if (isset($map['channelType'])) {
            $model->channelType = $map['channelType'];
        }
        if (isset($map['contactGroupName'])) {
            $model->contactGroupName = $map['contactGroupName'];
        }
        if (isset($map['contactName'])) {
            $model->contactName = $map['contactName'];
        }
        if (isset($map['eventContext'])) {
            $model->eventContext = $map['eventContext'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['lang'])) {
            $model->lang = $map['lang'];
        }
        if (isset($map['level'])) {
            $model->level = $map['level'];
        }
        if (isset($map['minInterval'])) {
            $model->minInterval = $map['minInterval'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
