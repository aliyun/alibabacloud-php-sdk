<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribePolicyInstancesStatusResponseBody\policies;

use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribePolicyInstancesStatusResponseBody\policies\policyInstances\policyClusters;
use AlibabaCloud\Tea\Model;

class policyInstances extends Model
{
    /**
     * @description The type of the policy.
     *
     * @example compliance
     *
     * @var string
     */
    public $policyCategory;

    /**
     * @description The associated clusters in which the policy instances are deployed.
     *
     * @var policyClusters[]
     */
    public $policyClusters;

    /**
     * @description The description of the policy.
     *
     * @example Restricts use of the cluster-admin role.
     *
     * @var string
     */
    public $policyDescription;

    /**
     * @description The number of policy instances that are deployed. If this parameter is empty, no policy instance is deployed.
     *
     * @example 2
     *
     * @var int
     */
    public $policyInstancesCount;

    /**
     * @description The name of the policy.
     *
     * @example ACKRestrictRoleBindings
     *
     * @var string
     */
    public $policyName;

    /**
     * @description The severity level of the policy.
     *
     * @example low
     *
     * @var string
     */
    public $policySeverity;
    protected $_name = [
        'policyCategory'       => 'PolicyCategory',
        'policyClusters'       => 'PolicyClusters',
        'policyDescription'    => 'PolicyDescription',
        'policyInstancesCount' => 'PolicyInstancesCount',
        'policyName'           => 'PolicyName',
        'policySeverity'       => 'PolicySeverity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyCategory) {
            $res['PolicyCategory'] = $this->policyCategory;
        }
        if (null !== $this->policyClusters) {
            $res['PolicyClusters'] = [];
            if (null !== $this->policyClusters && \is_array($this->policyClusters)) {
                $n = 0;
                foreach ($this->policyClusters as $item) {
                    $res['PolicyClusters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->policyDescription) {
            $res['PolicyDescription'] = $this->policyDescription;
        }
        if (null !== $this->policyInstancesCount) {
            $res['PolicyInstancesCount'] = $this->policyInstancesCount;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->policySeverity) {
            $res['PolicySeverity'] = $this->policySeverity;
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
        if (isset($map['PolicyCategory'])) {
            $model->policyCategory = $map['PolicyCategory'];
        }
        if (isset($map['PolicyClusters'])) {
            if (!empty($map['PolicyClusters'])) {
                $model->policyClusters = [];
                $n                     = 0;
                foreach ($map['PolicyClusters'] as $item) {
                    $model->policyClusters[$n++] = null !== $item ? policyClusters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PolicyDescription'])) {
            $model->policyDescription = $map['PolicyDescription'];
        }
        if (isset($map['PolicyInstancesCount'])) {
            $model->policyInstancesCount = $map['PolicyInstancesCount'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['PolicySeverity'])) {
            $model->policySeverity = $map['PolicySeverity'];
        }

        return $model;
    }
}
