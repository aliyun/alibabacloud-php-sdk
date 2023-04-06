<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\CreateListenerRequest\endpointGroupConfigurations;

use AlibabaCloud\Tea\Model;

class endpointConfigurations extends Model
{
    /**
     * @description The IP address or domain name of the endpoint that is associated with the intelligent routing listener.
     *
     * You can specify up to 100 endpoint IP addresses or domain names for an endpoint group of an intelligent routing listener.
     *
     * > If the **Type** parameter is set to **Standard**, you can configure endpoint groups and endpoints for an intelligent routing listener, and this parameter is required.
     * @example 47.0.XX.XX
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description The endpoint type of the intelligent routing listener. Valid values:
     *
     *   **Domain**: a custom domain name
     *   **Ip**: a custom IP address
     *   **PublicIp**: a public IP address provided by Alibaba Cloud
     *   **ECS**: an Elastic Compute Service (ECS) instance
     *   **SLB**: a Server Load Balancer (SLB) instance
     *   **ALB**: an Application Load Balancer (ALB) instance
     *   **OSS**: an Object Storage Service (OSS) bucket
     *
     * >
     *
     *   If the **Type** parameter is set to **Standard**, you can configure endpoint groups and endpoints for an intelligent routing listener, and this parameter is required.
     *
     *   If you set this parameter to **ECS** or **SLB** and the service-linked role AliyunServiceRoleForGaVpcEndpoint does not exist, the system creates the service-linked role.
     *   If you set this parameter to **ALB** and the service-linked role AliyunServiceRoleForGaAlb does not exist, the system automatically creates the service-linked role.
     *   If you set this parameter to **OSS** and the service-linked role AliyunServiceRoleForGaOss does not exist, the system automatically creates the service-linked role.
     *
     * For more information, see [Service-linked roles](~~178360~~).
     * @example Ip
     *
     * @var string
     */
    public $type;

    /**
     * @description The weight of the endpoint that is associated with the intelligent routing listener.
     *
     * Valid values: **0** to **255**.
     *
     * >
     *
     *   If the **Type** parameter is set to **Standard**, you can configure endpoint groups and endpoints for an intelligent routing listener, and this parameter is required.
     *
     *   If the weight of an endpoint is set to 0, GA stops distributing network traffic to the endpoint. Proceed with caution.
     *
     * @example 20
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'endpoint' => 'Endpoint',
        'type'     => 'Type',
        'weight'   => 'Weight',
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
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
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
