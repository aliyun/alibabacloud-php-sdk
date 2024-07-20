<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\UpdateCustomRoutingEndpointTrafficPoliciesRequest;

use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateCustomRoutingEndpointTrafficPoliciesRequest\policyConfigurations\portRanges;
use AlibabaCloud\Tea\Model;

class policyConfigurations extends Model
{
    /**
     * @description The IP address of the destination which to allow traffic.
     *
     * This parameter takes effect only when you set the **TrafficToEndpointPolicy** parameter to **AllowCustom**. You can call the [DescribeCustomRoutingEndpoint](https://help.aliyun.com/document_detail/449386.html) operation to query the traffic policy of an endpoint.
     *
     * >  This parameter is required.
     * @example 10.0.XX.XX
     *
     * @var string
     */
    public $address;

    /**
     * @description The ID of the traffic policy that you want to modify.
     *
     * >  This parameter is required.
     * @example ply-bptest2****
     *
     * @var string
     */
    public $policyId;

    /**
     * @description The port range of the destination to which traffic is forwarded. The value of this parameter must fall within the port range of the endpoint group.
     *
     * If you do not specify object, traffic is forwarded to all ports.
     *
     * This parameter takes effect only when you set the **TrafficToEndpointPolicy** parameter to **AllowCustom**. You can call the [DescribeCustomRoutingEndpoint](https://help.aliyun.com/document_detail/449386.html) operation to query the traffic policy of an endpoint.
     *
     * You can specify a maximum of 500 port ranges for each endpoint and a maximum of 10 port ranges for each traffic policy.
     * @var portRanges[]
     */
    public $portRanges;
    protected $_name = [
        'address'    => 'Address',
        'policyId'   => 'PolicyId',
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
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
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
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
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
