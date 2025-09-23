<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\Dara\Model;

class GetPermissionRequest extends Model
{
    /**
     * @var string
     */
    public $permissionName;

    /**
     * @var string
     */
    public $permissionVersion;
    protected $_name = [
        'permissionName' => 'PermissionName',
        'permissionVersion' => 'PermissionVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->permissionName) {
            $res['PermissionName'] = $this->permissionName;
        }

        if (null !== $this->permissionVersion) {
            $res['PermissionVersion'] = $this->permissionVersion;
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
        if (isset($map['PermissionName'])) {
            $model->permissionName = $map['PermissionName'];
        }

        if (isset($map['PermissionVersion'])) {
            $model->permissionVersion = $map['PermissionVersion'];
        }

        return $model;
    }
}
