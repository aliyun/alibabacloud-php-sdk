<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetComplianceSummaryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\GetComplianceSummaryResponseBody\complianceSummary\complianceSummaryByConfigRule;
use AlibabaCloud\SDK\Config\V20200907\Models\GetComplianceSummaryResponseBody\complianceSummary\complianceSummaryByResource;

class complianceSummary extends Model
{
    /**
     * @var complianceSummaryByConfigRule
     */
    public $complianceSummaryByConfigRule;
    /**
     * @var complianceSummaryByResource
     */
    public $complianceSummaryByResource;
    protected $_name = [
        'complianceSummaryByConfigRule' => 'ComplianceSummaryByConfigRule',
        'complianceSummaryByResource'   => 'ComplianceSummaryByResource',
    ];

    public function validate()
    {
        if (null !== $this->complianceSummaryByConfigRule) {
            $this->complianceSummaryByConfigRule->validate();
        }
        if (null !== $this->complianceSummaryByResource) {
            $this->complianceSummaryByResource->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->complianceSummaryByConfigRule) {
            $res['ComplianceSummaryByConfigRule'] = null !== $this->complianceSummaryByConfigRule ? $this->complianceSummaryByConfigRule->toArray($noStream) : $this->complianceSummaryByConfigRule;
        }

        if (null !== $this->complianceSummaryByResource) {
            $res['ComplianceSummaryByResource'] = null !== $this->complianceSummaryByResource ? $this->complianceSummaryByResource->toArray($noStream) : $this->complianceSummaryByResource;
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
        if (isset($map['ComplianceSummaryByConfigRule'])) {
            $model->complianceSummaryByConfigRule = complianceSummaryByConfigRule::fromMap($map['ComplianceSummaryByConfigRule']);
        }

        if (isset($map['ComplianceSummaryByResource'])) {
            $model->complianceSummaryByResource = complianceSummaryByResource::fromMap($map['ComplianceSummaryByResource']);
        }

        return $model;
    }
}
