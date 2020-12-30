<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeSecurityGroupAttributeResponseBody\availableGroupList;

use AlibabaCloud\Tea\Model;

class securityGroup extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $securityGroupName;

    /**
     * @var int
     */
    public $ecsCount;

    /**
     * @var int
     */
    public $availableInstanceAmount;
    protected $_name = [
        'vpcId'                   => 'VpcId',
        'creationTime'            => 'CreationTime',
        'description'             => 'Description',
        'securityGroupId'         => 'SecurityGroupId',
        'securityGroupName'       => 'SecurityGroupName',
        'ecsCount'                => 'EcsCount',
        'availableInstanceAmount' => 'AvailableInstanceAmount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->securityGroupName) {
            $res['SecurityGroupName'] = $this->securityGroupName;
        }
        if (null !== $this->ecsCount) {
            $res['EcsCount'] = $this->ecsCount;
        }
        if (null !== $this->availableInstanceAmount) {
            $res['AvailableInstanceAmount'] = $this->availableInstanceAmount;
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
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['SecurityGroupName'])) {
            $model->securityGroupName = $map['SecurityGroupName'];
        }
        if (isset($map['EcsCount'])) {
            $model->ecsCount = $map['EcsCount'];
        }
        if (isset($map['AvailableInstanceAmount'])) {
            $model->availableInstanceAmount = $map['AvailableInstanceAmount'];
        }

        return $model;
    }
}
