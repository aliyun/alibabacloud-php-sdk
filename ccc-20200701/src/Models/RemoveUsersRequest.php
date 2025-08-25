<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Dara\Model;

class RemoveUsersRequest extends Model
{
    /**
     * @var string
     */
    public $filePath;

    /**
     * @var bool
     */
    public $force;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $notificationEmail;

    /**
     * @var string
     */
    public $userIdList;
    protected $_name = [
        'filePath' => 'FilePath',
        'force' => 'Force',
        'instanceId' => 'InstanceId',
        'notificationEmail' => 'NotificationEmail',
        'userIdList' => 'UserIdList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }

        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->notificationEmail) {
            $res['NotificationEmail'] = $this->notificationEmail;
        }

        if (null !== $this->userIdList) {
            $res['UserIdList'] = $this->userIdList;
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
        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }

        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NotificationEmail'])) {
            $model->notificationEmail = $map['NotificationEmail'];
        }

        if (isset($map['UserIdList'])) {
            $model->userIdList = $map['UserIdList'];
        }

        return $model;
    }
}
