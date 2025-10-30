<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\AddRegisterLineageRequest\addRegisterLineageCommand;

class AddRegisterLineageRequest extends Model
{
    /**
     * @var addRegisterLineageCommand
     */
    public $addRegisterLineageCommand;

    /**
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'addRegisterLineageCommand' => 'AddRegisterLineageCommand',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate()
    {
        if (null !== $this->addRegisterLineageCommand) {
            $this->addRegisterLineageCommand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addRegisterLineageCommand) {
            $res['AddRegisterLineageCommand'] = null !== $this->addRegisterLineageCommand ? $this->addRegisterLineageCommand->toArray($noStream) : $this->addRegisterLineageCommand;
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
        if (isset($map['AddRegisterLineageCommand'])) {
            $model->addRegisterLineageCommand = addRegisterLineageCommand::fromMap($map['AddRegisterLineageCommand']);
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
