<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models;

use AlibabaCloud\Dara\Model;

class ConfirmNotificationRequest extends Model
{
    /**
     * @var string
     */
    public $notificationRequestId;
    protected $_name = [
        'notificationRequestId' => 'NotificationRequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->notificationRequestId) {
            $res['NotificationRequestId'] = $this->notificationRequestId;
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
        if (isset($map['NotificationRequestId'])) {
            $model->notificationRequestId = $map['NotificationRequestId'];
        }

        return $model;
    }
}
