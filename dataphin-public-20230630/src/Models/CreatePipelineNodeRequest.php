<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreatePipelineNodeRequest\createPipelineNodeCommand;
use AlibabaCloud\Tea\Model;

class CreatePipelineNodeRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var createPipelineNodeCommand
     */
    public $createPipelineNodeCommand;

    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'createPipelineNodeCommand' => 'CreatePipelineNodeCommand',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createPipelineNodeCommand) {
            $res['CreatePipelineNodeCommand'] = null !== $this->createPipelineNodeCommand ? $this->createPipelineNodeCommand->toMap() : null;
        }
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePipelineNodeRequest
     */
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
