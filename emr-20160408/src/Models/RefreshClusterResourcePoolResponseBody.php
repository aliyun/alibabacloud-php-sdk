<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class RefreshClusterResourcePoolResponseBody extends Model
{
    /**
     * @var string
     */
    public $workFlowInstanceId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $operationId;
    protected $_name = [
        'workFlowInstanceId' => 'WorkFlowInstanceId',
        'requestId'          => 'RequestId',
        'operationId'        => 'OperationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->workFlowInstanceId) {
            $res['WorkFlowInstanceId'] = $this->workFlowInstanceId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->operationId) {
            $res['OperationId'] = $this->operationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefreshClusterResourcePoolResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WorkFlowInstanceId'])) {
            $model->workFlowInstanceId = $map['WorkFlowInstanceId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OperationId'])) {
            $model->operationId = $map['OperationId'];
        }

        return $model;
    }
}
