<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class RevokeInstanceFromVbrRequest extends Model
{
    /**
     * @description The VBRs for which you want to revoke permissions on the VPC. Valid values:
     *
     *   **ALL**: Permissions on the VPC are revoked for all VBRs in the specified region. **VbrInstanceIds** can be left empty.
     *   **Specify**: Permissions on the VPC are revoked for the specified VBRs. **VbrInstanceIds** must be assigned a value.
     *
     * This parameter is required.
     * @example ALL
     *
     * @var string
     */
    public $grantType;

    /**
     * @description The VPC ID.
     *
     * This parameter is required.
     * @example vpc-bp1brjuegjc88v3u9****
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
     * @description The IDs of the VBRs for which you want to revoke the permissions.
     *
     * @var string[]
     */
    public $vbrInstanceIds;

    /**
     * @description The ID of the Alibaba Cloud account to which the VBR belongs.
     *
     * This parameter is required.
     * @example 1210123456123456
     *
     * @var string
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
        'grantType'      => 'GrantType',
        'instanceId'     => 'InstanceId',
        'regionId'       => 'RegionId',
        'vbrInstanceIds' => 'VbrInstanceIds',
        'vbrOwnerUid'    => 'VbrOwnerUid',
        'vbrRegionNo'    => 'VbrRegionNo',
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
        if (null !== $this->vbrInstanceIds) {
            $res['VbrInstanceIds'] = $this->vbrInstanceIds;
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
     * @return RevokeInstanceFromVbrRequest
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
            if (!empty($map['VbrInstanceIds'])) {
                $model->vbrInstanceIds = $map['VbrInstanceIds'];
            }
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
