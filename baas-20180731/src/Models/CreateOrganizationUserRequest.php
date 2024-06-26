<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class CreateOrganizationUserRequest extends Model
{
    /**
     * @example a
     *
     * @var string
     */
    public $attrs;

    /**
     * @description This parameter is required.
     *
     * @example peers-yidio-1tuigx42b****
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
     * @description This parameter is required.
     *
     * @example username
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'attrs'          => 'Attrs',
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
        if (null !== $this->attrs) {
            $res['Attrs'] = $this->attrs;
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
     * @return CreateOrganizationUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attrs'])) {
            $model->attrs = $map['Attrs'];
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
