<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListInstanceUserPermissionsResponseBody\userPermissions;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListInstanceUserPermissionsResponseBody\userPermissions\userPermission\permDetails;
use AlibabaCloud\Tea\Model;

class userPermission extends Model
{
    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userNickName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var permDetails
     */
    public $permDetails;
    protected $_name = [
        'userId'       => 'UserId',
        'userNickName' => 'UserNickName',
        'instanceId'   => 'InstanceId',
        'permDetails'  => 'PermDetails',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userNickName) {
            $res['UserNickName'] = $this->userNickName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->permDetails) {
            $res['PermDetails'] = null !== $this->permDetails ? $this->permDetails->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userPermission
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserNickName'])) {
            $model->userNickName = $map['UserNickName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PermDetails'])) {
            $model->permDetails = permDetails::fromMap($map['PermDetails']);
        }

        return $model;
    }
}
