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
     * >  If you set **Type** to **Standard**, you can configure endpoint groups and endpoints, and this parameter is required.
     * @example 47.0.XX.XX
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description The private IP address of the elastic network interface (ENI).
     *
     * >  If the endpoint type is **ENI**, you can specify this parameter. If you do not specify this parameter, the primary private IP address of the ENI is used.
     * @example 172.168.XX.XX
     *
     * @var string
     */
    public $subAddress;

    /**
     * @description The type of the endpoint that is associated with the intelligent routing listener. Valid values:
     *
     *   **Domain**: a custom domain name
     *   **Ip**: a custom IP address
     *   **PublicIp**: a public IP address provided by Alibaba Cloud
     *   **ECS**: an Elastic Compute Service (ECS) instance
     *   **SLB**: a Server Load Balancer (SLB) instance
     *   **ALB**: an Application Load Balancer (ALB) instance
     *   **OSS**: an Object Storage Service (OSS) bucket
     *
     * You can specify up to 100 endpoint types for an endpoint group of an intelligent routing listener.
     *
     * > *   If you set **Type** to **Standard**, you can configure endpoint groups and endpoints for an intelligent routing listener, and this parameter is required.
     * >*   If you set this parameter to **ECS** or **SLB** and the service-linked role AliyunServiceRoleForGaVpcEndpoint does not exist, the system automatically creates the service-linked role.
     * >*   If you set this parameter to **ALB** and the service-linked role AliyunServiceRoleForGaAlb does not exist, the system automatically creates the service-linked role.
     * >*   If you set this parameter to **OSS** and the service-linked role AliyunServiceRoleForGaOss does not exist, the system automatically creates the service-linked role.
     * > For more information, see [Service linked roles](https://help.aliyun.com/document_detail/178360.html).
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
     * You can specify the weights of up to 100 endpoints for an endpoint group of an intelligent routing listener.
     *
     * > *   If you set **Type** to **Standard**, you can configure endpoint groups and endpoints for an intelligent routing listener, and this parameter is required.
     * >*   If you set the weight of an endpoint to 0, GA does not route network traffic to the endpoint. Make sure that you are aware of the impact on your business before you set the endpoint weight to 0.
     * @example 20
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'endpoint'   => 'Endpoint',
        'subAddress' => 'SubAddress',
        'type'       => 'Type',
        'weight'     => 'Weight',
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
