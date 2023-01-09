<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetUserVpcsResponseBody;

use AlibabaCloud\Tea\Model;

class vpcs extends Model
{
    /**
     * @example 172.16.80.0/20
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @var string
     */
    public $description;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-acfm3fzmgkehpewjertna
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string[]
     */
    public $routerTableIds;

    /**
     * @var string[]
     */
    public $vSwitchIds;

    /**
     * @example vpc-uf6gc56wdjpafoiwej6adqb4qn72xtw
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example shanghai-vpc
     *
     * @var string
     */
    public $vpcName;
    protected $_name = [
        'cidrBlock'       => 'CidrBlock',
        'description'     => 'Description',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'routerTableIds'  => 'RouterTableIds',
        'vSwitchIds'      => 'VSwitchIds',
        'vpcId'           => 'VpcId',
        'vpcName'         => 'VpcName',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->routerTableIds) {
            $res['RouterTableIds'] = $this->routerTableIds;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
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
     * @return vpcs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RouterTableIds'])) {
            if (!empty($map['RouterTableIds'])) {
                $model->routerTableIds = $map['RouterTableIds'];
            }
        }
        if (isset($map['VSwitchIds'])) {
            if (!empty($map['VSwitchIds'])) {
                $model->vSwitchIds = $map['VSwitchIds'];
            }
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
