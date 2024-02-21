<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudphone\V20201230\Models\ListInstancesResponseBody\instances\instance;

use AlibabaCloud\Tea\Model;

class vpcAttributes extends Model
{
    /**
     * @description The private IP address.
     *
     * @example 192.168.0.85
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-bp1kbwqxxxxx
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'privateIpAddress' => 'PrivateIpAddress',
        'vSwitchId'        => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
