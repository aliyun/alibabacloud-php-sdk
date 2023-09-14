<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\UpdateCustomRoutingEndpointsRequest;

use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateCustomRoutingEndpointsRequest\endpointConfigurations\policyConfigurations;
use AlibabaCloud\Tea\Model;

class endpointConfigurations extends Model
{
    /**
     * @description The ID of the endpoint.
     *
     * You can specify up to 20 endpoint IDs.
     * @example ep-bp1dmlohjjz4kqaun****
     *
     * @var string
     */
    public $endpointId;

    /**
     * @description The configurations of the policy.
     *
     * @var policyConfigurations[]
     */
    public $policyConfigurations;

    /**
     * @description The access policy of traffic for the specified endpoint. Default value: DenyAll. Valid values:
     *
     *   **DenyAll**: denies all traffic to the endpoint.
     *
     *   **AllowAll**: allows all traffic to the endpoint.
     *
     *   **AllowCustom**: allows traffic only to specified destinations.
     *
     * You can specify up to 20 access policies of traffic for the specified endpoint.
     * @example DenyAll
     *
     * @var string
     */
    public $trafficToEndpointPolicy;
    protected $_name = [
        'endpointId'              => 'EndpointId',
        'policyConfigurations'    => 'PolicyConfigurations',
        'trafficToEndpointPolicy' => 'TrafficToEndpointPolicy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
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
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
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

        return $model;
    }
}
