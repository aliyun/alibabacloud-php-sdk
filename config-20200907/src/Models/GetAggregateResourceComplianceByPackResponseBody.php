<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceComplianceByPackResponseBody\resourceComplianceResult;

class GetAggregateResourceComplianceByPackResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourceComplianceResult
     */
    public $resourceComplianceResult;
    protected $_name = [
        'requestId' => 'RequestId',
        'resourceComplianceResult' => 'ResourceComplianceResult',
    ];

    public function validate()
    {
        if (null !== $this->resourceComplianceResult) {
            $this->resourceComplianceResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceComplianceResult) {
            $res['ResourceComplianceResult'] = null !== $this->resourceComplianceResult ? $this->resourceComplianceResult->toArray($noStream) : $this->resourceComplianceResult;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceComplianceResult'])) {
            $model->resourceComplianceResult = resourceComplianceResult::fromMap($map['ResourceComplianceResult']);
        }

        return $model;
    }
}
