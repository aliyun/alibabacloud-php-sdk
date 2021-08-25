<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceComplianceByPackResponseBody\resourceComplianceResult;
use AlibabaCloud\Tea\Model;

class GetAggregateResourceComplianceByPackResponseBody extends Model
{
    /**
     * @var resourceComplianceResult
     */
    public $resourceComplianceResult;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'resourceComplianceResult' => 'ResourceComplianceResult',
        'requestId'                => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceComplianceResult) {
            $res['ResourceComplianceResult'] = null !== $this->resourceComplianceResult ? $this->resourceComplianceResult->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAggregateResourceComplianceByPackResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceComplianceResult'])) {
            $model->resourceComplianceResult = resourceComplianceResult::fromMap($map['ResourceComplianceResult']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
