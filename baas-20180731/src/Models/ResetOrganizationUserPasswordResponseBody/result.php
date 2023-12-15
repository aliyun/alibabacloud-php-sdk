<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\ResetOrganizationUserPasswordResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 1533025590
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1533025590
     *
     * @var string
     */
    public $expireTime;

    /**
     * @example username
     *
     * @var string
     */
    public $fullname;

    /**
     * @example peers-aaaaaa2-1eqnj5o5w****
     *
     * @var string
     */
    public $organizationId;

    /**
     * @example password
     *
     * @var string
     */
    public $password;

    /**
     * @example username
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'createTime'     => 'CreateTime',
        'expireTime'     => 'ExpireTime',
        'fullname'       => 'Fullname',
        'organizationId' => 'OrganizationId',
        'password'       => 'Password',
        'username'       => 'Username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->fullname) {
            $res['Fullname'] = $this->fullname;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['Fullname'])) {
            $model->fullname = $map['Fullname'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
