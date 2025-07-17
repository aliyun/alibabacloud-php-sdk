<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class GetRerunWorkflowInstancesResultRequest extends Model
{
    /**
     * @description The operation ID used to asynchronously query the result of the workflow instance rerun. This value is obtained from the RerunWorkflowInstances operation.
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
     * @return GetRerunWorkflowInstancesResultRequest
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
