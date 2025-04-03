<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregateCompliancePacksResponseBody\operateCompliancePacksResult;

class DeleteAggregateCompliancePacksResponseBody extends Model
{
    /**
     * @var operateCompliancePacksResult
     */
    public $operateCompliancePacksResult;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'operateCompliancePacksResult' => 'OperateCompliancePacksResult',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->operateCompliancePacksResult) {
            $this->operateCompliancePacksResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operateCompliancePacksResult) {
            $res['OperateCompliancePacksResult'] = null !== $this->operateCompliancePacksResult ? $this->operateCompliancePacksResult->toArray($noStream) : $this->operateCompliancePacksResult;
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
        if (isset($map['OperateCompliancePacksResult'])) {
            $model->operateCompliancePacksResult = operateCompliancePacksResult::fromMap($map['OperateCompliancePacksResult']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
