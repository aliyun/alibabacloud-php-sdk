<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClustersResponseBody\clusters;

use AlibabaCloud\Tea\Model;

class network extends Model
{
    /**
     * @var string
     */
    public $clusterDomain;

    /**
     * @var string[]
     */
    public $securityGroupIDs;

    /**
     * @var string[]
     */
    public $vSwitches;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'clusterDomain'    => 'ClusterDomain',
        'securityGroupIDs' => 'SecurityGroupIDs',
        'vSwitches'        => 'VSwitches',
        'vpcId'            => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterDomain) {
            $res['ClusterDomain'] = $this->clusterDomain;
        }
        if (null !== $this->securityGroupIDs) {
            $res['SecurityGroupIDs'] = $this->securityGroupIDs;
        }
        if (null !== $this->vSwitches) {
            $res['VSwitches'] = $this->vSwitches;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return network
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterDomain'])) {
            $model->clusterDomain = $map['ClusterDomain'];
        }
        if (isset($map['SecurityGroupIDs'])) {
            if (!empty($map['SecurityGroupIDs'])) {
                $model->securityGroupIDs = $map['SecurityGroupIDs'];
            }
        }
        if (isset($map['VSwitches'])) {
            if (!empty($map['VSwitches'])) {
                $model->vSwitches = $map['VSwitches'];
            }
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
