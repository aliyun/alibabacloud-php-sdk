<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribePolicyGovernanceInClusterResponseBody\policyGovernances\policyGovernance;

use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribePolicyGovernanceInClusterResponseBody\policyGovernances\policyGovernance\violation\totalViolations;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribePolicyGovernanceInClusterResponseBody\policyGovernances\policyGovernance\violation\violations;
use AlibabaCloud\Tea\Model;

class violation extends Model
{
    /**
     * @description The number of deployments that match the policies in the associated cluster, including deployments that are blocked and deployments that have triggered alerting. The deployments are classified by severity level.
     *
     * @var totalViolations
     */
    public $totalViolations;

    /**
     * @description The number of deployments that match the policies in the associated cluster, including deployments that are blocked and deployments that have triggered alerting. The deployments are classified by policy type.
     *
     * @var violations
     */
    public $violations;
    protected $_name = [
        'totalViolations' => 'TotalViolations',
        'violations'      => 'Violations',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalViolations) {
            $res['TotalViolations'] = null !== $this->totalViolations ? $this->totalViolations->toMap() : null;
        }
        if (null !== $this->violations) {
            $res['Violations'] = null !== $this->violations ? $this->violations->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return violation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalViolations'])) {
            $model->totalViolations = totalViolations::fromMap($map['TotalViolations']);
        }
        if (isset($map['Violations'])) {
            $model->violations = violations::fromMap($map['Violations']);
        }

        return $model;
    }
}
