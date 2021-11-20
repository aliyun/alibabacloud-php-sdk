<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateAccountComplianceByPackResponseBody\accountComplianceResult;
use AlibabaCloud\Tea\Model;

class GetAggregateAccountComplianceByPackResponseBody extends Model
{
    /**
     * @var accountComplianceResult
     */
    public $accountComplianceResult;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accountComplianceResult' => 'AccountComplianceResult',
        'requestId'               => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountComplianceResult) {
            $res['AccountComplianceResult'] = null !== $this->accountComplianceResult ? $this->accountComplianceResult->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AccountComplianceResult'])) {
            $model->accountComplianceResult = accountComplianceResult::fromMap($map['AccountComplianceResult']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
