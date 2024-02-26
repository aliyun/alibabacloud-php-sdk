<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointServicesByEndUserResponseBody;

use AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointServicesByEndUserResponseBody\services\tags;
use AlibabaCloud\Tea\Model;

class services extends Model
{
    /**
     * @description The payer. Valid values:
     *
     *   **Endpoint**: the service consumer
     *   **EndpointService**: the service provider
     *
     * @example Endpoint
     *
     * @var string
     */
    public $payer;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfmy*****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The domain name of the endpoint service that can be associated with the endpoint.
     *
     * @example epsrv-hp3vpx8yqxblby3i****.cn-huhehaote.privatelink.aliyuncs.com
     *
     * @var string
     */
    public $serviceDomain;

    /**
     * @description The ID of the endpoint service that can be associated with the endpoint.
     *
     * @example epsrv-hp3vpx8yqxblby3i****
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description The name of the endpoint service that can be associated with the endpoint.
     *
     * @example com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3vpx8yqxblby3i****
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The type of the service resource. Valid values:
     *
     *   **slb**: Classic Load Balancer (CLB) instance
     *   **alb**: Application Load Balancer (ALB) instance
     *   **nlb**: Network Load Balancer (NLB) instance
     *
     * @example slb
     *
     * @var string
     */
    public $serviceResourceType;

    /**
     * @description Indicates whether IPv6 is enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $serviceSupportIPv6;

    /**
     * @description The type of the endpoint service.
     *
     * Only **Interface** is returned, which indicates an interface endpoint. You can specify **CLB** and **ALB** instances as service resources.
     * @example Interface
     *
     * @var string
     */
    public $serviceType;

    /**
     * @description The list of tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The zones of the endpoint service that can be associated with the endpoint.
     *
     * @var string[]
     */
    public $zones;
    protected $_name = [
        'payer'               => 'Payer',
        'resourceGroupId'     => 'ResourceGroupId',
        'serviceDomain'       => 'ServiceDomain',
        'serviceId'           => 'ServiceId',
        'serviceName'         => 'ServiceName',
        'serviceResourceType' => 'ServiceResourceType',
        'serviceSupportIPv6'  => 'ServiceSupportIPv6',
        'serviceType'         => 'ServiceType',
        'tags'                => 'Tags',
        'zones'               => 'Zones',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->payer) {
            $res['Payer'] = $this->payer;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->serviceDomain) {
            $res['ServiceDomain'] = $this->serviceDomain;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->serviceResourceType) {
            $res['ServiceResourceType'] = $this->serviceResourceType;
        }
        if (null !== $this->serviceSupportIPv6) {
            $res['ServiceSupportIPv6'] = $this->serviceSupportIPv6;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->zones) {
            $res['Zones'] = $this->zones;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return services
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Payer'])) {
            $model->payer = $map['Payer'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ServiceDomain'])) {
            $model->serviceDomain = $map['ServiceDomain'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['ServiceResourceType'])) {
            $model->serviceResourceType = $map['ServiceResourceType'];
        }
        if (isset($map['ServiceSupportIPv6'])) {
            $model->serviceSupportIPv6 = $map['ServiceSupportIPv6'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Zones'])) {
            if (!empty($map['Zones'])) {
                $model->zones = $map['Zones'];
            }
        }

        return $model;
    }
}
