<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Dara\Model;

class SendNotificationRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $messageBody;

    /**
     * @var string
     */
    public $notificationTarget;

    /**
     * @var string
     */
    public $notificationType;

    /**
     * @var string
     */
    public $shardingKey;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'messageBody' => 'MessageBody',
        'notificationTarget' => 'NotificationTarget',
        'notificationType' => 'NotificationType',
        'shardingKey' => 'ShardingKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->messageBody) {
            $res['MessageBody'] = $this->messageBody;
        }

        if (null !== $this->notificationTarget) {
            $res['NotificationTarget'] = $this->notificationTarget;
        }

        if (null !== $this->notificationType) {
            $res['NotificationType'] = $this->notificationType;
        }

        if (null !== $this->shardingKey) {
            $res['ShardingKey'] = $this->shardingKey;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MessageBody'])) {
            $model->messageBody = $map['MessageBody'];
        }

        if (isset($map['NotificationTarget'])) {
            $model->notificationTarget = $map['NotificationTarget'];
        }

        if (isset($map['NotificationType'])) {
            $model->notificationType = $map['NotificationType'];
        }

        if (isset($map['ShardingKey'])) {
            $model->shardingKey = $map['ShardingKey'];
        }

        return $model;
    }
}
