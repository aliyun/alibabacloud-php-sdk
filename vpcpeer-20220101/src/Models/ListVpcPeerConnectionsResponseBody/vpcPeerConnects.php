<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcPeer\V20220101\Models\ListVpcPeerConnectionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\VpcPeer\V20220101\Models\ListVpcPeerConnectionsResponseBody\vpcPeerConnects\acceptingVpc;
use AlibabaCloud\SDK\VpcPeer\V20220101\Models\ListVpcPeerConnectionsResponseBody\vpcPeerConnects\tags;
use AlibabaCloud\SDK\VpcPeer\V20220101\Models\ListVpcPeerConnectionsResponseBody\vpcPeerConnects\vpc;

class vpcPeerConnects extends Model
{
    /**
     * @var int
     */
    public $acceptingOwnerUid;

    /**
     * @var string
     */
    public $acceptingRegionId;

    /**
     * @var acceptingVpc
     */
    public $acceptingVpc;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $bizStatus;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtExpired;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $linkType;

    /**
     * @var string
     */
    public $managedService;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var vpc
     */
    public $vpc;
    protected $_name = [
        'acceptingOwnerUid' => 'AcceptingOwnerUid',
        'acceptingRegionId' => 'AcceptingRegionId',
        'acceptingVpc' => 'AcceptingVpc',
        'bandwidth' => 'Bandwidth',
        'bizStatus' => 'BizStatus',
        'description' => 'Description',
        'gmtCreate' => 'GmtCreate',
        'gmtExpired' => 'GmtExpired',
        'gmtModified' => 'GmtModified',
        'instanceId' => 'InstanceId',
        'linkType' => 'LinkType',
        'managedService' => 'ManagedService',
        'name' => 'Name',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'status' => 'Status',
        'tags' => 'Tags',
        'vpc' => 'Vpc',
    ];

    public function validate()
    {
        if (null !== $this->acceptingVpc) {
            $this->acceptingVpc->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (null !== $this->vpc) {
            $this->vpc->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptingOwnerUid) {
            $res['AcceptingOwnerUid'] = $this->acceptingOwnerUid;
        }

        if (null !== $this->acceptingRegionId) {
            $res['AcceptingRegionId'] = $this->acceptingRegionId;
        }

        if (null !== $this->acceptingVpc) {
            $res['AcceptingVpc'] = null !== $this->acceptingVpc ? $this->acceptingVpc->toArray($noStream) : $this->acceptingVpc;
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

        if (null !== $this->linkType) {
            $res['LinkType'] = $this->linkType;
        }

        if (null !== $this->managedService) {
            $res['ManagedService'] = $this->managedService;
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

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vpc) {
            $res['Vpc'] = null !== $this->vpc ? $this->vpc->toArray($noStream) : $this->vpc;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['LinkType'])) {
            $model->linkType = $map['LinkType'];
        }

        if (isset($map['ManagedService'])) {
            $model->managedService = $map['ManagedService'];
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

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Vpc'])) {
            $model->vpc = vpc::fromMap($map['Vpc']);
        }

        return $model;
    }
}
