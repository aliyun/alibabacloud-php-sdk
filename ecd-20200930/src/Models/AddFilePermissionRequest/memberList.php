<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\AddFilePermissionRequest;

use AlibabaCloud\SDK\Ecd\V20200930\Models\AddFilePermissionRequest\memberList\cdsIdentity;
use AlibabaCloud\Tea\Model;

class memberList extends Model
{
    /**
     * @var cdsIdentity
     */
    public $cdsIdentity;

    /**
     * @example false
     *
     * @var bool
     */
    public $disinheritSubGroup;

    /**
     * @example 4775500800000
     *
     * @var int
     */
    public $expireTime;

    /**
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
