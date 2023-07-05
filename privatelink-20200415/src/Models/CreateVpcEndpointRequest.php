<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models;

use AlibabaCloud\SDK\Privatelink\V20200415\Models\CreateVpcEndpointRequest\tag;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\CreateVpcEndpointRequest\zone;
use AlibabaCloud\Tea\Model;

class CreateVpcEndpointRequest extends Model
{
    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request. Valid values:
     *
     *   **true**: performs only a dry run. The system checks the request for potential issues, including missing parameter values, incorrect request syntax, and service limits. If the request fails the dry run, an error message is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *   **false** (default): performs a dry run and performs the actual request. If the request passes the dry run, a 2xx HTTP status code is returned and the operation is performed.
     *
     * @example 0c593ea1-3bea-11e9-b96b-88e9fe637760
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The name of the endpoint.
     *
     * The name must be 2 to 128 characters in length, and can contain digits, underscores (\_), and hyphens (-). The name must start with a letter.
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The ID of the virtual private cloud (VPC) to which the endpoint belongs.
     *
     * @example This is my Endpoint.
     *
     * @var string
     */
    public $endpointDescription;

    /**
     * @description The type of the endpoint.
     *
     * Set the value to **Interface**. Then, you can specify Application Load Balancer (ALB) and Classic Load Balancer (CLB) instances as service resources for the endpoint service.
     * @example test
     *
     * @var string
     */
    public $endpointName;

    /**
     * @description The number of private IP addresses that are assigned to an elastic network interface (ENI) in each zone. Set the value to **1**.
     *
     * @example Interface
     *
     * @var string
     */
    public $endpointType;

    /**
     * @description The list of tags.
     *
     * @example false
     *
     * @var bool
     */
    public $protectedEnabled;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     * @example cn-huhehaote
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The domain name of the endpoint.
     *
     * @example rg-acfmy*****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The information about the array object.
     *
     * The endpoint can be associated with up to 10 security groups.
     * @example sg-hp33bw6ynvm2yb0e****
     *
     * @var string[]
     */
    public $securityGroupId;

    /**
     * @description The name of the endpoint service with which the endpoint is associated.
     *
     * @example epsrv-hp3xdsq46ael67lo****
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description The zones where the endpoint is deployed.
     *
     * @example com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3vpx8yqxblby3i****
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The key of the tag.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The ID of the endpoint service with which the endpoint is associated.
     *
     * @example vpc-hp356stwkxg3fn2xe****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the vSwitch where you want to create the endpoint ENI in the zone. You can specify up to 10 vSwitch IDs.
     *
     * @var zone[]
     */
    public $zone;

    /**
     * @description The description of the endpoint.
     *
     * The description must be 2 to 256 characters in length, and cannot start with `http://` or `https://`.
     * @example 1
     *
     * @var int
     */
    public $zonePrivateIpAddressCount;
    protected $_name = [
        'clientToken'               => 'ClientToken',
        'dryRun'                    => 'DryRun',
        'endpointDescription'       => 'EndpointDescription',
        'endpointName'              => 'EndpointName',
        'endpointType'              => 'EndpointType',
        'protectedEnabled'          => 'ProtectedEnabled',
        'regionId'                  => 'RegionId',
        'resourceGroupId'           => 'ResourceGroupId',
        'securityGroupId'           => 'SecurityGroupId',
        'serviceId'                 => 'ServiceId',
        'serviceName'               => 'ServiceName',
        'tag'                       => 'Tag',
        'vpcId'                     => 'VpcId',
        'zone'                      => 'Zone',
        'zonePrivateIpAddressCount' => 'ZonePrivateIpAddressCount',
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
        if (null !== $this->endpointDescription) {
            $res['EndpointDescription'] = $this->endpointDescription;
        }
        if (null !== $this->endpointName) {
            $res['EndpointName'] = $this->endpointName;
        }
        if (null !== $this->endpointType) {
            $res['EndpointType'] = $this->endpointType;
        }
        if (null !== $this->protectedEnabled) {
            $res['ProtectedEnabled'] = $this->protectedEnabled;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
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
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zone) {
            $res['Zone'] = [];
            if (null !== $this->zone && \is_array($this->zone)) {
                $n = 0;
                foreach ($this->zone as $item) {
                    $res['Zone'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->zonePrivateIpAddressCount) {
            $res['ZonePrivateIpAddressCount'] = $this->zonePrivateIpAddressCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVpcEndpointRequest
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
        if (isset($map['EndpointDescription'])) {
            $model->endpointDescription = $map['EndpointDescription'];
        }
        if (isset($map['EndpointName'])) {
            $model->endpointName = $map['EndpointName'];
        }
        if (isset($map['EndpointType'])) {
            $model->endpointType = $map['EndpointType'];
        }
        if (isset($map['ProtectedEnabled'])) {
            $model->protectedEnabled = $map['ProtectedEnabled'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecurityGroupId'])) {
            if (!empty($map['SecurityGroupId'])) {
                $model->securityGroupId = $map['SecurityGroupId'];
            }
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
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
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['Zone'])) {
            if (!empty($map['Zone'])) {
                $model->zone = [];
                $n           = 0;
                foreach ($map['Zone'] as $item) {
                    $model->zone[$n++] = null !== $item ? zone::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ZonePrivateIpAddressCount'])) {
            $model->zonePrivateIpAddressCount = $map['ZonePrivateIpAddressCount'];
        }

        return $model;
    }
}
