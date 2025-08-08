<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeFailedNotificationsResponseBody;

use AlibabaCloud\Dara\Model;

class notificationList extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $notificationRequestId;
    protected $_name = [
        'action' => 'Action',
        'createTime' => 'CreateTime',
        'message' => 'Message',
        'notificationRequestId' => 'NotificationRequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['NotificationRequestId'])) {
            $model->notificationRequestId = $map['NotificationRequestId'];
        }

        return $model;
    }
}
