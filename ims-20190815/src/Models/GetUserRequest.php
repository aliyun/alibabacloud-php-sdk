<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class GetUserRequest extends Model
{
    /**
     * @description The AccessKey ID of the RAM user.
     *
     * > You must specify only one of the following parameters: `UserPrincipalName`, `UserId`, and `UserAccessKeyId`.
     *
     * @example LTAI*******************
     *
     * @var string
     */
    public $userAccessKeyId;

    /**
     * @description The ID of the RAM user.
     *
     * > You must specify only one of the following parameters: `UserPrincipalName`, `UserId`, and `UserAccessKeyId`.
     *
     * @example 20732900249392****
     *
     * @var string
     */
    public $userId;

    /**
     * @description The logon name of the RAM user.
     *
     * The name is in the format of `<username>@<AccountAlias>.onaliyun.com`. `<username>` indicates the name of the RAM user. `<AccountAlias>.onaliyun.com` indicates the default domain name.
     *
     * The value of `UserPrincipalName` must be `1 to 128` characters in length and can contain letters, digits, periods (.), hyphens (-), and underscores (_). The value of `<username>` must be `1 to 64` characters in length.
     *
     * > You must specify only one of the following parameters: `UserPrincipalName`, `UserId`, and `UserAccessKeyId`.
     *
     * @example test@example.onaliyun.com
     *
     * @var string
     */
    public $userPrincipalName;
    protected $_name = [
        'userAccessKeyId' => 'UserAccessKeyId',
        'userId' => 'UserId',
        'userPrincipalName' => 'UserPrincipalName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->userAccessKeyId) {
            $res['UserAccessKeyId'] = $this->userAccessKeyId;
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
     * @return GetUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserAccessKeyId'])) {
            $model->userAccessKeyId = $map['UserAccessKeyId'];
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
