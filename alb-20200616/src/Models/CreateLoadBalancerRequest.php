<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateLoadBalancerRequest\loadBalancerBillingConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateLoadBalancerRequest\modificationProtectionConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateLoadBalancerRequest\tag;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateLoadBalancerRequest\zoneMappings;

class CreateLoadBalancerRequest extends Model
{
    /**
     * @var string
     */
    public $addressAllocatedMode;
    /**
     * @var string
     */
    public $addressIpVersion;
    /**
     * @var string
     */
    public $addressType;
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var bool
     */
    public $deletionProtectionEnabled;
    /**
     * @var bool
     */
    public $dryRun;
    /**
     * @var loadBalancerBillingConfig
     */
    public $loadBalancerBillingConfig;
    /**
     * @var string
     */
    public $loadBalancerEdition;
    /**
     * @var string
     */
    public $loadBalancerName;
    /**
     * @var modificationProtectionConfig
     */
    public $modificationProtectionConfig;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var tag[]
     */
    public $tag;
    /**
     * @var string
     */
    public $vpcId;
    /**
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
        if (null !== $this->loadBalancerBillingConfig) {
            $this->loadBalancerBillingConfig->validate();
        }
        if (null !== $this->modificationProtectionConfig) {
            $this->modificationProtectionConfig->validate();
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        if (\is_array($this->zoneMappings)) {
            Model::validateArray($this->zoneMappings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['LoadBalancerBillingConfig'] = null !== $this->loadBalancerBillingConfig ? $this->loadBalancerBillingConfig->toArray($noStream) : $this->loadBalancerBillingConfig;
        }

        if (null !== $this->loadBalancerEdition) {
            $res['LoadBalancerEdition'] = $this->loadBalancerEdition;
        }

        if (null !== $this->loadBalancerName) {
            $res['LoadBalancerName'] = $this->loadBalancerName;
        }

        if (null !== $this->modificationProtectionConfig) {
            $res['ModificationProtectionConfig'] = null !== $this->modificationProtectionConfig ? $this->modificationProtectionConfig->toArray($noStream) : $this->modificationProtectionConfig;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1         = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->zoneMappings) {
            if (\is_array($this->zoneMappings)) {
                $res['ZoneMappings'] = [];
                $n1                  = 0;
                foreach ($this->zoneMappings as $item1) {
                    $res['ZoneMappings'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1         = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['ZoneMappings'])) {
            if (!empty($map['ZoneMappings'])) {
                $model->zoneMappings = [];
                $n1                  = 0;
                foreach ($map['ZoneMappings'] as $item1) {
                    $model->zoneMappings[$n1++] = zoneMappings::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
