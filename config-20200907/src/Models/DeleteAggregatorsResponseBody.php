<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregatorsResponseBody\operateAggregatorsResult;

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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->operateAggregatorsResult) {
            $this->operateAggregatorsResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operateAggregatorsResult) {
            $res['OperateAggregatorsResult'] = null !== $this->operateAggregatorsResult ? $this->operateAggregatorsResult->toArray($noStream) : $this->operateAggregatorsResult;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['OperateAggregatorsResult'])) {
            $model->operateAggregatorsResult = operateAggregatorsResult::fromMap($map['OperateAggregatorsResult']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
