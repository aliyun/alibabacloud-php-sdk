<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\CreateCustomRoutingEndpointsRequest\endpointConfigurations;

use AlibabaCloud\SDK\Ga\V20191120\Models\CreateCustomRoutingEndpointsRequest\endpointConfigurations\policyConfigurations\portRanges;
use AlibabaCloud\Tea\Model;

class policyConfigurations extends Model
{
    /**
     * @description The IP address of the destination to which traffic is forwarded.
     *
     * This parameter takes effect only when **TrafficToEndpointPolicy** is set to **AllowCustom**.
     *
     * This parameter is required.
     * @example 10.0.XX.XX
     *
     * @var string
     */
    public $address;

    /**
     * @description The port range of the destination to which traffic is forwarded. The value of this parameter must fall within the port range of the endpoint group.
     *
     * If you leave this parameter empty, traffic is forwarded to all destination ports.
     *
     * This parameter takes effect only when **TrafficToEndpointPolicy** is set to **AllowCustom**.
     *
     * You can specify port ranges for up to 20 destinations for each endpoint and specify up to 20 port ranges for each destination.
     * @var portRanges[]
     */
    public $portRanges;
    protected $_name = [
        'address'    => 'Address',
        'portRanges' => 'PortRanges',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->portRanges) {
            $res['PortRanges'] = [];
            if (null !== $this->portRanges && \is_array($this->portRanges)) {
                $n = 0;
                foreach ($this->portRanges as $item) {
                    $res['PortRanges'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policyConfigurations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['PortRanges'])) {
            if (!empty($map['PortRanges'])) {
                $model->portRanges = [];
                $n                 = 0;
                foreach ($map['PortRanges'] as $item) {
                    $model->portRanges[$n++] = null !== $item ? portRanges::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
