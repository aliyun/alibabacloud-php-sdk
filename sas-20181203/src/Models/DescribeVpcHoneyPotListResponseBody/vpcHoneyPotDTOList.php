<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVpcHoneyPotListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVpcHoneyPotListResponseBody\vpcHoneyPotDTOList\vpcSwitchIdList;

class vpcHoneyPotDTOList extends Model
{
    /**
     * @var string
     */
    public $cidrBlock;
    /**
     * @var int
     */
    public $createTime;
    /**
     * @var string
     */
    public $honeyPotEcsInstanceStatus;
    /**
     * @var string
     */
    public $honeyPotEniInstanceId;
    /**
     * @var bool
     */
    public $honeyPotExistence;
    /**
     * @var string
     */
    public $honeyPotInstanceStatus;
    /**
     * @var string
     */
    public $honeyPotVpcSwitchId;
    /**
     * @var string
     */
    public $vpcId;
    /**
     * @var string
     */
    public $vpcName;
    /**
     * @var string
     */
    public $vpcRegionId;
    /**
     * @var string
     */
    public $vpcStatus;
    /**
     * @var vpcSwitchIdList[]
     */
    public $vpcSwitchIdList;
    protected $_name = [
        'cidrBlock'                 => 'CidrBlock',
        'createTime'                => 'CreateTime',
        'honeyPotEcsInstanceStatus' => 'HoneyPotEcsInstanceStatus',
        'honeyPotEniInstanceId'     => 'HoneyPotEniInstanceId',
        'honeyPotExistence'         => 'HoneyPotExistence',
        'honeyPotInstanceStatus'    => 'HoneyPotInstanceStatus',
        'honeyPotVpcSwitchId'       => 'HoneyPotVpcSwitchId',
        'vpcId'                     => 'VpcId',
        'vpcName'                   => 'VpcName',
        'vpcRegionId'               => 'VpcRegionId',
        'vpcStatus'                 => 'VpcStatus',
        'vpcSwitchIdList'           => 'VpcSwitchIdList',
    ];

    public function validate()
    {
        if (\is_array($this->vpcSwitchIdList)) {
            Model::validateArray($this->vpcSwitchIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->honeyPotEcsInstanceStatus) {
            $res['HoneyPotEcsInstanceStatus'] = $this->honeyPotEcsInstanceStatus;
        }

        if (null !== $this->honeyPotEniInstanceId) {
            $res['HoneyPotEniInstanceId'] = $this->honeyPotEniInstanceId;
        }

        if (null !== $this->honeyPotExistence) {
            $res['HoneyPotExistence'] = $this->honeyPotExistence;
        }

        if (null !== $this->honeyPotInstanceStatus) {
            $res['HoneyPotInstanceStatus'] = $this->honeyPotInstanceStatus;
        }

        if (null !== $this->honeyPotVpcSwitchId) {
            $res['HoneyPotVpcSwitchId'] = $this->honeyPotVpcSwitchId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vpcName) {
            $res['VpcName'] = $this->vpcName;
        }

        if (null !== $this->vpcRegionId) {
            $res['VpcRegionId'] = $this->vpcRegionId;
        }

        if (null !== $this->vpcStatus) {
            $res['VpcStatus'] = $this->vpcStatus;
        }

        if (null !== $this->vpcSwitchIdList) {
            if (\is_array($this->vpcSwitchIdList)) {
                $res['VpcSwitchIdList'] = [];
                $n1                     = 0;
                foreach ($this->vpcSwitchIdList as $item1) {
                    $res['VpcSwitchIdList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['HoneyPotEcsInstanceStatus'])) {
            $model->honeyPotEcsInstanceStatus = $map['HoneyPotEcsInstanceStatus'];
        }

        if (isset($map['HoneyPotEniInstanceId'])) {
            $model->honeyPotEniInstanceId = $map['HoneyPotEniInstanceId'];
        }

        if (isset($map['HoneyPotExistence'])) {
            $model->honeyPotExistence = $map['HoneyPotExistence'];
        }

        if (isset($map['HoneyPotInstanceStatus'])) {
            $model->honeyPotInstanceStatus = $map['HoneyPotInstanceStatus'];
        }

        if (isset($map['HoneyPotVpcSwitchId'])) {
            $model->honeyPotVpcSwitchId = $map['HoneyPotVpcSwitchId'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['VpcName'])) {
            $model->vpcName = $map['VpcName'];
        }

        if (isset($map['VpcRegionId'])) {
            $model->vpcRegionId = $map['VpcRegionId'];
        }

        if (isset($map['VpcStatus'])) {
            $model->vpcStatus = $map['VpcStatus'];
        }

        if (isset($map['VpcSwitchIdList'])) {
            if (!empty($map['VpcSwitchIdList'])) {
                $model->vpcSwitchIdList = [];
                $n1                     = 0;
                foreach ($map['VpcSwitchIdList'] as $item1) {
                    $model->vpcSwitchIdList[$n1++] = vpcSwitchIdList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
