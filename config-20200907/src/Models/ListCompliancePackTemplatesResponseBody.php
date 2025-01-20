<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\ListCompliancePackTemplatesResponseBody\compliancePackTemplatesResult;

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
        if (null !== $this->compliancePackTemplatesResult) {
            $this->compliancePackTemplatesResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->compliancePackTemplatesResult) {
            $res['CompliancePackTemplatesResult'] = null !== $this->compliancePackTemplatesResult ? $this->compliancePackTemplatesResult->toArray($noStream) : $this->compliancePackTemplatesResult;
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
        if (isset($map['CompliancePackTemplatesResult'])) {
            $model->compliancePackTemplatesResult = compliancePackTemplatesResult::fromMap($map['CompliancePackTemplatesResult']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
