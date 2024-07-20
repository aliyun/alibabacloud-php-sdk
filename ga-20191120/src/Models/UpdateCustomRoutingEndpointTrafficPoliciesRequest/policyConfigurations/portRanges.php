<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\UpdateCustomRoutingEndpointTrafficPoliciesRequest\policyConfigurations;

use AlibabaCloud\Tea\Model;

class portRanges extends Model
{
    /**
     * @description The first port of the destination port range. The value of this parameter must fall within the port range of the backend service.
     *
     * This parameter takes effect only when you set the **TrafficToEndpointPolicy** parameter to **AllowCustom**. You can call the [DescribeCustomRoutingEndpoint](https://help.aliyun.com/document_detail/449386.html) operation to query the traffic policy of an endpoint.
     *
     * You can specify a maximum of 500 port ranges for each endpoint and a maximum of 10 port ranges for each traffic policy.
     * @example 80
     *
     * @var int
     */
    public $fromPort;

    /**
     * @description The last port of the destination port range. The value of this parameter must fall within the port range of the backend service.
     *
     * This parameter takes effect only when you set the **TrafficToEndpointPolicy** parameter to **AllowCustom**. You can call the [DescribeCustomRoutingEndpoint](https://help.aliyun.com/document_detail/449386.html) operation to query the traffic policy of an endpoint.
     *
     * You can specify a maximum of 500 port ranges for each endpoint and a maximum of 10 port ranges for each traffic policy.
     * @example 80
     *
     * @var int
     */
    public $toPort;
    protected $_name = [
        'fromPort' => 'FromPort',
        'toPort'   => 'ToPort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fromPort) {
            $res['FromPort'] = $this->fromPort;
        }
        if (null !== $this->toPort) {
            $res['ToPort'] = $this->toPort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return portRanges
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FromPort'])) {
            $model->fromPort = $map['FromPort'];
        }
        if (isset($map['ToPort'])) {
            $model->toPort = $map['ToPort'];
        }

        return $model;
    }
}
