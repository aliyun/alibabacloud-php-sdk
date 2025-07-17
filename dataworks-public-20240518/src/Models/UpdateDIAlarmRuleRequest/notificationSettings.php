<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDIAlarmRuleRequest;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDIAlarmRuleRequest\notificationSettings\notificationChannels;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDIAlarmRuleRequest\notificationSettings\notificationReceivers;
use AlibabaCloud\Tea\Model;

class notificationSettings extends Model
{
    /**
     * @description This parameter is deprecated and replaced by the MuteInterval parameter.
     *
     * @example 5
     *
     * @deprecated
     *
     * @var int
     */
    public $inhibitionInterval;

    /**
     * @description The duration of the alert suppression interval. Default value: 5. Unit: minutes.
     *
     * @example 5
     *
     * @var int
     */
    public $muteInterval;

    /**
     * @description The alert notification methods.
     *
     * @var notificationChannels[]
     */
    public $notificationChannels;

    /**
     * @description The settings of alert notification recipients.
     *
     * @var notificationReceivers[]
     */
    public $notificationReceivers;
    protected $_name = [
        'inhibitionInterval' => 'InhibitionInterval',
        'muteInterval' => 'MuteInterval',
        'notificationChannels' => 'NotificationChannels',
        'notificationReceivers' => 'NotificationReceivers',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->inhibitionInterval) {
            $res['InhibitionInterval'] = $this->inhibitionInterval;
        }
        if (null !== $this->muteInterval) {
            $res['MuteInterval'] = $this->muteInterval;
        }
        if (null !== $this->notificationChannels) {
            $res['NotificationChannels'] = [];
            if (null !== $this->notificationChannels && \is_array($this->notificationChannels)) {
                $n = 0;
                foreach ($this->notificationChannels as $item) {
                    $res['NotificationChannels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->notificationReceivers) {
            $res['NotificationReceivers'] = [];
            if (null !== $this->notificationReceivers && \is_array($this->notificationReceivers)) {
                $n = 0;
                foreach ($this->notificationReceivers as $item) {
                    $res['NotificationReceivers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notificationSettings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InhibitionInterval'])) {
            $model->inhibitionInterval = $map['InhibitionInterval'];
        }
        if (isset($map['MuteInterval'])) {
            $model->muteInterval = $map['MuteInterval'];
        }
        if (isset($map['NotificationChannels'])) {
            if (!empty($map['NotificationChannels'])) {
                $model->notificationChannels = [];
                $n = 0;
                foreach ($map['NotificationChannels'] as $item) {
                    $model->notificationChannels[$n++] = null !== $item ? notificationChannels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NotificationReceivers'])) {
            if (!empty($map['NotificationReceivers'])) {
                $model->notificationReceivers = [];
                $n = 0;
                foreach ($map['NotificationReceivers'] as $item) {
                    $model->notificationReceivers[$n++] = null !== $item ? notificationReceivers::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
