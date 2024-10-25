<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\AssignPrivateIpAddressesResponseBody;

use AlibabaCloud\Tea\Model;

class assignedPrivateIpAddressesSet extends Model
{
    /**
     * @description The ID of the ENI.
     *
     * @example eni-uf620pb4d19ljnu4a64m
     *
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @description The assigned private IP addresses.
     *
     * @var string[]
     */
    public $privateIpSet;
    protected $_name = [
        'networkInterfaceId' => 'NetworkInterfaceId',
        'privateIpSet'       => 'PrivateIpSet',
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
        if (null !== $this->privateIpSet) {
            $res['PrivateIpSet'] = $this->privateIpSet;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return assignedPrivateIpAddressesSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }
        if (isset($map['PrivateIpSet'])) {
            if (!empty($map['PrivateIpSet'])) {
                $model->privateIpSet = $map['PrivateIpSet'];
            }
        }

        return $model;
    }
}
