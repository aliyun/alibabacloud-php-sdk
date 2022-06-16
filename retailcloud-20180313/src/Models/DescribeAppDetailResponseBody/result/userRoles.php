<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeAppDetailResponseBody\result;

use AlibabaCloud\Tea\Model;

class userRoles extends Model
{
    /**
     * @var string
     */
    public $realName;

    /**
     * @var string
     */
    public $roleName;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userType;
    protected $_name = [
        'realName' => 'RealName',
        'roleName' => 'RoleName',
        'userId'   => 'UserId',
        'userType' => 'UserType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->realName) {
            $res['RealName'] = $this->realName;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userRoles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RealName'])) {
            $model->realName = $map['RealName'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
