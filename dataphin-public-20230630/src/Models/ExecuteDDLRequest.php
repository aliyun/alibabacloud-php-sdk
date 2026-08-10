<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ExecuteDDLRequest\context;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ExecuteDDLRequest\DDLCommand;

class ExecuteDDLRequest extends Model
{
    /**
     * @var context
     */
    public $context;

    /**
     * @var DDLCommand
     */
    public $DDLCommand;

    /**
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'context' => 'Context',
        'DDLCommand' => 'DDLCommand',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate()
    {
        if (null !== $this->context) {
            $this->context->validate();
        }
        if (null !== $this->DDLCommand) {
            $this->DDLCommand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->context) {
            $res['Context'] = null !== $this->context ? $this->context->toArray($noStream) : $this->context;
        }

        if (null !== $this->DDLCommand) {
            $res['DDLCommand'] = null !== $this->DDLCommand ? $this->DDLCommand->toArray($noStream) : $this->DDLCommand;
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
        if (isset($map['Context'])) {
            $model->context = context::fromMap($map['Context']);
        }

        if (isset($map['DDLCommand'])) {
            $model->DDLCommand = DDLCommand::fromMap($map['DDLCommand']);
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
