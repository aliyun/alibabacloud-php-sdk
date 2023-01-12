<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\CreateListenerRequest\customRoutingEndpointGroupConfigurations;

use AlibabaCloud\SDK\Ga\V20191120\Models\CreateListenerRequest\customRoutingEndpointGroupConfigurations\endpointConfigurations\policyConfigurations;
use AlibabaCloud\Tea\Model;

class endpointConfigurations extends Model
{
    /**
     * @description The name of the endpoint vSwitch of the custom routing listener.
     *
     * >  You can configure endpoint groups and endpoints for a custom routing listener only if the **Type** parameter is set to **CustomRouting**.
     * @example vsw-test01
     *
     * @var string
     */
    public $endpoint;

    /**
     * @var policyConfigurations[]
     */
    public $policyConfigurations;

    /**
     * @description The traffic policy of the backend service of the endpoint that is associated with the custom routing listener. Valid values:
     *
     *   **DenyAll** (default): denies all traffic to the specified backend service.
     *
     *   **AllowAll**: allows all traffic to the specified backend service.
     *
     *   **AllowCustom**: allows traffic to a specified destination.
     *
     * You must specify the IP address and port range of the destination. If the port range is empty, all ports are available.
     *
     * >  You can configure endpoint groups and endpoints for a custom routing listener only if the **Type** parameter is set to **CustomRouting**.
     * @example DenyAll
     *
     * @var string
     */
    public $trafficToEndpointPolicy;

    /**
     * @description The backend service type of the endpoint that is associated with the custom routing listener. Set the value to
     *
     **PrivateSubNet**, which specifies a private CIDR block.
     *
     * >  You can configure endpoint groups and endpoints for a custom routing listener only if the **Type** parameter is set to **CustomRouting**.
     * @example PrivateSubNet
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'endpoint'                => 'Endpoint',
        'policyConfigurations'    => 'PolicyConfigurations',
        'trafficToEndpointPolicy' => 'TrafficToEndpointPolicy',
        'type'                    => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->policyConfigurations) {
            $res['PolicyConfigurations'] = [];
            if (null !== $this->policyConfigurations && \is_array($this->policyConfigurations)) {
                $n = 0;
                foreach ($this->policyConfigurations as $item) {
                    $res['PolicyConfigurations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->trafficToEndpointPolicy) {
            $res['TrafficToEndpointPolicy'] = $this->trafficToEndpointPolicy;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return endpointConfigurations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['PolicyConfigurations'])) {
            if (!empty($map['PolicyConfigurations'])) {
                $model->policyConfigurations = [];
                $n                           = 0;
                foreach ($map['PolicyConfigurations'] as $item) {
                    $model->policyConfigurations[$n++] = null !== $item ? policyConfigurations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TrafficToEndpointPolicy'])) {
            $model->trafficToEndpointPolicy = $map['TrafficToEndpointPolicy'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
