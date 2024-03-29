<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSecurityGroupsResponseBody\securityGroups;

use AlibabaCloud\Tea\Model;

class securityGroup extends Model
{
    /**
     * @description The time when the security group was created. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mmZ format. The time is displayed in UTC. The format is yyyy-MM-ddThh:mmZ.
     *
     * @example 2019-11-01T06:08:46Z
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
     * @description The number of associated instances.
     *
     * @example 5
     *
     * @var int
     */
    public $instanceCount;

    /**
     * @description The ID of the security group.
     *
     * @example sg-bp67acfmxazb4ph***
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The name of the security group.
     *
     * @example DocTest
     *
     * @var string
     */
    public $securityGroupName;
    protected $_name = [
        'creationTime'      => 'CreationTime',
        'description'       => 'Description',
        'instanceCount'     => 'InstanceCount',
        'securityGroupId'   => 'SecurityGroupId',
        'securityGroupName' => 'SecurityGroupName',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->securityGroupName) {
            $res['SecurityGroupName'] = $this->securityGroupName;
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
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
