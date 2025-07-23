<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models;

use AlibabaCloud\Tea\Model;

class ConfigClusterSubnetShrinkRequest extends Model
{
    /**
     * @description The ID of the cluster. You can call the ListCluster operation to obtain cluster IDs.
     *
     * This parameter is required.
     *
     * @example cluster-BqxX63Bsg****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The ID of the region.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description A list of vSwitches that are associated with the cluster. Note: You must include all vSwitches that you want to associate with the cluster.
     *
     * This parameter is required.
     *
     * @var string
     */
    public $vSwitchIdsShrink;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * This parameter is required.
     *
     * @example vpc-7xvkh90cw39p0****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'regionId' => 'RegionId',
        'vSwitchIdsShrink' => 'VSwitchIds',
        'vpcId' => 'VpcId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vSwitchIdsShrink) {
            $res['VSwitchIds'] = $this->vSwitchIdsShrink;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigClusterSubnetShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VSwitchIds'])) {
            $model->vSwitchIdsShrink = $map['VSwitchIds'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
