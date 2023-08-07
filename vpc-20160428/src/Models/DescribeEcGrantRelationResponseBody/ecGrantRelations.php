<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEcGrantRelationResponseBody;

use AlibabaCloud\Tea\Model;

class ecGrantRelations extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account to which the VPC belongs.
     *
     * @example 1250123456123456
     *
     * @var int
     */
    public $aliUid;

    /**
     * @description The time when permissions on the VPC were granted to the VBR.
     *
     * @example 2022-09-02T11:46Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The VBRs that have permissions on the VPC. Valid values:
     *
     *   **All**: VBRs that reside in the specified region and belong to the specified Alibaba Cloud account all have permissions on the VPC.
     *   **Specify**: Only the specified VBR has permissions on the VPC.
     *
     * @example All
     *
     * @var string
     */
    public $grantType;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-bp1brjuegjc88v3u9****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the VPC.
     *
     * @example VPCname
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The ID of the vRouter.
     *
     * @example vrt-bp1i0yzgjd8ra05ec****
     *
     * @var string
     */
    public $instanceRouterId;

    /**
     * @description The ID of the region where the VPC is deployed.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionNo;

    /**
     * @description The query result. Valid values:
     *
     *   **Created**: The VBR has permissions on the VPC.
     *   **Deleted**: The VBR does not have permissions on the VPC.
     *
     * @example Created
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the VBR.
     *
     * @example vbr-m5ex0xf63xk8s5bob****
     *
     * @var string
     */
    public $vbrInstanceId;

    /**
     * @description The ID of the Alibaba Cloud account to which the VBR belongs.
     *
     * @example 1210123456123456
     *
     * @var int
     */
    public $vbrOwnerUid;

    /**
     * @description The ID of the region where the VBR is deployed.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $vbrRegionNo;
    protected $_name = [
        'aliUid'           => 'AliUid',
        'gmtCreate'        => 'GmtCreate',
        'grantType'        => 'GrantType',
        'instanceId'       => 'InstanceId',
        'instanceName'     => 'InstanceName',
        'instanceRouterId' => 'InstanceRouterId',
        'regionNo'         => 'RegionNo',
        'status'           => 'Status',
        'vbrInstanceId'    => 'VbrInstanceId',
        'vbrOwnerUid'      => 'VbrOwnerUid',
        'vbrRegionNo'      => 'VbrRegionNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->grantType) {
            $res['GrantType'] = $this->grantType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceRouterId) {
            $res['InstanceRouterId'] = $this->instanceRouterId;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vbrInstanceId) {
            $res['VbrInstanceId'] = $this->vbrInstanceId;
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
     * @return ecGrantRelations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GrantType'])) {
            $model->grantType = $map['GrantType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceRouterId'])) {
            $model->instanceRouterId = $map['InstanceRouterId'];
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VbrInstanceId'])) {
            $model->vbrInstanceId = $map['VbrInstanceId'];
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
