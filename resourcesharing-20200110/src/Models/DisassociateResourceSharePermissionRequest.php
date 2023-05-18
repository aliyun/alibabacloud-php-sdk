<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\Tea\Model;

class DisassociateResourceSharePermissionRequest extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example AliyunRSDefaultPermissionVSwitch
     *
     * @var string
     */
    public $permissionName;

    /**
     * @description The name of the permission. For more information, see [Permission library](~~465474~~).
     *
     * @example rs-6GRmdD3X****
     *
     * @var string
     */
    public $resourceShareId;
    protected $_name = [
        'permissionName'  => 'PermissionName',
        'resourceShareId' => 'ResourceShareId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DisassociateResourceSharePermissionRequest
     */
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
