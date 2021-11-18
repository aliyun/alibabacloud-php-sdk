<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models;

use AlibabaCloud\Tea\Model;

class Vpc extends Model
{
    /**
     * @description vpc子网
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @description 创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description vpc描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 是否默认
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @description vpc状态
     *
     * @var string
     */
    public $status;

    /**
     * @description 路由id
     *
     * @var string
     */
    public $VRouterId;

    /**
     * @description vpc id
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description vpc名称
     *
     * @var string
     */
    public $vpcName;
    protected $_name = [
        'cidrBlock'   => 'CidrBlock',
        'createTime'  => 'CreateTime',
        'description' => 'Description',
        'isDefault'   => 'IsDefault',
        'status'      => 'Status',
        'VRouterId'   => 'VRouterId',
        'vpcId'       => 'VpcId',
        'vpcName'     => 'VpcName',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Vpc
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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

        return $model;
    }
}
