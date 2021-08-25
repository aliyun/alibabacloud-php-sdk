<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\ListCompliancePackTemplatesResponseBody\compliancePackTemplatesResult;
use AlibabaCloud\Tea\Model;

class ListCompliancePackTemplatesResponseBody extends Model
{
    /**
     * @var compliancePackTemplatesResult
     */
    public $compliancePackTemplatesResult;

    /**
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
