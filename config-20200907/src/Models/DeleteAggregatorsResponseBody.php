<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregatorsResponseBody\operateAggregatorsResult;
use AlibabaCloud\Tea\Model;

class DeleteAggregatorsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var operateAggregatorsResult
     */
    public $operateAggregatorsResult;
    protected $_name = [
        'requestId'                => 'RequestId',
        'operateAggregatorsResult' => 'OperateAggregatorsResult',
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
        if (null !== $this->operateAggregatorsResult) {
            $res['OperateAggregatorsResult'] = null !== $this->operateAggregatorsResult ? $this->operateAggregatorsResult->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OperateAggregatorsResult'])) {
            $model->operateAggregatorsResult = operateAggregatorsResult::fromMap($map['OperateAggregatorsResult']);
        }

        return $model;
    }
}
