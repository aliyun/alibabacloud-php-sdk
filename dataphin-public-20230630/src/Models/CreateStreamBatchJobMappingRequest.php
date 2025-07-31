<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateStreamBatchJobMappingRequest\streamBatchJobMappingCreateCommand;
use AlibabaCloud\Tea\Model;

class CreateStreamBatchJobMappingRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;

    /**
     * @description This parameter is required.
     *
     * @var streamBatchJobMappingCreateCommand
     */
    public $streamBatchJobMappingCreateCommand;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'streamBatchJobMappingCreateCommand' => 'StreamBatchJobMappingCreateCommand',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }
        if (null !== $this->streamBatchJobMappingCreateCommand) {
            $res['StreamBatchJobMappingCreateCommand'] = null !== $this->streamBatchJobMappingCreateCommand ? $this->streamBatchJobMappingCreateCommand->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateStreamBatchJobMappingRequest
     */
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
