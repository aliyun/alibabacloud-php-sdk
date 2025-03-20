<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class GetCreateWorkflowInstancesResultRequest extends Model
{
    /**
     * @description The operation ID. This parameter is used to query the result of asynchronously creating a workflow instance. You can call the CreateWorkflowInstances operation to query the ID.
     *
     * This parameter is required.
     *
     * @example e15ad21c-b0e9-4792-8f55-b037xxxxxxxx
     *
     * @var string
     */
    public $operationId;
    protected $_name = [
        'operationId' => 'OperationId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->operationId) {
            $res['OperationId'] = $this->operationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCreateWorkflowInstancesResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperationId'])) {
            $model->operationId = $map['OperationId'];
        }

        return $model;
    }
}
