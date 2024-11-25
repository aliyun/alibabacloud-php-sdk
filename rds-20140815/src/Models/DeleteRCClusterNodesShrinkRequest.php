<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DeleteRCClusterNodesShrinkRequest extends Model
{
    /**
     * @description The instance IDs.
     *
     * @var string
     */
    public $instanceIdsShrink;

    /**
     * @description The node information.
     *
     * @var string
     */
    public $nodesShrink;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The virtual private cloud (VPC) ID.
     *
     * >  This is a reserved parameter.
     * @example None
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'instanceIdsShrink' => 'InstanceIds',
        'nodesShrink'       => 'Nodes',
        'regionId'          => 'RegionId',
        'vpcId'             => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIdsShrink) {
            $res['InstanceIds'] = $this->instanceIdsShrink;
        }
        if (null !== $this->nodesShrink) {
            $res['Nodes'] = $this->nodesShrink;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteRCClusterNodesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceIds'])) {
            $model->instanceIdsShrink = $map['InstanceIds'];
        }
        if (isset($map['Nodes'])) {
            $model->nodesShrink = $map['Nodes'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
