<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class CreateRowPermissionShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $createRowPermissionCommandShrink;

    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'createRowPermissionCommandShrink' => 'CreateRowPermissionCommand',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createRowPermissionCommandShrink) {
            $res['CreateRowPermissionCommand'] = $this->createRowPermissionCommandShrink;
        }
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRowPermissionShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateRowPermissionCommand'])) {
            $model->createRowPermissionCommandShrink = $map['CreateRowPermissionCommand'];
        }
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
