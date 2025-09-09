<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceSwitchNetworkResponseBody\vpcInfos;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceSwitchNetworkResponseBody\vpcInfos\vpcInfo\vswitchInfos;

class vpcInfo extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vpcName;

    /**
     * @var vswitchInfos
     */
    public $vswitchInfos;
    protected $_name = [
        'regionId' => 'RegionId',
        'vpcId' => 'VpcId',
        'vpcName' => 'VpcName',
        'vswitchInfos' => 'VswitchInfos',
    ];

    public function validate()
    {
        if (null !== $this->vswitchInfos) {
            $this->vswitchInfos->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vpcName) {
            $res['VpcName'] = $this->vpcName;
        }

        if (null !== $this->vswitchInfos) {
            $res['VswitchInfos'] = null !== $this->vswitchInfos ? $this->vswitchInfos->toArray($noStream) : $this->vswitchInfos;
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

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['VpcName'])) {
            $model->vpcName = $map['VpcName'];
        }

        if (isset($map['VswitchInfos'])) {
            $model->vswitchInfos = vswitchInfos::fromMap($map['VswitchInfos']);
        }

        return $model;
    }
}
