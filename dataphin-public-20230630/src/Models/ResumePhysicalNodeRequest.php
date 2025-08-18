<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ResumePhysicalNodeRequest\resumeCommand;

class ResumePhysicalNodeRequest extends Model
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
     * @var resumeCommand
     */
    public $resumeCommand;
    protected $_name = [
        'env' => 'Env',
        'opTenantId' => 'OpTenantId',
        'resumeCommand' => 'ResumeCommand',
    ];

    public function validate()
    {
        if (null !== $this->resumeCommand) {
            $this->resumeCommand->validate();
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

        if (null !== $this->resumeCommand) {
            $res['ResumeCommand'] = null !== $this->resumeCommand ? $this->resumeCommand->toArray($noStream) : $this->resumeCommand;
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

        if (isset($map['ResumeCommand'])) {
            $model->resumeCommand = resumeCommand::fromMap($map['ResumeCommand']);
        }

        return $model;
    }
}
