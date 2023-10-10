<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListResourceGroupResponseBody\resourceGroupList\resGroupEntity\ecsList\ecsEntity;

use AlibabaCloud\Tea\Model;

class vpcEntity extends Model
{
    /**
     * @description The IPv4 CIDR block of the vSwitch.
     *
     * @example 192.168.xx.xxx
     *
     * @var string
     */
    public $cidrblock;

    /**
     * @description The description of the VPC.
     *
     * @example ""
     *
     * @var string
     */
    public $description;

    /**
     * @description The number of ECS instances that run in the VPC.
     *
     * @example 1
     *
     * @var int
     */
    public $ecsNum;

    /**
     * @description Indicates whether the VPC has expired. Valid values:
     *
     *   true: The VPC has expired.
     *   false: The VPC has not expired.
     *
     * @example true
     *
     * @var bool
     */
    public $expired;

    /**
     * @description The ID of the region.
     *
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The status of the VPC.
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the user.
     *
     * @example ****_common_****@aliyun.com
     *
     * @var string
     */
    public $userId;

    /**
     * @description The unique ID of the VPC.
     *
     * @example vpc-bp13evu42t1er****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The name of the VPC.
     *
     * @example test
     *
     * @var string
     */
    public $vpcName;
    protected $_name = [
        'cidrblock'   => 'Cidrblock',
        'description' => 'Description',
        'ecsNum'      => 'EcsNum',
        'expired'     => 'Expired',
        'regionId'    => 'RegionId',
        'status'      => 'Status',
        'userId'      => 'UserId',
        'vpcId'       => 'VpcId',
        'vpcName'     => 'VpcName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidrblock) {
            $res['Cidrblock'] = $this->cidrblock;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ecsNum) {
            $res['EcsNum'] = $this->ecsNum;
        }
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcName) {
            $res['VpcName'] = $this->vpcName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpcEntity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cidrblock'])) {
            $model->cidrblock = $map['Cidrblock'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EcsNum'])) {
            $model->ecsNum = $map['EcsNum'];
        }
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
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
