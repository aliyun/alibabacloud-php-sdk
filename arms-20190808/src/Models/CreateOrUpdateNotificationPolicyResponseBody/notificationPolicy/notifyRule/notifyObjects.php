<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateNotificationPolicyResponseBody\notificationPolicy\notifyRule;

use AlibabaCloud\Tea\Model;

class notifyObjects extends Model
{
    /**
     * @var int
     */
    public $notifyObjectId;

    /**
     * @var string
     */
    public $notifyObjectName;

    /**
     * @var string
     */
    public $notifyObjectType;
    protected $_name = [
        'notifyObjectId'   => 'NotifyObjectId',
        'notifyObjectName' => 'NotifyObjectName',
        'notifyObjectType' => 'NotifyObjectType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->notifyObjectId) {
            $res['NotifyObjectId'] = $this->notifyObjectId;
        }
        if (null !== $this->notifyObjectName) {
            $res['NotifyObjectName'] = $this->notifyObjectName;
        }
        if (null !== $this->notifyObjectType) {
            $res['NotifyObjectType'] = $this->notifyObjectType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notifyObjects
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NotifyObjectId'])) {
            $model->notifyObjectId = $map['NotifyObjectId'];
        }
        if (isset($map['NotifyObjectName'])) {
            $model->notifyObjectName = $map['NotifyObjectName'];
        }
        if (isset($map['NotifyObjectType'])) {
            $model->notifyObjectType = $map['NotifyObjectType'];
        }

        return $model;
    }
}
