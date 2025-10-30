<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\DeleteRegisterLineageRequest\deleteRegisterLineageCommand;

class DeleteRegisterLineageRequest extends Model
{
    /**
     * @var deleteRegisterLineageCommand
     */
    public $deleteRegisterLineageCommand;

    /**
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'deleteRegisterLineageCommand' => 'DeleteRegisterLineageCommand',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate()
    {
        if (null !== $this->deleteRegisterLineageCommand) {
            $this->deleteRegisterLineageCommand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deleteRegisterLineageCommand) {
            $res['DeleteRegisterLineageCommand'] = null !== $this->deleteRegisterLineageCommand ? $this->deleteRegisterLineageCommand->toArray($noStream) : $this->deleteRegisterLineageCommand;
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
        if (isset($map['DeleteRegisterLineageCommand'])) {
            $model->deleteRegisterLineageCommand = deleteRegisterLineageCommand::fromMap($map['DeleteRegisterLineageCommand']);
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
