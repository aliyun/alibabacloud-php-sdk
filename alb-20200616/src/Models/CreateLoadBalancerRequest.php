<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\SDK\Alb\V20200616\Models\CreateLoadBalancerRequest\loadBalancerBillingConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateLoadBalancerRequest\modificationProtectionConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateLoadBalancerRequest\tag;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateLoadBalancerRequest\zoneMappings;
use AlibabaCloud\Tea\Model;

class CreateLoadBalancerRequest extends Model
{
    /**
     * @description The mode in which IP addresses are allocated. Valid values:
     *
     *   **Fixed**: The ALB instance uses a static IP address.
     *   **Dynamic**: dynamically allocates an IP address to each zone of the ALB instance.
     *
     * @example Dynamic
     *
     * @var string
     */
    public $addressAllocatedMode;

    /**
     * @description The protocol version. Valid values:
     *
     *   **IPv4:** IPv4.
     *   **DualStack:** dual stack.
     *
     * @example IPv4
     *
     * @var string
     */
    public $addressIpVersion;

    /**
     * @description The type of the address of the ALB instance. Valid values:
     *
     *   **Internet:** The ALB instance uses a public IP address. The domain name of the ALB instance is resolved to the public IP address. In this case, the ALB instance can be accessed over the Internet.
     *   **Intranet:** The ALB instance uses a private IP address. The domain name of the ALB instance is resolved to the private IP address. In this case, the ALB instance can be accessed over the VPC in which the ALB instance is deployed.
     *
     * This parameter is required.
     * @example Internet
     *
     * @var string
     */
    public $addressType;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must ensure that it is unique among different requests. The token can only contain ASCII characters.
     *
     * >  If you do not specify this parameter, the system uses the value of **RequestId** as the value of **ClientToken**. The value of the **RequestId** parameter may be different for each API request.
     * @example 5A2CFF0E-5718-45B5-9D4D-70B3FF3898
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to enable deletion protection. Default value: false. Valid values:
     *
     *   **true:** enables deletion protection.
     *   **false:** disables deletion protection.
     *
     * @example false
     *
     * @var bool
     */
    public $deletionProtectionEnabled;

    /**
     * @description Specifies whether to perform a dry run. Default value: false. Valid values:
     *
     *   **true:** performs a dry run. The system checks the required parameters, request format, and service limits. If the request fails the dry run, an error message is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *   **false:** performs a dry run and sends the request. If the request passes the dry run, a 2xx HTTP status code is returned and the operation is performed.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The billing method of the ALB instance.
     *
     * This parameter is required.
     * @var loadBalancerBillingConfig
     */
    public $loadBalancerBillingConfig;

    /**
     * @description The edition of the ALB instance. The features and billing rules vary based on the edition of the ALB instance. Valid values:
     *
     *   **Basic:** basic.
     *   **Standard:** standard.
     *   **StandardWithWaf:** WAF-enabled.
     *
     * This parameter is required.
     * @example Standard
     *
     * @var string
     */
    public $loadBalancerEdition;

    /**
     * @description The name of the ALB instance.
     *
     * The name must be 2 to 128 characters in length, and can contain letters, digits, periods (.), underscores (_), and hyphens (-). The name must start with a letter.
     * @example alb1
     *
     * @var string
     */
    public $loadBalancerName;

    /**
     * @description The configuration of the configuration read-only mode.
     *
     * @var modificationProtectionConfig
     */
    public $modificationProtectionConfig;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-atstuj3rtop****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The ID of the virtual private cloud (VPC) in which you want to create the ALB instance.
     *
     * This parameter is required.
     * @example vpc-bp1b49rqrybk45nio****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The zones and the vSwitches in the zones. You must specify at least two zones.
     *
     * This parameter is required.
     * @var zoneMappings[]
     */
    public $zoneMappings;
    protected $_name = [
        'addressAllocatedMode'         => 'AddressAllocatedMode',
        'addressIpVersion'             => 'AddressIpVersion',
        'addressType'                  => 'AddressType',
        'clientToken'                  => 'ClientToken',
        'deletionProtectionEnabled'    => 'DeletionProtectionEnabled',
        'dryRun'                       => 'DryRun',
        'loadBalancerBillingConfig'    => 'LoadBalancerBillingConfig',
        'loadBalancerEdition'          => 'LoadBalancerEdition',
        'loadBalancerName'             => 'LoadBalancerName',
        'modificationProtectionConfig' => 'ModificationProtectionConfig',
        'resourceGroupId'              => 'ResourceGroupId',
        'tag'                          => 'Tag',
        'vpcId'                        => 'VpcId',
        'zoneMappings'                 => 'ZoneMappings',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressAllocatedMode) {
            $res['AddressAllocatedMode'] = $this->addressAllocatedMode;
        }
        if (null !== $this->addressIpVersion) {
            $res['AddressIpVersion'] = $this->addressIpVersion;
        }
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->deletionProtectionEnabled) {
            $res['DeletionProtectionEnabled'] = $this->deletionProtectionEnabled;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->loadBalancerBillingConfig) {
            $res['LoadBalancerBillingConfig'] = null !== $this->loadBalancerBillingConfig ? $this->loadBalancerBillingConfig->toMap() : null;
        }
        if (null !== $this->loadBalancerEdition) {
            $res['LoadBalancerEdition'] = $this->loadBalancerEdition;
        }
        if (null !== $this->loadBalancerName) {
            $res['LoadBalancerName'] = $this->loadBalancerName;
        }
        if (null !== $this->modificationProtectionConfig) {
            $res['ModificationProtectionConfig'] = null !== $this->modificationProtectionConfig ? $this->modificationProtectionConfig->toMap() : null;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (null !== $this->zoneMappings) {
            $res['ZoneMappings'] = [];
            if (null !== $this->zoneMappings && \is_array($this->zoneMappings)) {
                $n = 0;
                foreach ($this->zoneMappings as $item) {
                    $res['ZoneMappings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLoadBalancerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressAllocatedMode'])) {
            $model->addressAllocatedMode = $map['AddressAllocatedMode'];
        }
        if (isset($map['AddressIpVersion'])) {
            $model->addressIpVersion = $map['AddressIpVersion'];
        }
        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DeletionProtectionEnabled'])) {
            $model->deletionProtectionEnabled = $map['DeletionProtectionEnabled'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['LoadBalancerBillingConfig'])) {
            $model->loadBalancerBillingConfig = loadBalancerBillingConfig::fromMap($map['LoadBalancerBillingConfig']);
        }
        if (isset($map['LoadBalancerEdition'])) {
            $model->loadBalancerEdition = $map['LoadBalancerEdition'];
        }
        if (isset($map['LoadBalancerName'])) {
            $model->loadBalancerName = $map['LoadBalancerName'];
        }
        if (isset($map['ModificationProtectionConfig'])) {
            $model->modificationProtectionConfig = modificationProtectionConfig::fromMap($map['ModificationProtectionConfig']);
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
        if (isset($map['ZoneMappings'])) {
            if (!empty($map['ZoneMappings'])) {
                $model->zoneMappings = [];
                $n                   = 0;
                foreach ($map['ZoneMappings'] as $item) {
                    $model->zoneMappings[$n++] = null !== $item ? zoneMappings::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
