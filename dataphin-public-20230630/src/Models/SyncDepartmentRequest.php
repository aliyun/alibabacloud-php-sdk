<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\SyncDepartmentRequest\syncDepartmentCommand;

class SyncDepartmentRequest extends Model
{
    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var string
     */
    public $opUserId;

    /**
     * @var syncDepartmentCommand
     */
    public $syncDepartmentCommand;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'opUserId' => 'OpUserId',
        'syncDepartmentCommand' => 'SyncDepartmentCommand',
    ];

    public function validate()
    {
        if (null !== $this->syncDepartmentCommand) {
            $this->syncDepartmentCommand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->opUserId) {
            $res['OpUserId'] = $this->opUserId;
        }

        if (null !== $this->syncDepartmentCommand) {
            $res['SyncDepartmentCommand'] = null !== $this->syncDepartmentCommand ? $this->syncDepartmentCommand->toArray($noStream) : $this->syncDepartmentCommand;
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

        if (isset($map['OpUserId'])) {
            $model->opUserId = $map['OpUserId'];
        }

        if (isset($map['SyncDepartmentCommand'])) {
            $model->syncDepartmentCommand = syncDepartmentCommand::fromMap($map['SyncDepartmentCommand']);
        }

        return $model;
    }
}
