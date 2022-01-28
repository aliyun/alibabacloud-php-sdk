<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponseBody\instances\instance;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponseBody\instances\instance\networkAttributes\privateIpAddress;
use AlibabaCloud\Tea\Model;

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
        'networkId'        => 'NetworkId',
        'privateIpAddress' => 'PrivateIpAddress',
        'vSwitchId'        => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = null !== $this->privateIpAddress ? $this->privateIpAddress->toMap() : null;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkAttributes
     */
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
