<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVpcsResponseBody\vpcs;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVpcsResponseBody\vpcs\vpc\userCidrs;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVpcsResponseBody\vpcs\vpc\vSwitchIds;

class vpc extends Model
{
    /**
     * @var string
     */
    public $cidrBlock;
    /**
     * @var string
     */
    public $creationTime;
    /**
     * @var string
     */
    public $description;
    /**
     * @var bool
     */
    public $isDefault;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $status;
    /**
     * @var userCidrs
     */
    public $userCidrs;
    /**
     * @var string
     */
    public $VRouterId;
    /**
     * @var vSwitchIds
     */
    public $vSwitchIds;
    /**
     * @var string
     */
    public $vpcId;
    /**
     * @var string
     */
    public $vpcName;
    protected $_name = [
        'cidrBlock'    => 'CidrBlock',
        'creationTime' => 'CreationTime',
        'description'  => 'Description',
        'isDefault'    => 'IsDefault',
        'regionId'     => 'RegionId',
        'status'       => 'Status',
        'userCidrs'    => 'UserCidrs',
        'VRouterId'    => 'VRouterId',
        'vSwitchIds'   => 'VSwitchIds',
        'vpcId'        => 'VpcId',
        'vpcName'      => 'VpcName',
    ];

    public function validate()
    {
        if (null !== $this->userCidrs) {
            $this->userCidrs->validate();
        }
        if (null !== $this->vSwitchIds) {
            $this->vSwitchIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->userCidrs) {
            $res['UserCidrs'] = null !== $this->userCidrs ? $this->userCidrs->toArray($noStream) : $this->userCidrs;
        }

        if (null !== $this->VRouterId) {
            $res['VRouterId'] = $this->VRouterId;
        }

        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = null !== $this->vSwitchIds ? $this->vSwitchIds->toArray($noStream) : $this->vSwitchIds;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vpcName) {
            $res['VpcName'] = $this->vpcName;
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
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UserCidrs'])) {
            $model->userCidrs = userCidrs::fromMap($map['UserCidrs']);
        }

        if (isset($map['VRouterId'])) {
            $model->VRouterId = $map['VRouterId'];
        }

        if (isset($map['VSwitchIds'])) {
            $model->vSwitchIds = vSwitchIds::fromMap($map['VSwitchIds']);
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['VpcName'])) {
            $model->vpcName = $map['VpcName'];
        }

        return $model;
    }
}
