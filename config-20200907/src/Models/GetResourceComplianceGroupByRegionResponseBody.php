<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceComplianceGroupByRegionResponseBody\complianceResult;

class GetResourceComplianceGroupByRegionResponseBody extends Model
{
    /**
     * @var complianceResult
     */
    public $complianceResult;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'complianceResult' => 'ComplianceResult',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->complianceResult) {
            $this->complianceResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->complianceResult) {
            $res['ComplianceResult'] = null !== $this->complianceResult ? $this->complianceResult->toArray($noStream) : $this->complianceResult;
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
        if (isset($map['ComplianceResult'])) {
            $model->complianceResult = complianceResult::fromMap($map['ComplianceResult']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
