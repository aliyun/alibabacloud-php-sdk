<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\Tea\Model;

class AssociateResourceSharePermissionRequest extends Model
{
    /**
     * @example AliyunRSDefaultPermissionVSwitch
     *
     * @var string
     */
    public $permissionName;

    /**
     * @example false
     *
     * @var bool
     */
    public $replace;

    /**
     * @example rs-6GRmdD3X****
     *
     * @var string
     */
    public $resourceShareId;
    protected $_name = [
        'permissionName'  => 'PermissionName',
        'replace'         => 'Replace',
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
        if (null !== $this->replace) {
            $res['Replace'] = $this->replace;
        }
        if (null !== $this->resourceShareId) {
            $res['ResourceShareId'] = $this->resourceShareId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssociateResourceSharePermissionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PermissionName'])) {
            $model->permissionName = $map['PermissionName'];
        }
        if (isset($map['Replace'])) {
            $model->replace = $map['Replace'];
        }
        if (isset($map['ResourceShareId'])) {
            $model->resourceShareId = $map['ResourceShareId'];
        }

        return $model;
    }
}
