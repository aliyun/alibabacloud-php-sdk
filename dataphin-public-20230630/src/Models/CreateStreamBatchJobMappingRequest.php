<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateStreamBatchJobMappingRequest\streamBatchJobMappingCreateCommand;

class CreateStreamBatchJobMappingRequest extends Model
{
    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var streamBatchJobMappingCreateCommand
     */
    public $streamBatchJobMappingCreateCommand;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'streamBatchJobMappingCreateCommand' => 'StreamBatchJobMappingCreateCommand',
    ];

    public function validate()
    {
        if (null !== $this->streamBatchJobMappingCreateCommand) {
            $this->streamBatchJobMappingCreateCommand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->streamBatchJobMappingCreateCommand) {
            $res['StreamBatchJobMappingCreateCommand'] = null !== $this->streamBatchJobMappingCreateCommand ? $this->streamBatchJobMappingCreateCommand->toArray($noStream) : $this->streamBatchJobMappingCreateCommand;
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

        if (isset($map['StreamBatchJobMappingCreateCommand'])) {
            $model->streamBatchJobMappingCreateCommand = streamBatchJobMappingCreateCommand::fromMap($map['StreamBatchJobMappingCreateCommand']);
        }

        return $model;
    }
}
