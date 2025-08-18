<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\DeleteRowPermissionRequest\deleteRowPermissionCommand;

class DeleteRowPermissionRequest extends Model
{
    /**
     * @var deleteRowPermissionCommand
     */
    public $deleteRowPermissionCommand;

    /**
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'deleteRowPermissionCommand' => 'DeleteRowPermissionCommand',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate()
    {
        if (null !== $this->deleteRowPermissionCommand) {
            $this->deleteRowPermissionCommand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deleteRowPermissionCommand) {
            $res['DeleteRowPermissionCommand'] = null !== $this->deleteRowPermissionCommand ? $this->deleteRowPermissionCommand->toArray($noStream) : $this->deleteRowPermissionCommand;
        }

        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
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
            $model->deleteRowPermissionCommand = deleteRowPermissionCommand::fromMap($map['DeleteRowPermissionCommand']);
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
