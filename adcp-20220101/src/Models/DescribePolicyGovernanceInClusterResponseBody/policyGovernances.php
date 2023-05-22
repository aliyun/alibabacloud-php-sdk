<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribePolicyGovernanceInClusterResponseBody;

use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribePolicyGovernanceInClusterResponseBody\policyGovernances\cluster;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribePolicyGovernanceInClusterResponseBody\policyGovernances\policyGovernance;
use AlibabaCloud\Tea\Model;

class policyGovernances extends Model
{
    /**
     * @description The information about the associated clusters in which the policies are deployed.
     *
     * @var cluster
     */
    public $cluster;

    /**
     * @description The detailed policy information.
     *
     * @var policyGovernance
     */
    public $policyGovernance;
    protected $_name = [
        'cluster'          => 'Cluster',
        'policyGovernance' => 'PolicyGovernance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cluster) {
            $res['Cluster'] = null !== $this->cluster ? $this->cluster->toMap() : null;
        }
        if (null !== $this->policyGovernance) {
            $res['PolicyGovernance'] = null !== $this->policyGovernance ? $this->policyGovernance->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policyGovernances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cluster'])) {
            $model->cluster = cluster::fromMap($map['Cluster']);
        }
        if (isset($map['PolicyGovernance'])) {
            $model->policyGovernance = policyGovernance::fromMap($map['PolicyGovernance']);
        }

        return $model;
    }
}
