<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ExecuteManualNodeRequest\executeCommand;

class ExecuteManualNodeRequest extends Model
{
    /**
     * @var string
     */
    public $env;

    /**
     * @var executeCommand
     */
    public $executeCommand;

    /**
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'env' => 'Env',
        'executeCommand' => 'ExecuteCommand',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate()
    {
        if (null !== $this->executeCommand) {
            $this->executeCommand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }

        if (null !== $this->executeCommand) {
            $res['ExecuteCommand'] = null !== $this->executeCommand ? $this->executeCommand->toArray($noStream) : $this->executeCommand;
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
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }

        if (isset($map['ExecuteCommand'])) {
            $model->executeCommand = executeCommand::fromMap($map['ExecuteCommand']);
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
