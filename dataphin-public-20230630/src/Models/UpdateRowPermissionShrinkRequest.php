<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;

class UpdateRowPermissionShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var string
     */
    public $updateRowPermissionCommandShrink;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'updateRowPermissionCommandShrink' => 'UpdateRowPermissionCommand',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
