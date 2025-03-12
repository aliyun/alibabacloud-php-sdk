<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVpcListResponseBody;

use AlibabaCloud\Tea\Model;

class vpcList extends Model
{
    /**
     * @description The number of Elastic Compute Service (ECS) instances.
     *
     * @example 9
     *
     * @var int
     */
    public $ecsCount;

    /**
     * @description The information about the virtual private cloud (VPC).
     *
     * @example TestVpcNote
     *
     * @var string
     */
    public $instanceDesc;

    /**
     * @description The ID of the ECS instance.
     *
     * @example ins_1321_asedb_ada
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the VPC.
     *
     * @example test
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The region in which the server resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'ecsCount'     => 'EcsCount',
        'instanceDesc' => 'InstanceDesc',
        'instanceId'   => 'InstanceId',
        'instanceName' => 'InstanceName',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecsCount) {
            $res['EcsCount'] = $this->ecsCount;
        }
        if (null !== $this->instanceDesc) {
            $res['InstanceDesc'] = $this->instanceDesc;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpcList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcsCount'])) {
            $model->ecsCount = $map['EcsCount'];
        }
        if (isset($map['InstanceDesc'])) {
            $model->instanceDesc = $map['InstanceDesc'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
