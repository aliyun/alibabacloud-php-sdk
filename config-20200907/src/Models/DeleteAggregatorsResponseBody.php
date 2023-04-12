<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregatorsResponseBody\operateAggregatorsResult;
use AlibabaCloud\Tea\Model;

class DeleteAggregatorsResponseBody extends Model
{
    /**
     * @description The results of the delete operations.
     *
     * @var operateAggregatorsResult
     */
    public $operateAggregatorsResult;

    /**
     * @description The ID of the request.
     *
     * @example 8195B664-9565-4685-89AC-8B5F04B44B92
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'operateAggregatorsResult' => 'OperateAggregatorsResult',
        'requestId'                => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operateAggregatorsResult) {
            $res['OperateAggregatorsResult'] = null !== $this->operateAggregatorsResult ? $this->operateAggregatorsResult->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAggregatorsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperateAggregatorsResult'])) {
            $model->operateAggregatorsResult = operateAggregatorsResult::fromMap($map['OperateAggregatorsResult']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
