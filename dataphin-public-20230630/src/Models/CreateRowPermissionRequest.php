<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateRowPermissionRequest\createRowPermissionCommand;

class CreateRowPermissionRequest extends Model
{
    /**
     * @var createRowPermissionCommand
     */
    public $createRowPermissionCommand;

    /**
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'createRowPermissionCommand' => 'CreateRowPermissionCommand',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate()
    {
        if (null !== $this->createRowPermissionCommand) {
            $this->createRowPermissionCommand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createRowPermissionCommand) {
            $res['CreateRowPermissionCommand'] = null !== $this->createRowPermissionCommand ? $this->createRowPermissionCommand->toArray($noStream) : $this->createRowPermissionCommand;
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
        if (isset($map['CreateRowPermissionCommand'])) {
            $model->createRowPermissionCommand = createRowPermissionCommand::fromMap($map['CreateRowPermissionCommand']);
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
