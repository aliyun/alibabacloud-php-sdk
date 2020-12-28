<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances;

use AlibabaCloud\Tea\Model;

class vpcAttributes extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $natIpAddress;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string[]
     */
    public $privateIpAddress;
    protected $_name = [
        'vpcId'            => 'VpcId',
        'natIpAddress'     => 'NatIpAddress',
        'vSwitchId'        => 'VSwitchId',
        'privateIpAddress' => 'PrivateIpAddress',
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
        if (null !== $this->natIpAddress) {
            $res['NatIpAddress'] = $this->natIpAddress;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpcAttributes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['NatIpAddress'])) {
            $model->natIpAddress = $map['NatIpAddress'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['PrivateIpAddress'])) {
            if (!empty($map['PrivateIpAddress'])) {
                $model->privateIpAddress = $map['PrivateIpAddress'];
            }
        }

        return $model;
    }
}
