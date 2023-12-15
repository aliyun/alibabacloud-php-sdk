<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\ModifySecurityGroupConfigurationResponseBody\items;

use AlibabaCloud\Tea\Model;

class ecsSecurityGroupRelation extends Model
{
    /**
     * @description The network type of the ECS security group. Valid values:
     *
     *   **Classic**
     *   **VPC**
     *
     * @example VPC
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the ECS security group.
     *
     * @example sg-xxxxxxx
     *
     * @var string
     */
    public $securityGroupId;
    protected $_name = [
        'networkType'     => 'NetworkType',
        'regionId'        => 'RegionId',
        'securityGroupId' => 'SecurityGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
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
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
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
