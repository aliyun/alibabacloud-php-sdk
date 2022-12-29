<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeSecurityGroupConfigurationResponseBody\items;

use AlibabaCloud\Tea\Model;

class rdsEcsSecurityGroupRel extends Model
{
    /**
     * @description The network type of the ECS security group. Valid values:
     *
     *   **vpc**
     *   **classic**
     *
     * @example vpc
     *
     * @var string
     */
    public $netType;

    /**
     * @description The region ID of the ECS security group.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the ECS security group.
     *
     * @example sg-bpxxxxxxxx
     *
     * @var string
     */
    public $securityGroupId;
    protected $_name = [
        'netType'         => 'NetType',
        'regionId'        => 'RegionId',
        'securityGroupId' => 'SecurityGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rdsEcsSecurityGroupRel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        return $model;
    }
}
