<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListNotificationPoliciesResponseBody\pageBean\notificationPolicies\notifyRule;

use AlibabaCloud\Tea\Model;

class notifyObjects extends Model
{
    /**
     * @description The notification methods specified for a contact.
     *
     * @var string[]
     */
    public $notifyChannels;

    /**
     * @description The ID of the notification object.
     *
     * @example 123
     *
     * @var int
     */
    public $notifyObjectId;

    /**
     * @description The name of the notification object.
     *
     * @example test
     *
     * @var string
     */
    public $notifyObjectName;

    /**
     * @description The type of the notification object. Valid values:
     *
     *   CONTACT: an individual contact
     *   CONTACT_GROUP: a contact group
     *   DING_ROBOT: an instant messaging (IM) chatbot
     *   CONTACT_SCHEDULE: a person on duty based on an established schedule
     *
     * @example CONTACT
     *
     * @var string
     */
    public $notifyObjectType;
    protected $_name = [
        'notifyChannels'   => 'NotifyChannels',
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
        if (null !== $this->notifyChannels) {
            $res['NotifyChannels'] = $this->notifyChannels;
        }
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
        if (isset($map['NotifyChannels'])) {
            if (!empty($map['NotifyChannels'])) {
                $model->notifyChannels = $map['NotifyChannels'];
            }
        }
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
