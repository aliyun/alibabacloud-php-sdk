<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAccountMaskingPrivilegeResponseBody\data;

use AlibabaCloud\Tea\Model;

class userPrivilege extends Model
{
    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $privilege;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'expireTime' => 'ExpireTime',
        'privilege'  => 'Privilege',
        'userName'   => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->privilege) {
            $res['Privilege'] = $this->privilege;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userPrivilege
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['Privilege'])) {
            $model->privilege = $map['Privilege'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
