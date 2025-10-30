<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreatePipelineRequest\context;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreatePipelineRequest\createCommand;

class CreatePipelineRequest extends Model
{
    /**
     * @var context
     */
    public $context;

    /**
     * @var createCommand
     */
    public $createCommand;

    /**
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'context' => 'Context',
        'createCommand' => 'CreateCommand',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate()
    {
        if (null !== $this->context) {
            $this->context->validate();
        }
        if (null !== $this->createCommand) {
            $this->createCommand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->context) {
            $res['Context'] = null !== $this->context ? $this->context->toArray($noStream) : $this->context;
        }

        if (null !== $this->createCommand) {
            $res['CreateCommand'] = null !== $this->createCommand ? $this->createCommand->toArray($noStream) : $this->createCommand;
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

        if (isset($map['CreateCommand'])) {
            $model->createCommand = createCommand::fromMap($map['CreateCommand']);
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
