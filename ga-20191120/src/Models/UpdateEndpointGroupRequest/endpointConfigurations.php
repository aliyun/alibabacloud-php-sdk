<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\UpdateEndpointGroupRequest;

use AlibabaCloud\Tea\Model;

class endpointConfigurations extends Model
{
    /**
     * @description Specifies whether to reserve client IP addresses. Default value: false. Valid values:
     *
     *   **true**: reserves client IP addresses.
     *   **false**: does not reserve client IP addresses.
     *
     * @example false
     *
     * @var bool
     */
    public $enableClientIPPreservation;

    /**
     * @description Specifies whether to preserve client IP addresses by using the ProxyProtocol module. Default value: false. Valid values:
     *
     *   **true**: preserves client IP addresses by using the ProxyProtocol module.
     *   **false**: does not preserve client IP addresses by using the ProxyProtocol module.
     *
     * @example false
     *
     * @var bool
     */
    public $enableProxyProtocol;

    /**
     * @description The IP address or domain name of the endpoint.
     *
     * @example 120.XX.XX.21
     *
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $subAddress;

    /**
     * @description The type of the endpoint. Valid values:
     *
     *   **Domain**: a custom domain name
     *   **Ip**: a custom IP address
     *   **PublicIp**: a public IP address provided by Alibaba Cloud
     *   **ECS**: an Elastic Compute Service (ECS) instance
     *   **SLB**: a Server Load Balancer (SLB) instance
     *   **ALB**: an Application Load Balancer (ALB) instance
     *   **OSS**: an Object Storage Service (OSS) bucket
     *
     * > *   If you set this parameter to **ECS** or **SLB** and the service-linked role AliyunServiceRoleForGaVpcEndpoint does not exist, the system automatically creates the service-linked role.
     * > *   If you set this parameter to **ALB** and the service-linked role AliyunServiceRoleForGaAlb does not exist, the system automatically creates the service-linked role.
     * > *   If you set this parameter to **OSS** and the service-linked role AliyunServiceRoleForGaOss does not exist, the system automatically creates the service-linked role.
     *
     * For more information, see [Service-linked roles](~~178360~~).
     * @example Ip
     *
     * @var string
     */
    public $type;

    /**
     * @description The weight of the endpoint.
     *
     * Valid values: **0** to **255**.
     *
     * >  If the weight of an endpoint is set to 0, GA stops distributing network traffic to the endpoint. Proceed with caution.
     * @example 20
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'enableClientIPPreservation' => 'EnableClientIPPreservation',
        'enableProxyProtocol'        => 'EnableProxyProtocol',
        'endpoint'                   => 'Endpoint',
        'subAddress'                 => 'SubAddress',
        'type'                       => 'Type',
        'weight'                     => 'Weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableClientIPPreservation) {
            $res['EnableClientIPPreservation'] = $this->enableClientIPPreservation;
        }
        if (null !== $this->enableProxyProtocol) {
            $res['EnableProxyProtocol'] = $this->enableProxyProtocol;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->subAddress) {
            $res['SubAddress'] = $this->subAddress;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
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
        if (isset($map['EnableClientIPPreservation'])) {
            $model->enableClientIPPreservation = $map['EnableClientIPPreservation'];
        }
        if (isset($map['EnableProxyProtocol'])) {
            $model->enableProxyProtocol = $map['EnableProxyProtocol'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['SubAddress'])) {
            $model->subAddress = $map['SubAddress'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
