<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\RemoveFilePermissionRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RemoveFilePermissionRequest\memberList\cdsIdentity;

class memberList extends Model
{
    /**
     * @var cdsIdentity
     */
    public $cdsIdentity;

    /**
     * @var string
     */
    public $roleId;
    protected $_name = [
        'cdsIdentity' => 'CdsIdentity',
        'roleId' => 'RoleId',
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

        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }

        return $model;
    }
}
