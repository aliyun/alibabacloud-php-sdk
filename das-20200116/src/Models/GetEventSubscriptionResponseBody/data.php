<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetEventSubscriptionResponseBody;

use AlibabaCloud\SDK\DAS\V20200116\Models\GetEventSubscriptionResponseBody\data\contactGroups;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetEventSubscriptionResponseBody\data\contacts;
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
     * @description The alert contact groups.
     *
     * @var contactGroups[]
     */
    public $contactGroups;

    /**
     * @description The name of the subscriber who receives alert notifications. Multiple names are separated by commas (,).
     *
     * @example Default contact
     *
     * @var string
     */
    public $contactName;

    /**
     * @description The user ID.
     *
     * @var contacts[]
     */
    public $contacts;

    /**
     * @description The supported event scenarios. Only **AllContext** may be returned, which indicates that all scenarios are supported.
     *
     * @example AllContext
     *
     * @var string
     */
    public $eventContext;

    /**
     * @description The supported event scenarios in which event subscription can be sent.
     *
     * @var string[]
     */
    public $eventSendGroup;

    /**
     * @description The time when event subscription was enabled. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1633071840000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description The time when the event subscription settings were most recently modified. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1633071850000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description The primary key ID of the database.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description The instance ID.
     *
     * @example rm-2ze8g2am97624****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The language of event notifications. Only **zh-CN** may be returned, which indicates that event notifications are sent in Chinese.
     *
     * @example zh_CN
     *
     * @var string
     */
    public $lang;

    /**
     * @description The risk level of the events that trigger notifications. Valid values:
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
     * @description The minimum interval between event notifications. Unit: seconds.
     *
     * @example 60
     *
     * @var string
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
        'contactGroups'    => 'contactGroups',
        'contactName'      => 'contactName',
        'contacts'         => 'contacts',
        'eventContext'     => 'eventContext',
        'eventSendGroup'   => 'eventSendGroup',
        'gmtCreate'        => 'gmtCreate',
        'gmtModified'      => 'gmtModified',
        'id'               => 'id',
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
        if (null !== $this->contactGroups) {
            $res['contactGroups'] = [];
            if (null !== $this->contactGroups && \is_array($this->contactGroups)) {
                $n = 0;
                foreach ($this->contactGroups as $item) {
                    $res['contactGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->contactName) {
            $res['contactName'] = $this->contactName;
        }
        if (null !== $this->contacts) {
            $res['contacts'] = [];
            if (null !== $this->contacts && \is_array($this->contacts)) {
                $n = 0;
                foreach ($this->contacts as $item) {
                    $res['contacts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->eventContext) {
            $res['eventContext'] = $this->eventContext;
        }
        if (null !== $this->eventSendGroup) {
            $res['eventSendGroup'] = $this->eventSendGroup;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
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
        if (isset($map['contactGroups'])) {
            if (!empty($map['contactGroups'])) {
                $model->contactGroups = [];
                $n                    = 0;
                foreach ($map['contactGroups'] as $item) {
                    $model->contactGroups[$n++] = null !== $item ? contactGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['contactName'])) {
            $model->contactName = $map['contactName'];
        }
        if (isset($map['contacts'])) {
            if (!empty($map['contacts'])) {
                $model->contacts = [];
                $n               = 0;
                foreach ($map['contacts'] as $item) {
                    $model->contacts[$n++] = null !== $item ? contacts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['eventContext'])) {
            $model->eventContext = $map['eventContext'];
        }
        if (isset($map['eventSendGroup'])) {
            if (!empty($map['eventSendGroup'])) {
                $model->eventSendGroup = $map['eventSendGroup'];
            }
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
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
