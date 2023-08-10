<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Tea\Model;

class AuthorizeApplicationToUsersRequest extends Model
{
    /**
     * @description The ID of the application on which you want to grant permissions.
     *
     * @example app_mkv7rgt4d7i4u7zqtzev2mxxxx
     *
     * @var string
     */
    public $applicationId;

    /**
     * @description The ID of the instance.
     *
     * @example idaas_ue2jvisn35ea5lmthk2676xxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The IDs of the accounts to which you want to grant permissions. You can grant permissions to a maximum of 100 accounts at a time.
     *
     * @example user_d6sbsuumeta4h66ec3il7yxxxx
     *
     * @var string[]
     */
    public $userIds;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'instanceId'    => 'InstanceId',
        'userIds'       => 'UserIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->userIds) {
            $res['UserIds'] = $this->userIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AuthorizeApplicationToUsersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['UserIds'])) {
            if (!empty($map['UserIds'])) {
                $model->userIds = $map['UserIds'];
            }
        }

        return $model;
    }
}
