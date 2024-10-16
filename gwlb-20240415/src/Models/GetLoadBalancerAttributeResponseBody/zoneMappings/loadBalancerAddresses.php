<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gwlb\V20240415\Models\GetLoadBalancerAttributeResponseBody\zoneMappings;

use AlibabaCloud\Tea\Model;

class loadBalancerAddresses extends Model
{
    /**
     * @example eni-bp1iahwz3rzgvltz****
     *
     * @var string
     */
    public $eniId;

    /**
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $privateIpv4Address;
    protected $_name = [
        'eniId'              => 'EniId',
        'privateIpv4Address' => 'PrivateIpv4Address',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eniId) {
            $res['EniId'] = $this->eniId;
        }
        if (null !== $this->privateIpv4Address) {
            $res['PrivateIpv4Address'] = $this->privateIpv4Address;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return loadBalancerAddresses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EniId'])) {
            $model->eniId = $map['EniId'];
        }
        if (isset($map['PrivateIpv4Address'])) {
            $model->privateIpv4Address = $map['PrivateIpv4Address'];
        }

        return $model;
    }
}
