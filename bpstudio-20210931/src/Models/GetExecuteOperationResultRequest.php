<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models;

use AlibabaCloud\Tea\Model;

class GetExecuteOperationResultRequest extends Model
{
    /**
     * @description The ID of the operation.
     *
     * @example op_xxxxxxxxxxxxxxxxxxxxxx
     *
     * @var string
     */
    public $operationId;

    /**
     * @description The ID of the resource group. This parameter is specified to verify the permissions on the resource group.
     *
     * @example testResourceId
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'operationId'     => 'OperationId',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operationId) {
            $res['OperationId'] = $this->operationId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetExecuteOperationResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperationId'])) {
            $model->operationId = $map['OperationId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
