<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models;

use AlibabaCloud\Tea\Model;

class UpdateVpcEndpointZoneConnectionResourceAttributeRequest extends Model
{
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
     * @description Specifies whether to perform only a dry run, without performing the actual request. Valid values:
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
     * @description The endpoint ID.
     *
     * @example ep-hp33b2e43fays7s8****
     *
     * @var string
     */
    public $endpointId;

    /**
     * @description The region ID of the endpoint connection whose bandwidth you want to modify.
     *
     * You can call the [DescribeRegions](~~120468~~) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource allocation mode. You can change the resource allocation mode only if the endpoint connection is in the **Disconnected** state. Valid values:
     *
     *   **Auto**: automatically and randomly allocates service resources. In this mode, the specified service resource is deleted.
     *   **Manual**: manually allocates service resources. If you set the value to Manual, you must also specify the **ResourceId** and **ResourceType** parameters.
     *
     * @example Auto
     *
     * @var string
     */
    public $resourceAllocateMode;

    /**
     * @description The ID of the service resource that you want to manually allocate or migrate in the zone where the endpoint connection is deployed.
     *
     * > If **ResourceAllocateMode** is set to **Mannual**, or **ResourceReplaceMode** is set, this parameter is required.
     * @example lb-hp32z1wp5peaoox2q****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The migration mode of the service resource. Valid values:
     *
     *   **Graceful**: smooth migration. Service resources in the zone are smoothly migrated.
     *   **Force**: forced migration. Service resources in the zone are forcefully migrated.
     *
     * >  You need to specify this parameter only if you want to migrate service resources and the endpoint connection is in the **Connected** state. If you specify this parameter, you must also specify the **ResourceId** and **ResourceType** parameters.
     * @example Graceful
     *
     * @var string
     */
    public $resourceReplaceMode;

    /**
     * @description The type of the service resource. Valid values:
     *
     *   **slb**: a CLB instance that supports PrivateLink. In addition, the CLB instance is deployed in a VPC.
     *   **alb**: an Application Load Balancer (ALB) instance that supports PrivateLink. In addition, the ALB instance is deployed in a VPC.
     *
     * > If **ResourceAllocateMode** is set to **Mannual**, or **ResourceReplaceMode** is set, this parameter is required.
     * @example slb
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The endpoint service ID.
     *
     * @example epsrv-hp3vpx8yqxblby3i****
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description The zone ID.
     *
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'dryRun'               => 'DryRun',
        'endpointId'           => 'EndpointId',
        'regionId'             => 'RegionId',
        'resourceAllocateMode' => 'ResourceAllocateMode',
        'resourceId'           => 'ResourceId',
        'resourceReplaceMode'  => 'ResourceReplaceMode',
        'resourceType'         => 'ResourceType',
        'serviceId'            => 'ServiceId',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceAllocateMode) {
            $res['ResourceAllocateMode'] = $this->resourceAllocateMode;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceReplaceMode) {
            $res['ResourceReplaceMode'] = $this->resourceReplaceMode;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateVpcEndpointZoneConnectionResourceAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceAllocateMode'])) {
            $model->resourceAllocateMode = $map['ResourceAllocateMode'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceReplaceMode'])) {
            $model->resourceReplaceMode = $map['ResourceReplaceMode'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
