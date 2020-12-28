<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupsResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupsResponseBody\securityGroups\tags;
use AlibabaCloud\Tea\Model;

class securityGroups extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var int
     */
    public $serviceID;

    /**
     * @var bool
     */
    public $serviceManaged;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $securityGroupName;

    /**
     * @var int
     */
    public $ecsCount;

    /**
     * @var string
     */
    public $securityGroupType;

    /**
     * @var int
     */
    public $availableInstanceAmount;
    protected $_name = [
        'creationTime'            => 'CreationTime',
        'vpcId'                   => 'VpcId',
        'securityGroupId'         => 'SecurityGroupId',
        'tags'                    => 'Tags',
        'serviceID'               => 'ServiceID',
        'serviceManaged'          => 'ServiceManaged',
        'description'             => 'Description',
        'resourceGroupId'         => 'ResourceGroupId',
        'securityGroupName'       => 'SecurityGroupName',
        'ecsCount'                => 'EcsCount',
        'securityGroupType'       => 'SecurityGroupType',
        'availableInstanceAmount' => 'AvailableInstanceAmount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
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
        if (null !== $this->serviceID) {
            $res['ServiceID'] = $this->serviceID;
        }
        if (null !== $this->serviceManaged) {
            $res['ServiceManaged'] = $this->serviceManaged;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->securityGroupName) {
            $res['SecurityGroupName'] = $this->securityGroupName;
        }
        if (null !== $this->ecsCount) {
            $res['EcsCount'] = $this->ecsCount;
        }
        if (null !== $this->securityGroupType) {
            $res['SecurityGroupType'] = $this->securityGroupType;
        }
        if (null !== $this->availableInstanceAmount) {
            $res['AvailableInstanceAmount'] = $this->availableInstanceAmount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
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
        if (isset($map['ServiceID'])) {
            $model->serviceID = $map['ServiceID'];
        }
        if (isset($map['ServiceManaged'])) {
            $model->serviceManaged = $map['ServiceManaged'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecurityGroupName'])) {
            $model->securityGroupName = $map['SecurityGroupName'];
        }
        if (isset($map['EcsCount'])) {
            $model->ecsCount = $map['EcsCount'];
        }
        if (isset($map['SecurityGroupType'])) {
            $model->securityGroupType = $map['SecurityGroupType'];
        }
        if (isset($map['AvailableInstanceAmount'])) {
            $model->availableInstanceAmount = $map['AvailableInstanceAmount'];
        }

        return $model;
    }
}
