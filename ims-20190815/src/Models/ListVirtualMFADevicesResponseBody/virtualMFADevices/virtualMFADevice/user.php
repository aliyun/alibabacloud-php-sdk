<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListVirtualMFADevicesResponseBody\virtualMFADevices\virtualMFADevice;

use AlibabaCloud\Tea\Model;

class user extends Model
{
    /**
     * @description The display name of the RAM user.
     *
     * @example test
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The ID of the RAM user.
     *
     * @example 20732900249392****
     *
     * @var string
     */
    public $userId;

    /**
     * @description The logon name of the RAM user.
     *
     * @example test@177242285274****.onaliyun.com
     *
     * @var string
     */
    public $userPrincipalName;
    protected $_name = [
        'displayName'       => 'DisplayName',
        'userId'            => 'UserId',
        'userPrincipalName' => 'UserPrincipalName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userPrincipalName) {
            $res['UserPrincipalName'] = $this->userPrincipalName;
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
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserPrincipalName'])) {
            $model->userPrincipalName = $map['UserPrincipalName'];
        }

        return $model;
    }
}
