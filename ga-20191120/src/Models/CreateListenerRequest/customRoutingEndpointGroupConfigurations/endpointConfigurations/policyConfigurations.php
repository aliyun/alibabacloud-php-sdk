<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\CreateListenerRequest\customRoutingEndpointGroupConfigurations\endpointConfigurations;

use AlibabaCloud\SDK\Ga\V20191120\Models\CreateListenerRequest\customRoutingEndpointGroupConfigurations\endpointConfigurations\policyConfigurations\portRanges;
use AlibabaCloud\Tea\Model;

class policyConfigurations extends Model
{
    /**
     * @description The IP address of the destination to which traffic is forwarded.
     *
     * This parameter takes effect only if **TrafficToEndpointPolicy** is set to **AllowCustom**.
     *
     * You can specify up to 20 destination IP addresses for each endpoint of a custom routing listener.
     *
     * > You can configure endpoint groups and endpoints for a custom routing listener only if the **Type** parameter is set to **CustomRouting**.
     * @example 10.0.XX.XX
     *
     * @var string
     */
    public $address;

    /**
     * @description The port range of the destination to which traffic is forwarded. The value of this parameter must fall within the port range of the endpoint group.
     *
     * If you leave this parameter empty, traffic is distributed to all destination ports.
     *
     * This parameter takes effect only if **TrafficToEndpointPolicy** is set to **AllowCustom**.
     *
     * You can specify port ranges for up to 20 destinations in each endpoint of a custom routing listener. You can specify up to five port ranges for each destination.
     *
     * > You can configure endpoint groups and endpoints for a custom routing listener only if the **Type** parameter is set to **CustomRouting**.
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
