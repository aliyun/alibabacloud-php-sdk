<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class RegisterUserRequest extends Model
{
    /**
     * @description The mobile number of the user.
     *
     * @example 130000000xx
     *
     * @var string
     */
    public $mobile;

    /**
     * @description The role that you want to assign to the user. Valid values:
     *
     *   **USER**: a regular user role
     *   **DBA**: a database administrator (DBA) role
     *   **ADMIN**: a DMS administrator role
     *   **SECURITY_ADMIN**: a security administrator role
     *
     * >  If you do not specify this parameter, the regular user role is assigned to the user by default. You can assign one or more roles to the user. Separate multiple roles with commas (,).
     * @example USER,DBA
     *
     * @var string
     */
    public $roleNames;

    /**
     * @description The ID of the tenant.
     *
     * >  To query ID of the tenant, move the pointer over the profile picture in the upper-right corner of the DMS console. For more information, see the "View information about the current tenant" section of the [Manage DMS tenants](https://help.aliyun.com/document_detail/181330.html) topic.
     * @example -1
     *
     * @var int
     */
    public $tid;

    /**
     * @description The UID of the Alibaba Cloud account of the user that you want to register.
     *
     * This parameter is required.
     * @example 12345678
     *
     * @var string
     */
    public $uid;

    /**
     * @description The nickname of the user.
     *
     * @example dmstest
     *
     * @var string
     */
    public $userNick;
    protected $_name = [
        'mobile'    => 'Mobile',
        'roleNames' => 'RoleNames',
        'tid'       => 'Tid',
        'uid'       => 'Uid',
        'userNick'  => 'UserNick',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->roleNames) {
            $res['RoleNames'] = $this->roleNames;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }
        if (null !== $this->userNick) {
            $res['UserNick'] = $this->userNick;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegisterUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['RoleNames'])) {
            $model->roleNames = $map['RoleNames'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }
        if (isset($map['UserNick'])) {
            $model->userNick = $map['UserNick'];
        }

        return $model;
    }
}
