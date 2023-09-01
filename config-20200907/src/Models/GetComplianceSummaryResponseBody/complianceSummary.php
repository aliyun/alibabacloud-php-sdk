<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetComplianceSummaryResponseBody;

use AlibabaCloud\SDK\Config\V20200907\Models\GetComplianceSummaryResponseBody\complianceSummary\complianceSummaryByConfigRule;
use AlibabaCloud\SDK\Config\V20200907\Models\GetComplianceSummaryResponseBody\complianceSummary\complianceSummaryByResource;
use AlibabaCloud\Tea\Model;

class complianceSummary extends Model
{
    /**
     * @description The summary of compliance statistics from the rule dimension.
     *
     * @var complianceSummaryByConfigRule
     */
    public $complianceSummaryByConfigRule;

    /**
     * @description The summary of compliance statistics from the resource dimension.
     *
     * @var complianceSummaryByResource
     */
    public $complianceSummaryByResource;
    protected $_name = [
        'complianceSummaryByConfigRule' => 'ComplianceSummaryByConfigRule',
        'complianceSummaryByResource'   => 'ComplianceSummaryByResource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->complianceSummaryByConfigRule) {
            $res['ComplianceSummaryByConfigRule'] = null !== $this->complianceSummaryByConfigRule ? $this->complianceSummaryByConfigRule->toMap() : null;
        }
        if (null !== $this->complianceSummaryByResource) {
            $res['ComplianceSummaryByResource'] = null !== $this->complianceSummaryByResource ? $this->complianceSummaryByResource->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return complianceSummary
     */
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
