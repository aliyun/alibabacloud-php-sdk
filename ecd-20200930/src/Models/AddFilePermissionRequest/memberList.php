<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\AddFilePermissionRequest;

use AlibabaCloud\SDK\Ecd\V20200930\Models\AddFilePermissionRequest\memberList\cdsIdentity;
use AlibabaCloud\Tea\Model;

class memberList extends Model
{
    /**
     * @description The user of the cloud disk.
     *
     * @var cdsIdentity
     */
    public $cdsIdentity;

    /**
     * @description Specifies whether the users of the child group can inherit the folder permissions.
     *
     * @example false
     *
     * @var bool
     */
    public $disinheritSubGroup;

    /**
     * @description The time when the authorization expires. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC. The value never expires. You can specify a value that is predefined by the system for this parameter. Example: 4775500800000.
     *
     * @example 4775500800000
     *
     * @var int
     */
    public $expireTime;

    /**
     * @description The ID of the role to which you want to attach the folder permissions. To configure the folder permissions: you can specify a role or create custom operation permissions. You can use RoleId to specify a role. RoleId is mutually exclusive with ActionList. If you specify both of them, the value of RoleId takes precedence.
     *
     * Valid values:
     *
     *   <!-- -->
     *
     * <!-- -->
     *
     *   <!-- -->
     *
     * <!-- -->
     *
     *   <!-- -->
     *
     * <!-- -->
     *
     *   <!-- -->
     *
     * <!-- -->
     *
     *   <!-- -->
     *
     * <!-- -->
     *
     *   <!-- -->
     *
     * <!-- -->
     *
     *   <!-- -->
     *
     * <!-- -->
     *
     *   <!-- -->
     *
     * <!-- -->
     *
     *   <!-- -->
     *
     * <!-- -->
     *
     *   <!-- -->
     *
     * <!-- -->
     *
     *   <!-- -->
     *
     * <!-- -->
     *
     *   <!-- -->
     *
     * <!-- -->
     *
     *   <!-- -->
     *
     * <!-- -->
     * @example SystemFileUploaderAndDownloader
     *
     * @var string
     */
    public $roleId;
    protected $_name = [
        'cdsIdentity'        => 'CdsIdentity',
        'disinheritSubGroup' => 'DisinheritSubGroup',
        'expireTime'         => 'ExpireTime',
        'roleId'             => 'RoleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cdsIdentity) {
            $res['CdsIdentity'] = null !== $this->cdsIdentity ? $this->cdsIdentity->toMap() : null;
        }
        if (null !== $this->disinheritSubGroup) {
            $res['DisinheritSubGroup'] = $this->disinheritSubGroup;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return memberList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CdsIdentity'])) {
            $model->cdsIdentity = cdsIdentity::fromMap($map['CdsIdentity']);
        }
        if (isset($map['DisinheritSubGroup'])) {
            $model->disinheritSubGroup = $map['DisinheritSubGroup'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }

        return $model;
    }
}
