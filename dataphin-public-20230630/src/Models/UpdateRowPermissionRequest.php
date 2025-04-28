<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateRowPermissionRequest\updateRowPermissionCommand;

class UpdateRowPermissionRequest extends Model
{
    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var updateRowPermissionCommand
     */
    public $updateRowPermissionCommand;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'updateRowPermissionCommand' => 'UpdateRowPermissionCommand',
    ];

    public function validate()
    {
        if (null !== $this->updateRowPermissionCommand) {
            $this->updateRowPermissionCommand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->updateRowPermissionCommand) {
            $res['UpdateRowPermissionCommand'] = null !== $this->updateRowPermissionCommand ? $this->updateRowPermissionCommand->toArray($noStream) : $this->updateRowPermissionCommand;
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
            $model->updateRowPermissionCommand = updateRowPermissionCommand::fromMap($map['UpdateRowPermissionCommand']);
        }

        return $model;
    }
}
