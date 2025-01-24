<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\AddFilePermissionRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\AddFilePermissionRequest\memberList\cdsIdentity;

class memberList extends Model
{
    /**
     * @var cdsIdentity
     */
    public $cdsIdentity;
    /**
     * @var bool
     */
    public $disinheritSubGroup;
    /**
     * @var int
     */
    public $expireTime;
    /**
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
        if (null !== $this->cdsIdentity) {
            $this->cdsIdentity->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cdsIdentity) {
            $res['CdsIdentity'] = null !== $this->cdsIdentity ? $this->cdsIdentity->toArray($noStream) : $this->cdsIdentity;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
