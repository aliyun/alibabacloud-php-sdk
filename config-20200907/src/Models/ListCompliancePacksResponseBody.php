<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\ListCompliancePacksResponseBody\compliancePacksResult;
use AlibabaCloud\Tea\Model;

class ListCompliancePacksResponseBody extends Model
{
    /**
     * @description The compliance packages returned.
     *
     * @var compliancePacksResult
     */
    public $compliancePacksResult;

    /**
     * @description The ID of the request.
     *
     * @example 6EC7AED1-172F-42AE-9C12-295BC2ADB751
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'compliancePacksResult' => 'CompliancePacksResult',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compliancePacksResult) {
            $res['CompliancePacksResult'] = null !== $this->compliancePacksResult ? $this->compliancePacksResult->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCompliancePacksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompliancePacksResult'])) {
            $model->compliancePacksResult = compliancePacksResult::fromMap($map['CompliancePacksResult']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
