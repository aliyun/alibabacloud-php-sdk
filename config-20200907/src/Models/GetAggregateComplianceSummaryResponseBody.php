<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateComplianceSummaryResponseBody\complianceSummary;

class GetAggregateComplianceSummaryResponseBody extends Model
{
    /**
     * @var complianceSummary
     */
    public $complianceSummary;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'complianceSummary' => 'ComplianceSummary',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->complianceSummary) {
            $this->complianceSummary->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->complianceSummary) {
            $res['ComplianceSummary'] = null !== $this->complianceSummary ? $this->complianceSummary->toArray($noStream) : $this->complianceSummary;
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
        if (isset($map['ComplianceSummary'])) {
            $model->complianceSummary = complianceSummary::fromMap($map['ComplianceSummary']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
