<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance\vpcAttributes\privateIpAddress;

class vpcAttributes extends Model
{
    /**
     * @var string
     */
    public $natIpAddress;

    /**
     * @var privateIpAddress
     */
    public $privateIpAddress;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'natIpAddress' => 'NatIpAddress',
        'privateIpAddress' => 'PrivateIpAddress',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (null !== $this->privateIpAddress) {
            $this->privateIpAddress->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->natIpAddress) {
            $res['NatIpAddress'] = $this->natIpAddress;
        }

        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = null !== $this->privateIpAddress ? $this->privateIpAddress->toArray($noStream) : $this->privateIpAddress;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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
        if (isset($map['NatIpAddress'])) {
            $model->natIpAddress = $map['NatIpAddress'];
        }

        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = privateIpAddress::fromMap($map['PrivateIpAddress']);
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
