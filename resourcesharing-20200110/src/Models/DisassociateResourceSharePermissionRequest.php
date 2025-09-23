<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\Dara\Model;

class DisassociateResourceSharePermissionRequest extends Model
{
    /**
     * @var string
     */
    public $permissionName;

    /**
     * @var string
     */
    public $resourceShareId;
    protected $_name = [
        'permissionName' => 'PermissionName',
        'resourceShareId' => 'ResourceShareId',
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

        if (null !== $this->resourceShareId) {
            $res['ResourceShareId'] = $this->resourceShareId;
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

        if (isset($map['ResourceShareId'])) {
            $model->resourceShareId = $map['ResourceShareId'];
        }

        return $model;
    }
}
