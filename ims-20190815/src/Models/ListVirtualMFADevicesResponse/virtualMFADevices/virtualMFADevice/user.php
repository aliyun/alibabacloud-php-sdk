<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListVirtualMFADevicesResponse\virtualMFADevices\virtualMFADevice;

use AlibabaCloud\Tea\Model;

class user extends Model
{
    /**
     * @var string
     */
    public $userPrincipalName;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $displayName;
    protected $_name = [
        'userPrincipalName' => 'UserPrincipalName',
        'userId'            => 'UserId',
        'displayName'       => 'DisplayName',
    ];

    public function validate()
    {
        Model::validateRequired('userPrincipalName', $this->userPrincipalName, true);
        Model::validateRequired('userId', $this->userId, true);
        Model::validateRequired('displayName', $this->displayName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userPrincipalName) {
            $res['UserPrincipalName'] = $this->userPrincipalName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return user
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserPrincipalName'])) {
            $model->userPrincipalName = $map['UserPrincipalName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        return $model;
    }
}
