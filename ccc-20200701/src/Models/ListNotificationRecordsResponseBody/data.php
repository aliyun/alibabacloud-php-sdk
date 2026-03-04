<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListNotificationRecordsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $notificationKey;

    /**
     * @var string
     */
    public $notificationType;
    protected $_name = [
        'content' => 'Content',
        'instanceId' => 'InstanceId',
        'notificationKey' => 'NotificationKey',
        'notificationType' => 'NotificationType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->notificationKey) {
            $res['NotificationKey'] = $this->notificationKey;
        }

        if (null !== $this->notificationType) {
            $res['NotificationType'] = $this->notificationType;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NotificationKey'])) {
            $model->notificationKey = $map['NotificationKey'];
        }

        if (isset($map['NotificationType'])) {
            $model->notificationType = $map['NotificationType'];
        }

        return $model;
    }
}
