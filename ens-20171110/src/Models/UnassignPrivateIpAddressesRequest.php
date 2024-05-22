<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class UnassignPrivateIpAddressesRequest extends Model
{
    /**
     * @description The ID of the ENI.
     *
     * This parameter is required.
     * @example eni-f8z57orgmt6d144t20dw
     *
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @description The secondary private IP addresses that you want to unassign.
     *
     * This parameter is required.
     * @var string[]
     */
    public $privateIpAddress;
    protected $_name = [
        'networkInterfaceId' => 'NetworkInterfaceId',
        'privateIpAddress'   => 'PrivateIpAddress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnassignPrivateIpAddressesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }
        if (isset($map['PrivateIpAddress'])) {
            if (!empty($map['PrivateIpAddress'])) {
                $model->privateIpAddress = $map['PrivateIpAddress'];
            }
        }

        return $model;
    }
}
