<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregateCompliancePacksResponseBody\operateCompliancePacksResult;
use AlibabaCloud\Tea\Model;

class DeleteAggregateCompliancePacksResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var operateCompliancePacksResult
     */
    public $operateCompliancePacksResult;
    protected $_name = [
        'requestId'                    => 'RequestId',
        'operateCompliancePacksResult' => 'OperateCompliancePacksResult',
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
        if (null !== $this->operateCompliancePacksResult) {
            $res['OperateCompliancePacksResult'] = null !== $this->operateCompliancePacksResult ? $this->operateCompliancePacksResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAggregateCompliancePacksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OperateCompliancePacksResult'])) {
            $model->operateCompliancePacksResult = operateCompliancePacksResult::fromMap($map['OperateCompliancePacksResult']);
        }

        return $model;
    }
}
