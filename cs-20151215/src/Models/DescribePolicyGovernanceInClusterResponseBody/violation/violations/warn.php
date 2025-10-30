<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyGovernanceInClusterResponseBody\violation\violations;

use AlibabaCloud\Dara\Model;

class warn extends Model
{
    /**
     * @var string
     */
    public $policyDescription;

    /**
     * @var string
     */
    public $policyName;

    /**
     * @var string
     */
    public $severity;

    /**
     * @var int
     */
    public $violations;
    protected $_name = [
        'policyDescription' => 'policyDescription',
        'policyName' => 'policyName',
        'severity' => 'severity',
        'violations' => 'violations',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
