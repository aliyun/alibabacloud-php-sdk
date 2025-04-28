<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;

class SyncDepartmentUserShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var string
     */
    public $syncDepartmentUserCommandShrink;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'syncDepartmentUserCommandShrink' => 'SyncDepartmentUserCommand',
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

        if (null !== $this->syncDepartmentUserCommandShrink) {
            $res['SyncDepartmentUserCommand'] = $this->syncDepartmentUserCommandShrink;
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

        if (isset($map['SyncDepartmentUserCommand'])) {
            $model->syncDepartmentUserCommandShrink = $map['SyncDepartmentUserCommand'];
        }

        return $model;
    }
}
