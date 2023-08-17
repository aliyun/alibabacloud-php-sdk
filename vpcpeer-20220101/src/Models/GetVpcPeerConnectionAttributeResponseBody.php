<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcPeer\V20220101\Models;

use AlibabaCloud\SDK\VpcPeer\V20220101\Models\GetVpcPeerConnectionAttributeResponseBody\acceptingVpc;
use AlibabaCloud\SDK\VpcPeer\V20220101\Models\GetVpcPeerConnectionAttributeResponseBody\tags;
use AlibabaCloud\SDK\VpcPeer\V20220101\Models\GetVpcPeerConnectionAttributeResponseBody\vpc;
use AlibabaCloud\Tea\Model;

class GetVpcPeerConnectionAttributeResponseBody extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account to which the accepter VPC belongs.
     *
     * @example 283117732402483989
     *
     * @var int
     */
    public $acceptingOwnerUid;

    /**
     * @description The region ID of the accepter VPC.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $acceptingRegionId;

    /**
     * @description The details of the accepter VPC.
     *
     * @var acceptingVpc
     */
    public $acceptingVpc;

    /**
     * @description The bandwidth of the VPC peering connection. Unit: Mbit/s. The value must be an integer greater than 0.
     *
     * >  If the value is set to **-1**, it indicates that no limit is imposed on the bandwidth.
     *
     * Default value:
     *
     *   The default bandwidth of an inter-region VPC peering connection is **1024** Mbit/s.
     *   The default bandwidth of an intra-region VPC peering connection is **-1** Mbit/s.
     *
     * @example 1024
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The business status of the VPC peering connection. Valid values:
     *
     *   **Normal**
     *   **FinancialLocked**
     *
     * @example Normal
     *
     * @var string
     */
    public $bizStatus;

    /**
     * @description The description of the VPC peering connection.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the VPC peering connection was created. The time is displayed in the `YYYY-MM-DDThh:mm:ssZ` format in UTC.
     *
     * @example 2022-04-24T09:02:36Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The expiration time of the VPC peering connection.
     *
     * The expiration time is returned only when the **Status** of the VPC peering connection is **Accepting** or **Expired**. Otherwise, **null** is returned.
     * @example 2022-05-01T09:02:36Z
     *
     * @var string
     */
    public $gmtExpired;

    /**
     * @description The time when the VPC peering connection was modified. The time is displayed in the `YYYY-MM-DDThh:mm:ssZ` format in UTC.
     *
     * @example 2022-04-24T19:20:45Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the VPC peering connection.
     *
     * @example pcc-lnk0m24khwvtkm****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the VPC peering connection.
     *
     * @example vpcpeer
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the Alibaba Cloud account to which the requester VPC belongs.
     *
     * @example 253460731706911258
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the requester VPC.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The request ID.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3AC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmz7hy5z267ni
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The status of the VPC peering connection. Valid values:
     *
     *   **Creating**
     *   **Accepting**
     *   **Updating**
     *   **Rejected**
     *   **Expired**
     *   **Activated**
     *   **Deleting**
     *   **Deleted**
     *
     * For more information about the status of VPC peering connections, see [Overview of VPC peering connections](~~418507~~).
     * @example Activated
     *
     * @var string
     */
    public $status;

    /**
     * @description The tag list.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The details of the requester VPC.
     *
     * @var vpc
     */
    public $vpc;
    protected $_name = [
        'acceptingOwnerUid' => 'AcceptingOwnerUid',
        'acceptingRegionId' => 'AcceptingRegionId',
        'acceptingVpc'      => 'AcceptingVpc',
        'bandwidth'         => 'Bandwidth',
        'bizStatus'         => 'BizStatus',
        'description'       => 'Description',
        'gmtCreate'         => 'GmtCreate',
        'gmtExpired'        => 'GmtExpired',
        'gmtModified'       => 'GmtModified',
        'instanceId'        => 'InstanceId',
        'name'              => 'Name',
        'ownerId'           => 'OwnerId',
        'regionId'          => 'RegionId',
        'requestId'         => 'RequestId',
        'resourceGroupId'   => 'ResourceGroupId',
        'status'            => 'Status',
        'tags'              => 'Tags',
        'vpc'               => 'Vpc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptingOwnerUid) {
            $res['AcceptingOwnerUid'] = $this->acceptingOwnerUid;
        }
        if (null !== $this->acceptingRegionId) {
            $res['AcceptingRegionId'] = $this->acceptingRegionId;
        }
        if (null !== $this->acceptingVpc) {
            $res['AcceptingVpc'] = null !== $this->acceptingVpc ? $this->acceptingVpc->toMap() : null;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->bizStatus) {
            $res['BizStatus'] = $this->bizStatus;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtExpired) {
            $res['GmtExpired'] = $this->gmtExpired;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vpc) {
            $res['Vpc'] = null !== $this->vpc ? $this->vpc->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVpcPeerConnectionAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptingOwnerUid'])) {
            $model->acceptingOwnerUid = $map['AcceptingOwnerUid'];
        }
        if (isset($map['AcceptingRegionId'])) {
            $model->acceptingRegionId = $map['AcceptingRegionId'];
        }
        if (isset($map['AcceptingVpc'])) {
            $model->acceptingVpc = acceptingVpc::fromMap($map['AcceptingVpc']);
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['BizStatus'])) {
            $model->bizStatus = $map['BizStatus'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtExpired'])) {
            $model->gmtExpired = $map['GmtExpired'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Vpc'])) {
            $model->vpc = vpc::fromMap($map['Vpc']);
        }

        return $model;
    }
}
