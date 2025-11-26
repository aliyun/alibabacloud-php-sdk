<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponseBody\instances\instance;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponseBody\instances\instance\networkAttributes\privateIpAddress;

class networkAttributes extends Model
{
    /**
     * @var string
     */
    public $networkId;

    /**
     * @var privateIpAddress
     */
    public $privateIpAddress;

    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'networkId' => 'NetworkId',
        'privateIpAddress' => 'PrivateIpAddress',
        'vSwitchId' => 'VSwitchId',
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
        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
        }

        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = null !== $this->privateIpAddress ? $this->privateIpAddress->toArray($noStream) : $this->privateIpAddress;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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
        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
        }

        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = privateIpAddress::fromMap($map['PrivateIpAddress']);
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
