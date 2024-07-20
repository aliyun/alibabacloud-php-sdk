<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\CreateEndpointGroupRequest;

use AlibabaCloud\Tea\Model;

class endpointConfigurations extends Model
{
    /**
     * @description Specifies whether to preserve client IP addresses by using the TCP Option Address (TOA) module. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example false
     *
     * @var bool
     */
    public $enableClientIPPreservation;

    /**
     * @description Specifies whether to use the proxy protocol to preserve client IP addresses. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example false
     *
     * @var bool
     */
    public $enableProxyProtocol;

    /**
     * @description Enter the IP address, domain name, or instance ID based on the value of the Type parameter.
     *
     * This parameter is required.
     * @example 120.1.XX.XX
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description The private IP address of the ENI.
     *
     * >  This parameter is available only when you set the endpoint type to **ENI**. If you leave this parameter empty, the primary private IP address of the ENI is used.
     * @example 172.168.XX.XX
     *
     * @var string
     */
    public $subAddress;

    /**
     * @description The type of the endpoint. Valid values:
     *
     *   **Domain:** a custom domain name.
     *   **Ip:** a custom IP address.
     *   **PublicIp:** a public IP address provided by Alibaba Cloud.
     *   **ECS:** an Elastic Compute Service (ECS) instance.
     *   **SLB:** a Classic Load Balancer (CLB) instance.
     *   **ALB:** an Application Load Balancer (ALB) instance.
     *   **OSS:** an Object Storage Service (OSS) bucket.
     *   **ENI:** an elastic network interface (ENI).
     *   **NLB:** a Network Load Balancer (NLB) instance.
     *
     * >
     *
     *   If you set this parameter to **ECS**, **ENI**, **SLB**, **ALB**, or **NLB** and the AliyunServiceRoleForGaVpcEndpoint service-linked role does not exist, the system automatically creates the service-linked role.
     *
     *   If you set this parameter to **ALB** and the AliyunServiceRoleForGaAlb service-linked role does not exist, the system automatically creates the role.
     *
     *   If you set this parameter to **OSS** and the AliyunServiceRoleForGaOss service-linked role does not exist, the system automatically creates the role.
     *
     *   If you set this parameter to **NLB** and the AliyunServiceRoleForGaNlb service-linked role does not exist, the system automatically creates the role.
     *
     * This parameter is required.
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
     * This parameter is required.
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
