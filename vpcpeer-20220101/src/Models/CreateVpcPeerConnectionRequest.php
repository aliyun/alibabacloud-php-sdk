<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcPeer\V20220101\Models;

use AlibabaCloud\Tea\Model;

class CreateVpcPeerConnectionRequest extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account to which the accepter VPC belongs.
     *
     *   To create a VPC peering connection within your Alibaba Cloud account, enter the ID of your Alibaba Cloud account.
     *
     *   To create a VPC peering connection between your Alibaba Cloud account and another Alibaba Cloud account, enter the ID of the peer Alibaba Cloud account.
     *
     * > If the accepter VPC belongs to a Resource Access Management (RAM) user, you must set the value of **AcceptingAliUid** to the ID of the corresponding Alibaba Cloud account.
     * @example 1210123456123456
     *
     * @var int
     */
    public $acceptingAliUid;

    /**
     * @description The region ID of the accepter VPC of the VPC peering connection that you want to create.
     *
     *   To create an intra-region VPC peering connection, enter a region ID that is the same as that of the requester VPC.
     *   To create an inter-region VPC peering connection, enter a region ID that is different from that of the requester VPC.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $acceptingRegionId;

    /**
     * @description The ID of the accepter VPC.
     *
     * @example vpc-bp1vzjkp2q1xgnind****
     *
     * @var string
     */
    public $acceptingVpcId;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * >  If you do not specify this parameter, the system automatically uses the **client token** as the **request ID**. The **request ID** may be different for each request.
     * @example 02fb3da4-130e-11e9-8e44-001****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the VPC peering connection.
     *
     * The description must be 2 to 256 characters in length. The description must start with a letter but cannot start with `http://` or `https://`.
     * @example description
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request. Valid values:
     *
     *   **true**: performs only a dry run. The system checks the request for potential issues, including missing parameter values, incorrect request syntax, and service limits. If the request fails the dry run, an error message is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *   **false** (default): performs a dry run and performs the actual request. If the request passes the dry run, a 2xx HTTP status code is returned and the operation is performed.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The name of the VPC peering connection.
     *
     * The name must be 2 to 128 characters in length and can contain letters, digits, underscores (\_), and hyphens (-). It must start with a letter.
     * @example vpcpeer
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the region where you want to create a VPC peering connection.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * For more information about resource groups, see [What is a resource group?](~~94475~~)
     * @example rg-acfmxazb4ph6aiy****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the requester VPC.
     *
     * @example vpc-bp1gsk7h12ew7oegk****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'acceptingAliUid'   => 'AcceptingAliUid',
        'acceptingRegionId' => 'AcceptingRegionId',
        'acceptingVpcId'    => 'AcceptingVpcId',
        'bandwidth'         => 'Bandwidth',
        'clientToken'       => 'ClientToken',
        'description'       => 'Description',
        'dryRun'            => 'DryRun',
        'name'              => 'Name',
        'regionId'          => 'RegionId',
        'resourceGroupId'   => 'ResourceGroupId',
        'vpcId'             => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptingAliUid) {
            $res['AcceptingAliUid'] = $this->acceptingAliUid;
        }
        if (null !== $this->acceptingRegionId) {
            $res['AcceptingRegionId'] = $this->acceptingRegionId;
        }
        if (null !== $this->acceptingVpcId) {
            $res['AcceptingVpcId'] = $this->acceptingVpcId;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVpcPeerConnectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptingAliUid'])) {
            $model->acceptingAliUid = $map['AcceptingAliUid'];
        }
        if (isset($map['AcceptingRegionId'])) {
            $model->acceptingRegionId = $map['AcceptingRegionId'];
        }
        if (isset($map['AcceptingVpcId'])) {
            $model->acceptingVpcId = $map['AcceptingVpcId'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
