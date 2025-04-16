<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreatePipelineNodeRequest\createPipelineNodeCommand;

class CreatePipelineNodeRequest extends Model
{
    /**
     * @var createPipelineNodeCommand
     */
    public $createPipelineNodeCommand;

    /**
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'createPipelineNodeCommand' => 'CreatePipelineNodeCommand',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate()
    {
        if (null !== $this->createPipelineNodeCommand) {
            $this->createPipelineNodeCommand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createPipelineNodeCommand) {
            $res['CreatePipelineNodeCommand'] = null !== $this->createPipelineNodeCommand ? $this->createPipelineNodeCommand->toArray($noStream) : $this->createPipelineNodeCommand;
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
        if (isset($map['CreatePipelineNodeCommand'])) {
            $model->createPipelineNodeCommand = createPipelineNodeCommand::fromMap($map['CreatePipelineNodeCommand']);
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
