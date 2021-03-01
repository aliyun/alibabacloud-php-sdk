<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListResourceGroupResponseBody\resourceGroupList\resGroupEntity\ecsList\ecsEntity;

use AlibabaCloud\Tea\Model;

class vpcEntity extends Model
{
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
    public $regionId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $cidrblock;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $expired;

    /**
     * @var int
     */
    public $ecsNum;
    protected $_name = [
        'vpcId'       => 'VpcId',
        'vpcName'     => 'VpcName',
        'regionId'    => 'RegionId',
        'userId'      => 'UserId',
        'cidrblock'   => 'Cidrblock',
        'status'      => 'Status',
        'description' => 'Description',
        'expired'     => 'Expired',
        'ecsNum'      => 'EcsNum',
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
        if (null !== $this->vpcName) {
            $res['VpcName'] = $this->vpcName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->cidrblock) {
            $res['Cidrblock'] = $this->cidrblock;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }
        if (null !== $this->ecsNum) {
            $res['EcsNum'] = $this->ecsNum;
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
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcName'])) {
            $model->vpcName = $map['VpcName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Cidrblock'])) {
            $model->cidrblock = $map['Cidrblock'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }
        if (isset($map['EcsNum'])) {
            $model->ecsNum = $map['EcsNum'];
        }

        return $model;
    }
}
