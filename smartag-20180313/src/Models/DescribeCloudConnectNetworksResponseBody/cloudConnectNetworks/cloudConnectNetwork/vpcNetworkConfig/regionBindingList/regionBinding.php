<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeCloudConnectNetworksResponseBody\cloudConnectNetworks\cloudConnectNetwork\vpcNetworkConfig\regionBindingList;

use AlibabaCloud\Dara\Model;

class regionBinding extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $relayCidrBlock;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vpcCidrBlock;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'regionId' => 'RegionId',
        'relayCidrBlock' => 'RelayCidrBlock',
        'status' => 'Status',
        'vpcCidrBlock' => 'VpcCidrBlock',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->relayCidrBlock) {
            $res['RelayCidrBlock'] = $this->relayCidrBlock;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->vpcCidrBlock) {
            $res['VpcCidrBlock'] = $this->vpcCidrBlock;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RelayCidrBlock'])) {
            $model->relayCidrBlock = $map['RelayCidrBlock'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['VpcCidrBlock'])) {
            $model->vpcCidrBlock = $map['VpcCidrBlock'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
