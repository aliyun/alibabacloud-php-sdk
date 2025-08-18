<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\OperateInstanceRequest\operateCommand;

class OperateInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $env;

    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var operateCommand
     */
    public $operateCommand;
    protected $_name = [
        'env' => 'Env',
        'opTenantId' => 'OpTenantId',
        'operateCommand' => 'OperateCommand',
    ];

    public function validate()
    {
        if (null !== $this->operateCommand) {
            $this->operateCommand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }

        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->operateCommand) {
            $res['OperateCommand'] = null !== $this->operateCommand ? $this->operateCommand->toArray($noStream) : $this->operateCommand;
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

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        if (isset($map['OperateCommand'])) {
            $model->operateCommand = operateCommand::fromMap($map['OperateCommand']);
        }

        return $model;
    }
}
