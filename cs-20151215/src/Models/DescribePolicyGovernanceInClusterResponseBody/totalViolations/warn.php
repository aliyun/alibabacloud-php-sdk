<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyGovernanceInClusterResponseBody\totalViolations;

use AlibabaCloud\Tea\Model;

class warn extends Model
{
    /**
     * @description The severity level of the policy.
     *
     * @example low
     *
     * @var string
     */
    public $severity;

    /**
     * @description The number of alerting events that are triggered.
     *
     * @example 5
     *
     * @var int
     */
    public $violations;
    protected $_name = [
        'severity' => 'severity',
        'violations' => 'violations',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->severity) {
            $res['severity'] = $this->severity;
        }
        if (null !== $this->violations) {
            $res['violations'] = $this->violations;
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
        if (isset($map['severity'])) {
            $model->severity = $map['severity'];
        }
        if (isset($map['violations'])) {
            $model->violations = $map['violations'];
        }

        return $model;
    }
}
