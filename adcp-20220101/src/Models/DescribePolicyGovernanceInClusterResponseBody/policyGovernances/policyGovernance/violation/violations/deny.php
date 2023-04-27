<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribePolicyGovernanceInClusterResponseBody\policyGovernances\policyGovernance\violation\violations;

use AlibabaCloud\Tea\Model;

class deny extends Model
{
    /**
     * @example Restricts secrets used in pod envs
     *
     * @var string
     */
    public $policyDescription;

    /**
     * @example ACKPSPCapabilities
     *
     * @var string
     */
    public $policyName;

    /**
     * @example low
     *
     * @var string
     */
    public $severity;

    /**
     * @example 2
     *
     * @var int
     */
    public $violations;
    protected $_name = [
        'policyDescription' => 'PolicyDescription',
        'policyName'        => 'PolicyName',
        'severity'          => 'Severity',
        'violations'        => 'Violations',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyDescription) {
            $res['PolicyDescription'] = $this->policyDescription;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }
        if (null !== $this->violations) {
            $res['Violations'] = $this->violations;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deny
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyDescription'])) {
            $model->policyDescription = $map['PolicyDescription'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }
        if (isset($map['Violations'])) {
            $model->violations = $map['Violations'];
        }

        return $model;
    }
}
