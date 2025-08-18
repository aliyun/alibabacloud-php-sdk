<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\PausePhysicalNodeRequest\pauseCommand;

class PausePhysicalNodeRequest extends Model
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
     * @var pauseCommand
     */
    public $pauseCommand;
    protected $_name = [
        'env' => 'Env',
        'opTenantId' => 'OpTenantId',
        'pauseCommand' => 'PauseCommand',
    ];

    public function validate()
    {
        if (null !== $this->pauseCommand) {
            $this->pauseCommand->validate();
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

        if (null !== $this->pauseCommand) {
            $res['PauseCommand'] = null !== $this->pauseCommand ? $this->pauseCommand->toArray($noStream) : $this->pauseCommand;
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

        if (isset($map['PauseCommand'])) {
            $model->pauseCommand = pauseCommand::fromMap($map['PauseCommand']);
        }

        return $model;
    }
}
