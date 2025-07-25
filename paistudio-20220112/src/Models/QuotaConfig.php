<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class QuotaConfig extends Model
{
    /**
     * @var ACS
     */
    public $ACS;

    /**
     * @example ceeb37xxxx
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example 470.199.02
     *
     * @var string
     */
    public $defaultGPUDriver;

    /**
     * @var bool
     */
    public $enableGPUShare;

    /**
     * @var bool
     */
    public $enablePreemptSubquotaWorkloads;

    /**
     * @var bool
     */
    public $enableSubQuotaPreemption;

    /**
     * @var EniCacheConfig
     */
    public $eniCacheConfig;

    /**
     * @var OversoldUsageConfig
     */
    public $oversoldUsageInfo;

    /**
     * @var WorkspaceSpecs[]
     */
    public $resourceSpecs;

    /**
     * @var SandboxCacheConfig
     */
    public $sandboxCacheConfig;

    /**
     * @var SelfQuotaPreemptionConfig
     */
    public $selfQuotaPreemptionConfig;

    /**
     * @var SubQuotaPreemptionConfig
     */
    public $subQuotaPreemptionConfig;

    /**
     * @var string[]
     */
    public $supportGPUDrivers;

    /**
     * @example false
     *
     * @var bool
     */
    public $supportRDMA;

    /**
     * @var UserVpc
     */
    public $userVpc;
    protected $_name = [
        'ACS' => 'ACS',
        'clusterId' => 'ClusterId',
        'defaultGPUDriver' => 'DefaultGPUDriver',
        'enableGPUShare' => 'EnableGPUShare',
        'enablePreemptSubquotaWorkloads' => 'EnablePreemptSubquotaWorkloads',
        'enableSubQuotaPreemption' => 'EnableSubQuotaPreemption',
        'eniCacheConfig' => 'EniCacheConfig',
        'oversoldUsageInfo' => 'OversoldUsageInfo',
        'resourceSpecs' => 'ResourceSpecs',
        'sandboxCacheConfig' => 'SandboxCacheConfig',
        'selfQuotaPreemptionConfig' => 'SelfQuotaPreemptionConfig',
        'subQuotaPreemptionConfig' => 'SubQuotaPreemptionConfig',
        'supportGPUDrivers' => 'SupportGPUDrivers',
        'supportRDMA' => 'SupportRDMA',
        'userVpc' => 'UserVpc',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ACS) {
            $res['ACS'] = null !== $this->ACS ? $this->ACS->toMap() : null;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->defaultGPUDriver) {
            $res['DefaultGPUDriver'] = $this->defaultGPUDriver;
        }
        if (null !== $this->enableGPUShare) {
            $res['EnableGPUShare'] = $this->enableGPUShare;
        }
        if (null !== $this->enablePreemptSubquotaWorkloads) {
            $res['EnablePreemptSubquotaWorkloads'] = $this->enablePreemptSubquotaWorkloads;
        }
        if (null !== $this->enableSubQuotaPreemption) {
            $res['EnableSubQuotaPreemption'] = $this->enableSubQuotaPreemption;
        }
        if (null !== $this->eniCacheConfig) {
            $res['EniCacheConfig'] = null !== $this->eniCacheConfig ? $this->eniCacheConfig->toMap() : null;
        }
        if (null !== $this->oversoldUsageInfo) {
            $res['OversoldUsageInfo'] = null !== $this->oversoldUsageInfo ? $this->oversoldUsageInfo->toMap() : null;
        }
        if (null !== $this->resourceSpecs) {
            $res['ResourceSpecs'] = [];
            if (null !== $this->resourceSpecs && \is_array($this->resourceSpecs)) {
                $n = 0;
                foreach ($this->resourceSpecs as $item) {
                    $res['ResourceSpecs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sandboxCacheConfig) {
            $res['SandboxCacheConfig'] = null !== $this->sandboxCacheConfig ? $this->sandboxCacheConfig->toMap() : null;
        }
        if (null !== $this->selfQuotaPreemptionConfig) {
            $res['SelfQuotaPreemptionConfig'] = null !== $this->selfQuotaPreemptionConfig ? $this->selfQuotaPreemptionConfig->toMap() : null;
        }
        if (null !== $this->subQuotaPreemptionConfig) {
            $res['SubQuotaPreemptionConfig'] = null !== $this->subQuotaPreemptionConfig ? $this->subQuotaPreemptionConfig->toMap() : null;
        }
        if (null !== $this->supportGPUDrivers) {
            $res['SupportGPUDrivers'] = $this->supportGPUDrivers;
        }
        if (null !== $this->supportRDMA) {
            $res['SupportRDMA'] = $this->supportRDMA;
        }
        if (null !== $this->userVpc) {
            $res['UserVpc'] = null !== $this->userVpc ? $this->userVpc->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuotaConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ACS'])) {
            $model->ACS = ACS::fromMap($map['ACS']);
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DefaultGPUDriver'])) {
            $model->defaultGPUDriver = $map['DefaultGPUDriver'];
        }
        if (isset($map['EnableGPUShare'])) {
            $model->enableGPUShare = $map['EnableGPUShare'];
        }
        if (isset($map['EnablePreemptSubquotaWorkloads'])) {
            $model->enablePreemptSubquotaWorkloads = $map['EnablePreemptSubquotaWorkloads'];
        }
        if (isset($map['EnableSubQuotaPreemption'])) {
            $model->enableSubQuotaPreemption = $map['EnableSubQuotaPreemption'];
        }
        if (isset($map['EniCacheConfig'])) {
            $model->eniCacheConfig = EniCacheConfig::fromMap($map['EniCacheConfig']);
        }
        if (isset($map['OversoldUsageInfo'])) {
            $model->oversoldUsageInfo = OversoldUsageConfig::fromMap($map['OversoldUsageInfo']);
        }
        if (isset($map['ResourceSpecs'])) {
            if (!empty($map['ResourceSpecs'])) {
                $model->resourceSpecs = [];
                $n = 0;
                foreach ($map['ResourceSpecs'] as $item) {
                    $model->resourceSpecs[$n++] = null !== $item ? WorkspaceSpecs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SandboxCacheConfig'])) {
            $model->sandboxCacheConfig = SandboxCacheConfig::fromMap($map['SandboxCacheConfig']);
        }
        if (isset($map['SelfQuotaPreemptionConfig'])) {
            $model->selfQuotaPreemptionConfig = SelfQuotaPreemptionConfig::fromMap($map['SelfQuotaPreemptionConfig']);
        }
        if (isset($map['SubQuotaPreemptionConfig'])) {
            $model->subQuotaPreemptionConfig = SubQuotaPreemptionConfig::fromMap($map['SubQuotaPreemptionConfig']);
        }
        if (isset($map['SupportGPUDrivers'])) {
            if (!empty($map['SupportGPUDrivers'])) {
                $model->supportGPUDrivers = $map['SupportGPUDrivers'];
            }
        }
        if (isset($map['SupportRDMA'])) {
            $model->supportRDMA = $map['SupportRDMA'];
        }
        if (isset($map['UserVpc'])) {
            $model->userVpc = UserVpc::fromMap($map['UserVpc']);
        }

        return $model;
    }
}
