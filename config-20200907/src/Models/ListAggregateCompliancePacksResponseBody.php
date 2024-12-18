<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateCompliancePacksResponseBody\compliancePacksResult;
use AlibabaCloud\Tea\Model;

class ListAggregateCompliancePacksResponseBody extends Model
{
    /**
     * @description The information about the compliance packages.
     *
     * @var compliancePacksResult
     */
    public $compliancePacksResult;

    /**
     * @description The ID of the request.
     *
     * @example B5806142-3090-4F86-A84E-12B3FE52C1C4
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
     * @return ListAggregateCompliancePacksResponseBody
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
