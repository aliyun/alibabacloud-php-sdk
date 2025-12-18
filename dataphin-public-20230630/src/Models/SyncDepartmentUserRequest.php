<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\SyncDepartmentUserRequest\syncDepartmentUserCommand;

class SyncDepartmentUserRequest extends Model
{
    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var syncDepartmentUserCommand
     */
    public $syncDepartmentUserCommand;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'syncDepartmentUserCommand' => 'SyncDepartmentUserCommand',
    ];

    public function validate()
    {
        if (null !== $this->syncDepartmentUserCommand) {
            $this->syncDepartmentUserCommand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->syncDepartmentUserCommand) {
            $res['SyncDepartmentUserCommand'] = null !== $this->syncDepartmentUserCommand ? $this->syncDepartmentUserCommand->toArray($noStream) : $this->syncDepartmentUserCommand;
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
            $model->syncDepartmentUserCommand = syncDepartmentUserCommand::fromMap($map['SyncDepartmentUserCommand']);
        }

        return $model;
    }
}
