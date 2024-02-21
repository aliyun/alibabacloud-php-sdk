<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableConfigResponseBody\vpcInfoList;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableConfigResponseBody\vpcInfoList\vpcInfo\vswitchInfoList;
use AlibabaCloud\Tea\Model;

class vpcInfo extends Model
{
    /**
     * @example 192.168.0.0/16
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @example 2018-11-22T07:38:44Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example vpc_desc
     *
     * @var string
     */
    public $description;

    /**
     * @example 0
     *
     * @var string
     */
    public $VRouterId;

    /**
     * @description VPC ID。
     *
     * @example vpc-bp1d618azoa9go6wo****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example zgtest
     *
     * @var string
     */
    public $vpcName;

    /**
     * @var vswitchInfoList
     */
    public $vswitchInfoList;
    protected $_name = [
        'cidrBlock'       => 'CidrBlock',
        'creationTime'    => 'CreationTime',
        'description'     => 'Description',
        'VRouterId'       => 'VRouterId',
        'vpcId'           => 'VpcId',
        'vpcName'         => 'VpcName',
        'vswitchInfoList' => 'VswitchInfoList',
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
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->VRouterId) {
            $res['VRouterId'] = $this->VRouterId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcName) {
            $res['VpcName'] = $this->vpcName;
        }
        if (null !== $this->vswitchInfoList) {
            $res['VswitchInfoList'] = null !== $this->vswitchInfoList ? $this->vswitchInfoList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpcInfo
     */
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
        if (isset($map['VRouterId'])) {
            $model->VRouterId = $map['VRouterId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcName'])) {
            $model->vpcName = $map['VpcName'];
        }
        if (isset($map['VswitchInfoList'])) {
            $model->vswitchInfoList = vswitchInfoList::fromMap($map['VswitchInfoList']);
        }

        return $model;
    }
}
