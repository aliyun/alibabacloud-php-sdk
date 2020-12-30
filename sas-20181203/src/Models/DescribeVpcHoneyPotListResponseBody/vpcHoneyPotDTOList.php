<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVpcHoneyPotListResponseBody;

use AlibabaCloud\Tea\Model;

class vpcHoneyPotDTOList extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vpcStatus;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var bool
     */
    public $honeyPotExistence;

    /**
     * @var string
     */
    public $vpcRegionId;

    /**
     * @var string
     */
    public $honeyPotInstanceStatus;

    /**
     * @var string
     */
    public $honeyPotVSwitchId;

    /**
     * @var string[]
     */
    public $vpcSwitchIdList;

    /**
     * @var string
     */
    public $vpcName;

    /**
     * @var string
     */
    public $honeyPotEniInstanceId;

    /**
     * @var string
     */
    public $cidrBlock;

    /**
     * @var string
     */
    public $honeyPotEcsInstanceStatus;
    protected $_name = [
        'vpcId'                     => 'VpcId',
        'vpcStatus'                 => 'VpcStatus',
        'createTime'                => 'CreateTime',
        'honeyPotExistence'         => 'HoneyPotExistence',
        'vpcRegionId'               => 'VpcRegionId',
        'honeyPotInstanceStatus'    => 'HoneyPotInstanceStatus',
        'honeyPotVSwitchId'         => 'HoneyPotVSwitchId',
        'vpcSwitchIdList'           => 'VpcSwitchIdList',
        'vpcName'                   => 'VpcName',
        'honeyPotEniInstanceId'     => 'HoneyPotEniInstanceId',
        'cidrBlock'                 => 'CidrBlock',
        'honeyPotEcsInstanceStatus' => 'HoneyPotEcsInstanceStatus',
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
        if (null !== $this->vpcStatus) {
            $res['VpcStatus'] = $this->vpcStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->honeyPotExistence) {
            $res['HoneyPotExistence'] = $this->honeyPotExistence;
        }
        if (null !== $this->vpcRegionId) {
            $res['VpcRegionId'] = $this->vpcRegionId;
        }
        if (null !== $this->honeyPotInstanceStatus) {
            $res['HoneyPotInstanceStatus'] = $this->honeyPotInstanceStatus;
        }
        if (null !== $this->honeyPotVSwitchId) {
            $res['HoneyPotVSwitchId'] = $this->honeyPotVSwitchId;
        }
        if (null !== $this->vpcSwitchIdList) {
            $res['VpcSwitchIdList'] = $this->vpcSwitchIdList;
        }
        if (null !== $this->vpcName) {
            $res['VpcName'] = $this->vpcName;
        }
        if (null !== $this->honeyPotEniInstanceId) {
            $res['HoneyPotEniInstanceId'] = $this->honeyPotEniInstanceId;
        }
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->honeyPotEcsInstanceStatus) {
            $res['HoneyPotEcsInstanceStatus'] = $this->honeyPotEcsInstanceStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpcHoneyPotDTOList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcStatus'])) {
            $model->vpcStatus = $map['VpcStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['HoneyPotExistence'])) {
            $model->honeyPotExistence = $map['HoneyPotExistence'];
        }
        if (isset($map['VpcRegionId'])) {
            $model->vpcRegionId = $map['VpcRegionId'];
        }
        if (isset($map['HoneyPotInstanceStatus'])) {
            $model->honeyPotInstanceStatus = $map['HoneyPotInstanceStatus'];
        }
        if (isset($map['HoneyPotVSwitchId'])) {
            $model->honeyPotVSwitchId = $map['HoneyPotVSwitchId'];
        }
        if (isset($map['VpcSwitchIdList'])) {
            if (!empty($map['VpcSwitchIdList'])) {
                $model->vpcSwitchIdList = $map['VpcSwitchIdList'];
            }
        }
        if (isset($map['VpcName'])) {
            $model->vpcName = $map['VpcName'];
        }
        if (isset($map['HoneyPotEniInstanceId'])) {
            $model->honeyPotEniInstanceId = $map['HoneyPotEniInstanceId'];
        }
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['HoneyPotEcsInstanceStatus'])) {
            $model->honeyPotEcsInstanceStatus = $map['HoneyPotEcsInstanceStatus'];
        }

        return $model;
    }
}
