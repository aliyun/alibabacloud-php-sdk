<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVpcHoneyPotListResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVpcHoneyPotListResponseBody\vpcHoneyPotDTOList\vpcSwitchIdList;
use AlibabaCloud\Tea\Model;

class vpcHoneyPotDTOList extends Model
{
    /**
     * @description The CIDR block of the VPC.
     *
     * @example 192.168.XX.XX/16
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @description The time at which the VPC was created. Unit: milliseconds.
     *
     * @example 1607365213000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The status of the server on which the honeypot is deployed. Valid values:
     *
     *   **Pending**: The server is being created.
     *   **Running**: The server is running.
     *   **Starting**: The server is being started.
     *   **Stopping**: The server is being stopped.
     *   **Stopped**: The server is stopped.
     *
     * @example Running
     *
     * @var string
     */
    public $honeyPotEcsInstanceStatus;

    /**
     * @description The ID of the elastic network interface (ENI) used by the honeypot in the VPC.
     *
     * @example eni-p0whwgg7bing8b80****
     *
     * @var string
     */
    public $honeyPotEniInstanceId;

    /**
     * @description Indicates whether the cloud honeypot feature is enabled for the VPC. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $honeyPotExistence;

    /**
     * @description The status of the honeypot. Valid values:
     *
     *   **pending**: The honeypot is being created.
     *   **deleting**: The honeypot is being deleted.
     *   **off**: The honeypot is disabled.
     *   **suspending**: The honeypot is suspended.
     *   **on**: The honeypot is enabled.
     *
     * @example on
     *
     * @var string
     */
    public $honeyPotInstanceStatus;

    /**
     * @description The ID of the vSwitch to which the ENI used by the honeypot is connected.
     *
     * @example vsw-p0w7gdcfvn20tvdul****
     *
     * @var string
     */
    public $honeyPotVpcSwitchId;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-p0w223apdl49sr5zv****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The name of the VPC.
     *
     * @example abc-vpcname
     *
     * @var string
     */
    public $vpcName;

    /**
     * @description The region ID of the VPC.
     *
     * > For more information about the mapping between region IDs and region names, see [Regions and zones](~~40654~~).
     * @example ap-southeast-2
     *
     * @var string
     */
    public $vpcRegionId;

    /**
     * @description The status of the VPC. Valid values:
     *
     *   **Available**: The VPC is normal and available.
     *   **Pending**: The VPC is being configured.
     *
     * @example Available
     *
     * @var string
     */
    public $vpcStatus;

    /**
     * @description An array that consists of the vSwitches in the VPC.
     *
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
    }

    public function toMap()
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
            $res['VpcSwitchIdList'] = [];
            if (null !== $this->vpcSwitchIdList && \is_array($this->vpcSwitchIdList)) {
                $n = 0;
                foreach ($this->vpcSwitchIdList as $item) {
                    $res['VpcSwitchIdList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
                $n                      = 0;
                foreach ($map['VpcSwitchIdList'] as $item) {
                    $model->vpcSwitchIdList[$n++] = null !== $item ? vpcSwitchIdList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
