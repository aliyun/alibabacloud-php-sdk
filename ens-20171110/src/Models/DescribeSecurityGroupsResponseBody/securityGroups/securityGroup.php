<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSecurityGroupsResponseBody\securityGroups;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSecurityGroupsResponseBody\securityGroups\securityGroup\instanceIds;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSecurityGroupsResponseBody\securityGroups\securityGroup\networkInterfaceIds;

class securityGroup extends Model
{
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
    public $instanceCount;

    /**
     * @var instanceIds
     */
    public $instanceIds;

    /**
     * @var networkInterfaceIds
     */
    public $networkInterfaceIds;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $securityGroupName;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'instanceCount' => 'InstanceCount',
        'instanceIds' => 'InstanceIds',
        'networkInterfaceIds' => 'NetworkInterfaceIds',
        'securityGroupId' => 'SecurityGroupId',
        'securityGroupName' => 'SecurityGroupName',
    ];

    public function validate()
    {
        if (null !== $this->instanceIds) {
            $this->instanceIds->validate();
        }
        if (null !== $this->networkInterfaceIds) {
            $this->networkInterfaceIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }

        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = null !== $this->instanceIds ? $this->instanceIds->toArray($noStream) : $this->instanceIds;
        }

        if (null !== $this->networkInterfaceIds) {
            $res['NetworkInterfaceIds'] = null !== $this->networkInterfaceIds ? $this->networkInterfaceIds->toArray($noStream) : $this->networkInterfaceIds;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->securityGroupName) {
            $res['SecurityGroupName'] = $this->securityGroupName;
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }

        if (isset($map['InstanceIds'])) {
            $model->instanceIds = instanceIds::fromMap($map['InstanceIds']);
        }

        if (isset($map['NetworkInterfaceIds'])) {
            $model->networkInterfaceIds = networkInterfaceIds::fromMap($map['NetworkInterfaceIds']);
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        if (isset($map['SecurityGroupName'])) {
            $model->securityGroupName = $map['SecurityGroupName'];
        }

        return $model;
    }
}
