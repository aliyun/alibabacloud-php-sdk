<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupsResponseBody\securityGroups;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupsResponseBody\securityGroups\securityGroup\tags;
use AlibabaCloud\Tea\Model;

class securityGroup extends Model
{
    /**
     * @description > This parameter is in invitational preview and unavailable for general users.
     *
     * @example 0
     *
     * @var int
     */
    public $availableInstanceAmount;

    /**
     * @description The time when the security group was created. The time follows the [ISO 8601](~~25696~~) standard in the yyyy-MM-ddThh:mmZ format. The time is displayed in UTC.
     *
     * @example 2021-08-31T03:12:29Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the security group.
     *
     * @example TestDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description > This parameter is in invitational preview and unavailable for general users.
     *
     * @example 0
     *
     * @var int
     */
    public $ecsCount;

    /**
     * @description The ID of the resource group to which the security group belongs.
     *
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the security group.
     *
     * @example sg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The name of the security group.
     *
     * @example SGTestName
     *
     * @var string
     */
    public $securityGroupName;

    /**
     * @description The type of the security group. Valid values:
     *
     *   normal: basic security group
     *   enterprise: advanced security group
     *
     * @example normal
     *
     * @var string
     */
    public $securityGroupType;

    /**
     * @description The ID of the distributor to which the security group belongs.
     *
     * @example 12345678910
     *
     * @var int
     */
    public $serviceID;

    /**
     * @description Indicates whether the user of the security group is an Alibaba Cloud service or a distributor.
     *
     * @example false
     *
     * @var bool
     */
    public $serviceManaged;

    /**
     * @description The tags of the security groups.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The ID of the VPC to which the security group belongs.
     *
     * @example vpc-bp67acfmxazb4p****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'availableInstanceAmount' => 'AvailableInstanceAmount',
        'creationTime'            => 'CreationTime',
        'description'             => 'Description',
        'ecsCount'                => 'EcsCount',
        'resourceGroupId'         => 'ResourceGroupId',
        'securityGroupId'         => 'SecurityGroupId',
        'securityGroupName'       => 'SecurityGroupName',
        'securityGroupType'       => 'SecurityGroupType',
        'serviceID'               => 'ServiceID',
        'serviceManaged'          => 'ServiceManaged',
        'tags'                    => 'Tags',
        'vpcId'                   => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableInstanceAmount) {
            $res['AvailableInstanceAmount'] = $this->availableInstanceAmount;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ecsCount) {
            $res['EcsCount'] = $this->ecsCount;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->securityGroupName) {
            $res['SecurityGroupName'] = $this->securityGroupName;
        }
        if (null !== $this->securityGroupType) {
            $res['SecurityGroupType'] = $this->securityGroupType;
        }
        if (null !== $this->serviceID) {
            $res['ServiceID'] = $this->serviceID;
        }
        if (null !== $this->serviceManaged) {
            $res['ServiceManaged'] = $this->serviceManaged;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableInstanceAmount'])) {
            $model->availableInstanceAmount = $map['AvailableInstanceAmount'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EcsCount'])) {
            $model->ecsCount = $map['EcsCount'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['SecurityGroupName'])) {
            $model->securityGroupName = $map['SecurityGroupName'];
        }
        if (isset($map['SecurityGroupType'])) {
            $model->securityGroupType = $map['SecurityGroupType'];
        }
        if (isset($map['ServiceID'])) {
            $model->serviceID = $map['ServiceID'];
        }
        if (isset($map['ServiceManaged'])) {
            $model->serviceManaged = $map['ServiceManaged'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
