<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyGovernanceInClusterResponseBody\violations;

use AlibabaCloud\Tea\Model;

class warn extends Model
{
    /**
     * @example Controls Linux capabilities.
     *
     * @var string
     */
    public $policyDescription;

    /**
     * @example policy-gatekeeper-ackpspcapabilities
     *
     * @var string
     */
    public $policyName;

    /**
     * @example high
     *
     * @var string
     */
    public $severity;

    /**
     * @example 81
     *
     * @var int
     */
    public $violations;
    protected $_name = [
        'policyDescription' => 'policyDescription',
        'policyName'        => 'policyName',
        'severity'          => 'severity',
        'violations'        => 'violations',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyDescription) {
            $res['policyDescription'] = $this->policyDescription;
        }
        if (null !== $this->policyName) {
            $res['policyName'] = $this->policyName;
        }
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
        if (isset($map['policyDescription'])) {
            $model->policyDescription = $map['policyDescription'];
        }
        if (isset($map['policyName'])) {
            $model->policyName = $map['policyName'];
        }
        if (isset($map['severity'])) {
            $model->severity = $map['severity'];
        }
        if (isset($map['violations'])) {
            $model->violations = $map['violations'];
        }

        return $model;
    }
}
