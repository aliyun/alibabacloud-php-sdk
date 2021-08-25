<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\ListCompliancePacksResponseBody\compliancePacksResult;
use AlibabaCloud\Tea\Model;

class ListCompliancePacksResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var compliancePacksResult
     */
    public $compliancePacksResult;
    protected $_name = [
        'requestId'             => 'RequestId',
        'compliancePacksResult' => 'CompliancePacksResult',
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
        if (null !== $this->compliancePacksResult) {
            $res['CompliancePacksResult'] = null !== $this->compliancePacksResult ? $this->compliancePacksResult->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CompliancePacksResult'])) {
            $model->compliancePacksResult = compliancePacksResult::fromMap($map['CompliancePacksResult']);
        }

        return $model;
    }
}
