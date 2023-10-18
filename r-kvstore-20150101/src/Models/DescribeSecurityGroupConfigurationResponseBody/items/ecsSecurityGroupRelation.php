<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeSecurityGroupConfigurationResponseBody\items;

use AlibabaCloud\Tea\Model;

class ecsSecurityGroupRelation extends Model
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
     * @description Queries the security groups that are included in the whitelist of an ApsaraDB for Redis instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The operation that you want to perform. Set the value to **DescribeSecurityGroupConfiguration**.
     *
     * @example sg-bp14p9y07ns3gwq****
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
     * @return ecsSecurityGroupRelation
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
