<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class DeleteRowPermissionShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $deleteRowPermissionCommandShrink;

    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'deleteRowPermissionCommandShrink' => 'DeleteRowPermissionCommand',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->deleteRowPermissionCommandShrink) {
            $res['DeleteRowPermissionCommand'] = $this->deleteRowPermissionCommandShrink;
        }
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteRowPermissionShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeleteRowPermissionCommand'])) {
            $model->deleteRowPermissionCommandShrink = $map['DeleteRowPermissionCommand'];
        }
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
