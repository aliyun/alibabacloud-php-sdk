<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models;

use AlibabaCloud\SDK\Privatelink\V20200415\Models\CreateVpcEndpointServiceRequest\resource;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\CreateVpcEndpointServiceRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateVpcEndpointServiceRequest extends Model
{
    /**
     * @description Specifies whether to automatically accept endpoint connection requests. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example false
     *
     * @var bool
     */
    public $autoAcceptEnabled;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     * @example 0c593ea1-3bea-11e9-b96b-88e9fe637760
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request.
     *
     *   **true**: performs only a dry run. The system checks the request for potential issues, including missing parameter values, incorrect request syntax, and service limits. If the request fails the dry run, an error message is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *   **false** (default): performs a dry run and performs the actual request. If the request passes the dry run, a 2xx HTTP status code is returned and the operation is performed.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The payer of the endpoint service. Valid values:
     *
     *   **Endpoint**: the service consumer
     *   **EndpointService**: the service provider
     *
     * > By default, the feature of allowing the service provider to pay is unavailable. To use this feature, log on to the [Quota Center console](https://quotas.console.aliyun.com/white-list-products/privatelink/quotas) and click Privileges in the left-side navigation pane. On the **Privileges** page, enter the quota ID `privatelink_whitelist/epsvc_payer_mode`, and click Apply in the Actions column.
     * @example Endpoint
     *
     * @var string
     */
    public $payer;

    /**
     * @description The region ID of the endpoint service.
     *
     * You can call the [DescribeRegions](~~120468~~) operation to query the most recent region list.
     * @example cn-huhehaote
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The service resources of the endpoint service.
     *
     * @var resource[]
     */
    public $resource;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfmy*****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The description of the endpoint service.
     *
     * @example This is my EndpointService.
     *
     * @var string
     */
    public $serviceDescription;

    /**
     * @description The type of the service resource. Valid values:
     *
     *   **slb**: a Classic Load Balancer (CLB) instance
     *   **alb**: an Application Load Balancer (ALB) instance
     *   **nlb**: a Network Load Balancer (NLB) instance
     *
     * @example slb
     *
     * @var string
     */
    public $serviceResourceType;

    /**
     * @description Specifies whether to enable IPv6 for the endpoint service. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example false
     *
     * @var bool
     */
    public $serviceSupportIPv6;

    /**
     * @description The tags to add to the resource.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description Specifies whether to first resolve the domain name of the nearest endpoint that is associated with the endpoint service. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example false
     *
     * @var bool
     */
    public $zoneAffinityEnabled;
    protected $_name = [
        'autoAcceptEnabled'   => 'AutoAcceptEnabled',
        'clientToken'         => 'ClientToken',
        'dryRun'              => 'DryRun',
        'payer'               => 'Payer',
        'regionId'            => 'RegionId',
        'resource'            => 'Resource',
        'resourceGroupId'     => 'ResourceGroupId',
        'serviceDescription'  => 'ServiceDescription',
        'serviceResourceType' => 'ServiceResourceType',
        'serviceSupportIPv6'  => 'ServiceSupportIPv6',
        'tag'                 => 'Tag',
        'zoneAffinityEnabled' => 'ZoneAffinityEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoAcceptEnabled) {
            $res['AutoAcceptEnabled'] = $this->autoAcceptEnabled;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->payer) {
            $res['Payer'] = $this->payer;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resource) {
            $res['Resource'] = [];
            if (null !== $this->resource && \is_array($this->resource)) {
                $n = 0;
                foreach ($this->resource as $item) {
                    $res['Resource'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->serviceDescription) {
            $res['ServiceDescription'] = $this->serviceDescription;
        }
        if (null !== $this->serviceResourceType) {
            $res['ServiceResourceType'] = $this->serviceResourceType;
        }
        if (null !== $this->serviceSupportIPv6) {
            $res['ServiceSupportIPv6'] = $this->serviceSupportIPv6;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->zoneAffinityEnabled) {
            $res['ZoneAffinityEnabled'] = $this->zoneAffinityEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVpcEndpointServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoAcceptEnabled'])) {
            $model->autoAcceptEnabled = $map['AutoAcceptEnabled'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['Payer'])) {
            $model->payer = $map['Payer'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Resource'])) {
            if (!empty($map['Resource'])) {
                $model->resource = [];
                $n               = 0;
                foreach ($map['Resource'] as $item) {
                    $model->resource[$n++] = null !== $item ? resource::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ServiceDescription'])) {
            $model->serviceDescription = $map['ServiceDescription'];
        }
        if (isset($map['ServiceResourceType'])) {
            $model->serviceResourceType = $map['ServiceResourceType'];
        }
        if (isset($map['ServiceSupportIPv6'])) {
            $model->serviceSupportIPv6 = $map['ServiceSupportIPv6'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ZoneAffinityEnabled'])) {
            $model->zoneAffinityEnabled = $map['ZoneAffinityEnabled'];
        }

        return $model;
    }
}
