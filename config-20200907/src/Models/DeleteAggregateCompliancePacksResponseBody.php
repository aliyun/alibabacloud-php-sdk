<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregateCompliancePacksResponseBody\operateCompliancePacksResult;
use AlibabaCloud\Tea\Model;

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
        'requestId'                    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operateCompliancePacksResult) {
            $res['OperateCompliancePacksResult'] = null !== $this->operateCompliancePacksResult ? $this->operateCompliancePacksResult->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['OperateCompliancePacksResult'])) {
            $model->operateCompliancePacksResult = operateCompliancePacksResult::fromMap($map['OperateCompliancePacksResult']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
