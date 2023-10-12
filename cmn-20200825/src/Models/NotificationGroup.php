<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class NotificationGroup extends Model
{
    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $notificationGroupDescription;

    /**
     * @var string
     */
    public $notificationGroupId;

    /**
     * @var string
     */
    public $notificationGroupName;

    /**
     * @var string
     */
    public $notificationGroupType;

    /**
     * @var string
     */
    public $webhook;
    protected $_name = [
        'gmtCreate'                    => 'GmtCreate',
        'gmtModified'                  => 'GmtModified',
        'notificationGroupDescription' => 'NotificationGroupDescription',
        'notificationGroupId'          => 'NotificationGroupId',
        'notificationGroupName'        => 'NotificationGroupName',
        'notificationGroupType'        => 'NotificationGroupType',
        'webhook'                      => 'Webhook',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->notificationGroupDescription) {
            $res['NotificationGroupDescription'] = $this->notificationGroupDescription;
        }
        if (null !== $this->notificationGroupId) {
            $res['NotificationGroupId'] = $this->notificationGroupId;
        }
        if (null !== $this->notificationGroupName) {
            $res['NotificationGroupName'] = $this->notificationGroupName;
        }
        if (null !== $this->notificationGroupType) {
            $res['NotificationGroupType'] = $this->notificationGroupType;
        }
        if (null !== $this->webhook) {
            $res['Webhook'] = $this->webhook;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return NotificationGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['NotificationGroupDescription'])) {
            $model->notificationGroupDescription = $map['NotificationGroupDescription'];
        }
        if (isset($map['NotificationGroupId'])) {
            $model->notificationGroupId = $map['NotificationGroupId'];
        }
        if (isset($map['NotificationGroupName'])) {
            $model->notificationGroupName = $map['NotificationGroupName'];
        }
        if (isset($map['NotificationGroupType'])) {
            $model->notificationGroupType = $map['NotificationGroupType'];
        }
        if (isset($map['Webhook'])) {
            $model->webhook = $map['Webhook'];
        }

        return $model;
    }
}
