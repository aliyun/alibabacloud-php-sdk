<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\FixDataRequest\fixDataCommand;

class FixDataRequest extends Model
{
    /**
     * @var string
     */
    public $env;

    /**
     * @var fixDataCommand
     */
    public $fixDataCommand;

    /**
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'env' => 'Env',
        'fixDataCommand' => 'FixDataCommand',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate()
    {
        if (null !== $this->fixDataCommand) {
            $this->fixDataCommand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }

        if (null !== $this->fixDataCommand) {
            $res['FixDataCommand'] = null !== $this->fixDataCommand ? $this->fixDataCommand->toArray($noStream) : $this->fixDataCommand;
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

        if (isset($map['FixDataCommand'])) {
            $model->fixDataCommand = fixDataCommand::fromMap($map['FixDataCommand']);
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
