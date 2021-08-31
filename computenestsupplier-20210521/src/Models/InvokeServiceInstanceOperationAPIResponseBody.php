<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class InvokeServiceInstanceOperationAPIResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $operationResults;
    protected $_name = [
        'requestId'        => 'RequestId',
        'operationResults' => 'OperationResults',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->operationResults) {
            $res['OperationResults'] = $this->operationResults;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InvokeServiceInstanceOperationAPIResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OperationResults'])) {
            $model->operationResults = $map['OperationResults'];
        }

        return $model;
    }
}
