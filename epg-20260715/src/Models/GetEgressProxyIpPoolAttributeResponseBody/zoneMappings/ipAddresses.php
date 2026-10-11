<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EPG\V20260715\Models\GetEgressProxyIpPoolAttributeResponseBody\zoneMappings;

use AlibabaCloud\Dara\Model;

class ipAddresses extends Model
{
    /**
     * @var string
     */
    public $eipAllocationId;

    /**
     * @var string
     */
    public $privateIpv4Address;

    /**
     * @var string
     */
    public $publicIpv4Address;
    protected $_name = [
        'eipAllocationId' => 'EipAllocationId',
        'privateIpv4Address' => 'PrivateIpv4Address',
        'publicIpv4Address' => 'PublicIpv4Address',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eipAllocationId) {
            $res['EipAllocationId'] = $this->eipAllocationId;
        }

        if (null !== $this->privateIpv4Address) {
            $res['PrivateIpv4Address'] = $this->privateIpv4Address;
        }

        if (null !== $this->publicIpv4Address) {
            $res['PublicIpv4Address'] = $this->publicIpv4Address;
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
        if (isset($map['EipAllocationId'])) {
            $model->eipAllocationId = $map['EipAllocationId'];
        }

        if (isset($map['PrivateIpv4Address'])) {
            $model->privateIpv4Address = $map['PrivateIpv4Address'];
        }

        if (isset($map['PublicIpv4Address'])) {
            $model->publicIpv4Address = $map['PublicIpv4Address'];
        }

        return $model;
    }
}
