<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class SubscriptionItem extends Model
{
    /**
     * @var string
     */
    public $alarmStatus;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $monitorItemId;

    /**
     * @var string
     */
    public $notificationGroupId;

    /**
     * @var string
     */
    public $notificationMode;

    /**
     * @var int
     */
    public $recoveryNotice;

    /**
     * @var string
     */
    public $subscriptionItemId;

    /**
     * @var string
     */
    public $subscriptionType;

    /**
     * @var string
     */
    public $suppressionStrategy;

    /**
     * @var int
     */
    public $triggerTimes;
    protected $_name = [
        'alarmStatus'         => 'AlarmStatus',
        'language'            => 'Language',
        'monitorItemId'       => 'MonitorItemId',
        'notificationGroupId' => 'NotificationGroupId',
        'notificationMode'    => 'NotificationMode',
        'recoveryNotice'      => 'RecoveryNotice',
        'subscriptionItemId'  => 'SubscriptionItemId',
        'subscriptionType'    => 'SubscriptionType',
        'suppressionStrategy' => 'SuppressionStrategy',
        'triggerTimes'        => 'TriggerTimes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmStatus) {
            $res['AlarmStatus'] = $this->alarmStatus;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->monitorItemId) {
            $res['MonitorItemId'] = $this->monitorItemId;
        }
        if (null !== $this->notificationGroupId) {
            $res['NotificationGroupId'] = $this->notificationGroupId;
        }
        if (null !== $this->notificationMode) {
            $res['NotificationMode'] = $this->notificationMode;
        }
        if (null !== $this->recoveryNotice) {
            $res['RecoveryNotice'] = $this->recoveryNotice;
        }
        if (null !== $this->subscriptionItemId) {
            $res['SubscriptionItemId'] = $this->subscriptionItemId;
        }
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
        }
        if (null !== $this->suppressionStrategy) {
            $res['SuppressionStrategy'] = $this->suppressionStrategy;
        }
        if (null !== $this->triggerTimes) {
            $res['TriggerTimes'] = $this->triggerTimes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubscriptionItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmStatus'])) {
            $model->alarmStatus = $map['AlarmStatus'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['MonitorItemId'])) {
            $model->monitorItemId = $map['MonitorItemId'];
        }
        if (isset($map['NotificationGroupId'])) {
            $model->notificationGroupId = $map['NotificationGroupId'];
        }
        if (isset($map['NotificationMode'])) {
            $model->notificationMode = $map['NotificationMode'];
        }
        if (isset($map['RecoveryNotice'])) {
            $model->recoveryNotice = $map['RecoveryNotice'];
        }
        if (isset($map['SubscriptionItemId'])) {
            $model->subscriptionItemId = $map['SubscriptionItemId'];
        }
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }
        if (isset($map['SuppressionStrategy'])) {
            $model->suppressionStrategy = $map['SuppressionStrategy'];
        }
        if (isset($map['TriggerTimes'])) {
            $model->triggerTimes = $map['TriggerTimes'];
        }

        return $model;
    }
}
