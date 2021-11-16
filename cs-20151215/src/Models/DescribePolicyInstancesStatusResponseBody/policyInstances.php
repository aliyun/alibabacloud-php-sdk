<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyInstancesStatusResponseBody;

use AlibabaCloud\Tea\Model;

class policyInstances extends Model
{
    /**
     * @var string
     */
    public $policyCategory;

    /**
     * @var string
     */
    public $policyDescription;

    /**
     * @var int
     */
    public $policyInstancesCount;

    /**
     * @var string
     */
    public $policyName;

    /**
     * @var string
     */
    public $policySeverity;
    protected $_name = [
        'policyCategory'       => 'policy_category',
        'policyDescription'    => 'policy_description',
        'policyInstancesCount' => 'policy_instances_count',
        'policyName'           => 'policy_name',
        'policySeverity'       => 'policy_severity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyCategory) {
            $res['policy_category'] = $this->policyCategory;
        }
        if (null !== $this->policyDescription) {
            $res['policy_description'] = $this->policyDescription;
        }
        if (null !== $this->policyInstancesCount) {
            $res['policy_instances_count'] = $this->policyInstancesCount;
        }
        if (null !== $this->policyName) {
            $res['policy_name'] = $this->policyName;
        }
        if (null !== $this->policySeverity) {
            $res['policy_severity'] = $this->policySeverity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policyInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['policy_category'])) {
            $model->policyCategory = $map['policy_category'];
        }
        if (isset($map['policy_description'])) {
            $model->policyDescription = $map['policy_description'];
        }
        if (isset($map['policy_instances_count'])) {
            $model->policyInstancesCount = $map['policy_instances_count'];
        }
        if (isset($map['policy_name'])) {
            $model->policyName = $map['policy_name'];
        }
        if (isset($map['policy_severity'])) {
            $model->policySeverity = $map['policy_severity'];
        }

        return $model;
    }
}
