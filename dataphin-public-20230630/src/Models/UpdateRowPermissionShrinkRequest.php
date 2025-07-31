<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class UpdateRowPermissionShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $updateRowPermissionCommandShrink;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'updateRowPermissionCommandShrink' => 'UpdateRowPermissionCommand',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }
        if (null !== $this->updateRowPermissionCommandShrink) {
            $res['UpdateRowPermissionCommand'] = $this->updateRowPermissionCommandShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRowPermissionShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }
        if (isset($map['UpdateRowPermissionCommand'])) {
            $model->updateRowPermissionCommandShrink = $map['UpdateRowPermissionCommand'];
        }

        return $model;
    }
}
