<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gwlb\V20240415\Models\GetLoadBalancerAttributeResponseBody\zoneMappings;

use AlibabaCloud\Dara\Model;

class loadBalancerAddresses extends Model
{
    /**
     * @var string
     */
    public $eniId;

    /**
     * @var string
     */
    public $privateIpv4Address;
    protected $_name = [
        'eniId' => 'EniId',
        'privateIpv4Address' => 'PrivateIpv4Address',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
