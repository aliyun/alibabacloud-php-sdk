<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateAccountComplianceByPackResponseBody\accountComplianceResult;

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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->accountComplianceResult) {
            $this->accountComplianceResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountComplianceResult) {
            $res['AccountComplianceResult'] = null !== $this->accountComplianceResult ? $this->accountComplianceResult->toArray($noStream) : $this->accountComplianceResult;
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
        if (isset($map['AccountComplianceResult'])) {
            $model->accountComplianceResult = accountComplianceResult::fromMap($map['AccountComplianceResult']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
