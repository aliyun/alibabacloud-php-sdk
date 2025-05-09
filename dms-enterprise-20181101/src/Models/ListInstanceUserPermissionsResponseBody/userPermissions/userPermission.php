<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListInstanceUserPermissionsResponseBody\userPermissions;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListInstanceUserPermissionsResponseBody\userPermissions\userPermission\permDetails;

class userPermission extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var permDetails
     */
    public $permDetails;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userNickName;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'permDetails' => 'PermDetails',
        'userId' => 'UserId',
        'userNickName' => 'UserNickName',
    ];

    public function validate()
    {
        if (null !== $this->permDetails) {
            $this->permDetails->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->permDetails) {
            $res['PermDetails'] = null !== $this->permDetails ? $this->permDetails->toArray($noStream) : $this->permDetails;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->userNickName) {
            $res['UserNickName'] = $this->userNickName;
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

        if (isset($map['PermDetails'])) {
            $model->permDetails = permDetails::fromMap($map['PermDetails']);
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['UserNickName'])) {
            $model->userNickName = $map['UserNickName'];
        }

        return $model;
    }
}
