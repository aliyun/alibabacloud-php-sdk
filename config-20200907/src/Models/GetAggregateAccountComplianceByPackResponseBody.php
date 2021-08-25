<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateAccountComplianceByPackResponseBody\accountComplianceResult;
use AlibabaCloud\Tea\Model;

class GetAggregateAccountComplianceByPackResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var accountComplianceResult
     */
    public $accountComplianceResult;
    protected $_name = [
        'requestId'               => 'RequestId',
        'accountComplianceResult' => 'AccountComplianceResult',
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
        if (null !== $this->accountComplianceResult) {
            $res['AccountComplianceResult'] = null !== $this->accountComplianceResult ? $this->accountComplianceResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAggregateAccountComplianceByPackResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AccountComplianceResult'])) {
            $model->accountComplianceResult = accountComplianceResult::fromMap($map['AccountComplianceResult']);
        }

        return $model;
    }
}
