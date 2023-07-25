<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceComplianceByPackResponseBody\resourceComplianceResult;
use AlibabaCloud\Tea\Model;

class GetResourceComplianceByPackResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 6EC7AED1-172F-42AE-9C12-295BC2ADB751
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The compliance evaluation results returned.
     *
     * @var resourceComplianceResult
     */
    public $resourceComplianceResult;
    protected $_name = [
        'requestId'                => 'RequestId',
        'resourceComplianceResult' => 'ResourceComplianceResult',
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
        if (null !== $this->resourceComplianceResult) {
            $res['ResourceComplianceResult'] = null !== $this->resourceComplianceResult ? $this->resourceComplianceResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetResourceComplianceByPackResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceComplianceResult'])) {
            $model->resourceComplianceResult = resourceComplianceResult::fromMap($map['ResourceComplianceResult']);
        }

        return $model;
    }
}
