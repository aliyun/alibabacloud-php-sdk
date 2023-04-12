<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\ListCompliancePackTemplatesResponseBody\compliancePackTemplatesResult;
use AlibabaCloud\Tea\Model;

class ListCompliancePackTemplatesResponseBody extends Model
{
    /**
     * @description The information about the compliance package templates returned.
     *
     * @var compliancePackTemplatesResult
     */
    public $compliancePackTemplatesResult;

    /**
     * @description The ID of the request.
     *
     * @example D67FC82F-25AE-4268-A94C-3348340748F9
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'compliancePackTemplatesResult' => 'CompliancePackTemplatesResult',
        'requestId'                     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compliancePackTemplatesResult) {
            $res['CompliancePackTemplatesResult'] = null !== $this->compliancePackTemplatesResult ? $this->compliancePackTemplatesResult->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCompliancePackTemplatesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompliancePackTemplatesResult'])) {
            $model->compliancePackTemplatesResult = compliancePackTemplatesResult::fromMap($map['CompliancePackTemplatesResult']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
