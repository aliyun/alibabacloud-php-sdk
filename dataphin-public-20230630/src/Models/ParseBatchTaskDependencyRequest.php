<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ParseBatchTaskDependencyRequest\parseCommand;

class ParseBatchTaskDependencyRequest extends Model
{
    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var parseCommand
     */
    public $parseCommand;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'parseCommand' => 'ParseCommand',
    ];

    public function validate()
    {
        if (null !== $this->parseCommand) {
            $this->parseCommand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->parseCommand) {
            $res['ParseCommand'] = null !== $this->parseCommand ? $this->parseCommand->toArray($noStream) : $this->parseCommand;
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

        if (isset($map['ParseCommand'])) {
            $model->parseCommand = parseCommand::fromMap($map['ParseCommand']);
        }

        return $model;
    }
}
