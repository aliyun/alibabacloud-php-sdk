<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribePolicyGovernanceInClusterResponseBody\policyGovernances\policyGovernance\violation\totalViolations;

use AlibabaCloud\Tea\Model;

class warn extends Model
{
    /**
     * @example low
     *
     * @var string
     */
    public $severity;

    /**
     * @example 2
     *
     * @var string
     */
    public $violations;
    protected $_name = [
        'severity'   => 'Severity',
        'violations' => 'Violations',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return warn
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }
        if (isset($map['Violations'])) {
            $model->violations = $map['Violations'];
        }

        return $model;
    }
}
