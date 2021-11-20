<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregatorsResponseBody\operateAggregatorsResult;
use AlibabaCloud\Tea\Model;

class DeleteAggregatorsResponseBody extends Model
{
    /**
     * @var operateAggregatorsResult
     */
    public $operateAggregatorsResult;

    /**
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
