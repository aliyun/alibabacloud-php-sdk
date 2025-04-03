<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateCompliancePacksResponseBody\compliancePacksResult;

class ListAggregateCompliancePacksResponseBody extends Model
{
    /**
     * @var compliancePacksResult
     */
    public $compliancePacksResult;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'compliancePacksResult' => 'CompliancePacksResult',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->compliancePacksResult) {
            $this->compliancePacksResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->compliancePacksResult) {
            $res['CompliancePacksResult'] = null !== $this->compliancePacksResult ? $this->compliancePacksResult->toArray($noStream) : $this->compliancePacksResult;
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
        if (isset($map['CompliancePacksResult'])) {
            $model->compliancePacksResult = compliancePacksResult::fromMap($map['CompliancePacksResult']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
