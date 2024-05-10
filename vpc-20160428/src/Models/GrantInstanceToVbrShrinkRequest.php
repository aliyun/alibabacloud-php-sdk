<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class GrantInstanceToVbrShrinkRequest extends Model
{
    /**
     * @description The VBRs that need to acquire permissions on the VPC. Valid values:
     *
     *   **All**: Permissions on the VPC are granted to all VBRs that belong to the specified region and Alibaba Cloud account. In this case, you can leave **VbrInstanceIds** empty.
     *   **Specify**: Permissions on the VPC are granted to the specified VBRs. **VbrInstanceIds** must be assigned a value.
     *
     * This parameter is required.
     * @example All
     *
     * @var string
     */
    public $grantType;

    /**
     * @description The ID of the VPC.
     *
     * This parameter is required.
     * @example vpc-bp1lqhq93q8evjpky****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the region where the VPC is deployed.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The information about the VBRs.
     *
     * @var string
     */
    public $vbrInstanceIdsShrink;

    /**
     * @description The ID of the Alibaba Cloud account to which the VBR belongs.
     *
     * This parameter is required.
     * @example 1210123456123456
     *
     * @var int
     */
    public $vbrOwnerUid;

    /**
     * @description The ID of the region where the VBR is deployed.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $vbrRegionNo;
    protected $_name = [
        'grantType'            => 'GrantType',
        'instanceId'           => 'InstanceId',
        'regionId'             => 'RegionId',
        'vbrInstanceIdsShrink' => 'VbrInstanceIds',
        'vbrOwnerUid'          => 'VbrOwnerUid',
        'vbrRegionNo'          => 'VbrRegionNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->grantType) {
            $res['GrantType'] = $this->grantType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vbrInstanceIdsShrink) {
            $res['VbrInstanceIds'] = $this->vbrInstanceIdsShrink;
        }
        if (null !== $this->vbrOwnerUid) {
            $res['VbrOwnerUid'] = $this->vbrOwnerUid;
        }
        if (null !== $this->vbrRegionNo) {
            $res['VbrRegionNo'] = $this->vbrRegionNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GrantInstanceToVbrShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GrantType'])) {
            $model->grantType = $map['GrantType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VbrInstanceIds'])) {
            $model->vbrInstanceIdsShrink = $map['VbrInstanceIds'];
        }
        if (isset($map['VbrOwnerUid'])) {
            $model->vbrOwnerUid = $map['VbrOwnerUid'];
        }
        if (isset($map['VbrRegionNo'])) {
            $model->vbrRegionNo = $map['VbrRegionNo'];
        }

        return $model;
    }
}
