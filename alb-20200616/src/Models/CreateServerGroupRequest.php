<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateServerGroupRequest\connectionDrainConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateServerGroupRequest\healthCheckConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateServerGroupRequest\slowStartConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateServerGroupRequest\stickySessionConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateServerGroupRequest\tag;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateServerGroupRequest\uchConfig;

class CreateServerGroupRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var connectionDrainConfig
     */
    public $connectionDrainConfig;
    /**
     * @var bool
     */
    public $crossZoneEnabled;
    /**
     * @var bool
     */
    public $dryRun;
    /**
     * @var healthCheckConfig
     */
    public $healthCheckConfig;
    /**
     * @var bool
     */
    public $ipv6Enabled;
    /**
     * @var string
     */
    public $protocol;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $scheduler;
    /**
     * @var string
     */
    public $serverGroupName;
    /**
     * @var string
     */
    public $serverGroupType;
    /**
     * @var string
     */
    public $serviceName;
    /**
     * @var slowStartConfig
     */
    public $slowStartConfig;
    /**
     * @var stickySessionConfig
     */
    public $stickySessionConfig;
    /**
     * @var tag[]
     */
    public $tag;
    /**
     * @var uchConfig
     */
    public $uchConfig;
    /**
     * @var bool
     */
    public $upstreamKeepaliveEnabled;
    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'clientToken'              => 'ClientToken',
        'connectionDrainConfig'    => 'ConnectionDrainConfig',
        'crossZoneEnabled'         => 'CrossZoneEnabled',
        'dryRun'                   => 'DryRun',
        'healthCheckConfig'        => 'HealthCheckConfig',
        'ipv6Enabled'              => 'Ipv6Enabled',
        'protocol'                 => 'Protocol',
        'resourceGroupId'          => 'ResourceGroupId',
        'scheduler'                => 'Scheduler',
        'serverGroupName'          => 'ServerGroupName',
        'serverGroupType'          => 'ServerGroupType',
        'serviceName'              => 'ServiceName',
        'slowStartConfig'          => 'SlowStartConfig',
        'stickySessionConfig'      => 'StickySessionConfig',
        'tag'                      => 'Tag',
        'uchConfig'                => 'UchConfig',
        'upstreamKeepaliveEnabled' => 'UpstreamKeepaliveEnabled',
        'vpcId'                    => 'VpcId',
    ];

    public function validate()
    {
        if (null !== $this->connectionDrainConfig) {
            $this->connectionDrainConfig->validate();
        }
        if (null !== $this->healthCheckConfig) {
            $this->healthCheckConfig->validate();
        }
        if (null !== $this->slowStartConfig) {
            $this->slowStartConfig->validate();
        }
        if (null !== $this->stickySessionConfig) {
            $this->stickySessionConfig->validate();
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        if (null !== $this->uchConfig) {
            $this->uchConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->connectionDrainConfig) {
            $res['ConnectionDrainConfig'] = null !== $this->connectionDrainConfig ? $this->connectionDrainConfig->toArray($noStream) : $this->connectionDrainConfig;
        }

        if (null !== $this->crossZoneEnabled) {
            $res['CrossZoneEnabled'] = $this->crossZoneEnabled;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->healthCheckConfig) {
            $res['HealthCheckConfig'] = null !== $this->healthCheckConfig ? $this->healthCheckConfig->toArray($noStream) : $this->healthCheckConfig;
        }

        if (null !== $this->ipv6Enabled) {
            $res['Ipv6Enabled'] = $this->ipv6Enabled;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }

        if (null !== $this->serverGroupName) {
            $res['ServerGroupName'] = $this->serverGroupName;
        }

        if (null !== $this->serverGroupType) {
            $res['ServerGroupType'] = $this->serverGroupType;
        }

        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        if (null !== $this->slowStartConfig) {
            $res['SlowStartConfig'] = null !== $this->slowStartConfig ? $this->slowStartConfig->toArray($noStream) : $this->slowStartConfig;
        }

        if (null !== $this->stickySessionConfig) {
            $res['StickySessionConfig'] = null !== $this->stickySessionConfig ? $this->stickySessionConfig->toArray($noStream) : $this->stickySessionConfig;
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

        if (null !== $this->uchConfig) {
            $res['UchConfig'] = null !== $this->uchConfig ? $this->uchConfig->toArray($noStream) : $this->uchConfig;
        }

        if (null !== $this->upstreamKeepaliveEnabled) {
            $res['UpstreamKeepaliveEnabled'] = $this->upstreamKeepaliveEnabled;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['ConnectionDrainConfig'])) {
            $model->connectionDrainConfig = connectionDrainConfig::fromMap($map['ConnectionDrainConfig']);
        }

        if (isset($map['CrossZoneEnabled'])) {
            $model->crossZoneEnabled = $map['CrossZoneEnabled'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['HealthCheckConfig'])) {
            $model->healthCheckConfig = healthCheckConfig::fromMap($map['HealthCheckConfig']);
        }

        if (isset($map['Ipv6Enabled'])) {
            $model->ipv6Enabled = $map['Ipv6Enabled'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }

        if (isset($map['ServerGroupName'])) {
            $model->serverGroupName = $map['ServerGroupName'];
        }

        if (isset($map['ServerGroupType'])) {
            $model->serverGroupType = $map['ServerGroupType'];
        }

        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        if (isset($map['SlowStartConfig'])) {
            $model->slowStartConfig = slowStartConfig::fromMap($map['SlowStartConfig']);
        }

        if (isset($map['StickySessionConfig'])) {
            $model->stickySessionConfig = stickySessionConfig::fromMap($map['StickySessionConfig']);
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

        if (isset($map['UchConfig'])) {
            $model->uchConfig = uchConfig::fromMap($map['UchConfig']);
        }

        if (isset($map['UpstreamKeepaliveEnabled'])) {
            $model->upstreamKeepaliveEnabled = $map['UpstreamKeepaliveEnabled'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
