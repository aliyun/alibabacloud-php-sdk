<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListVpcResponseBody\vpcList;

use AlibabaCloud\Tea\Model;

class vpcEntity extends Model
{
    /**
     * @description This operation uses only common request headers. For more information, see [Common parameters for API calls](~~123488~~).
     *
     * @example 0
     *
     * @var int
     */
    public $ecsNum;

    /**
     * @description The region ID of the VPC.
     *
     * @example false
     *
     * @var bool
     */
    public $expired;

    /**
     * @description No request parameters.
     *
     * @example cn-shenzhen
     *
     * @var string
     */
    public $regionId;

    /**
     * @description GET /pop/v5/vpc_list HTTP/1.1
     * Common request headers
     * @example edas_****_test@aliyun-****.com
     *
     * @var string
     */
    public $userId;

    /**
     * @description The ID of the Alibaba Cloud account to which the VPC belongs.
     *
     * @example vpc-wz9pcq3jofczwpujq****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The number of ECS instances associated with the VPC.
     *
     * @example edas-default-vpc4
     *
     * @var string
     */
    public $vpcName;
    protected $_name = [
        'ecsNum'   => 'EcsNum',
        'expired'  => 'Expired',
        'regionId' => 'RegionId',
        'userId'   => 'UserId',
        'vpcId'    => 'VpcId',
        'vpcName'  => 'VpcName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecsNum) {
            $res['EcsNum'] = $this->ecsNum;
        }
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['EcsNum'])) {
            $model->ecsNum = $map['EcsNum'];
        }
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
