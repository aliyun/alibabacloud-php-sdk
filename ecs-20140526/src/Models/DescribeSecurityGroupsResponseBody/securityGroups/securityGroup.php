<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupsResponseBody\securityGroups;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupsResponseBody\securityGroups\securityGroup\tags;

class securityGroup extends Model
{
    /**
     * @var int
     */
    public $availableInstanceAmount;
    /**
     * @var string
     */
    public $creationTime;
    /**
     * @var string
     */
    public $description;
    /**
     * @var int
     */
    public $ecsCount;
    /**
     * @var int
     */
    public $groupToGroupRuleCount;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var int
     */
    public $ruleCount;
    /**
     * @var string
     */
    public $securityGroupId;
    /**
     * @var string
     */
    public $securityGroupName;
    /**
     * @var string
     */
    public $securityGroupType;
    /**
     * @var int
     */
    public $serviceID;
    /**
     * @var bool
     */
    public $serviceManaged;
    /**
     * @var tags
     */
    public $tags;
    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'availableInstanceAmount' => 'AvailableInstanceAmount',
        'creationTime'            => 'CreationTime',
        'description'             => 'Description',
        'ecsCount'                => 'EcsCount',
        'groupToGroupRuleCount'   => 'GroupToGroupRuleCount',
        'resourceGroupId'         => 'ResourceGroupId',
        'ruleCount'               => 'RuleCount',
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
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->groupToGroupRuleCount) {
            $res['GroupToGroupRuleCount'] = $this->groupToGroupRuleCount;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->ruleCount) {
            $res['RuleCount'] = $this->ruleCount;
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
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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

        if (isset($map['GroupToGroupRuleCount'])) {
            $model->groupToGroupRuleCount = $map['GroupToGroupRuleCount'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['RuleCount'])) {
            $model->ruleCount = $map['RuleCount'];
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
