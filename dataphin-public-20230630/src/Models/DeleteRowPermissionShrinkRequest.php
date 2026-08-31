<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;

class DeleteRowPermissionShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $deleteRowPermissionCommandShrink;

    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var string
     */
    public $opUserId;
    protected $_name = [
        'deleteRowPermissionCommandShrink' => 'DeleteRowPermissionCommand',
        'opTenantId' => 'OpTenantId',
        'opUserId' => 'OpUserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deleteRowPermissionCommandShrink) {
            $res['DeleteRowPermissionCommand'] = $this->deleteRowPermissionCommandShrink;
        }

        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->opUserId) {
            $res['OpUserId'] = $this->opUserId;
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
        if (isset($map['DeleteRowPermissionCommand'])) {
            $model->deleteRowPermissionCommandShrink = $map['DeleteRowPermissionCommand'];
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        if (isset($map['OpUserId'])) {
            $model->opUserId = $map['OpUserId'];
        }

        return $model;
    }
}
