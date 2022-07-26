<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeARMServerInstancesResponseBody\servers\AICInstances;

use AlibabaCloud\Tea\Model;

class networkAttributes extends Model
{
    /**
     * @var string
     */
    public $ipAddress;

    /**
     * @var string
     */
    public $networkId;

    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'ipAddress' => 'IpAddress',
        'networkId' => 'NetworkId',
        'vSwitchId' => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
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
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
