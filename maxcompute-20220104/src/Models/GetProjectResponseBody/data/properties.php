<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\properties\encryption;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\properties\externalProjectProperties;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\properties\storageTierInfo;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\properties\tableLifecycle;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\properties\tableLifecycleConfig;

class properties extends Model
{
    /**
     * @var bool
     */
    public $allowFullScan;

    /**
     * @var int
     */
    public $autoMvQuotaGb;

    /**
     * @var string
     */
    public $elderTunnelQuota;

    /**
     * @var bool
     */
    public $enableAutoMv;

    /**
     * @var bool
     */
    public $enableDecimal2;

    /**
     * @var bool
     */
    public $enableDr;

    /**
     * @var bool
     */
    public $enableFdcCacheForce;

    /**
     * @var bool
     */
    public $enableTieredStorage;

    /**
     * @var bool
     */
    public $enableTunnelQuotaRoute;

    /**
     * @var encryption
     */
    public $encryption;

    /**
     * @var externalProjectProperties
     */
    public $externalProjectProperties;

    /**
     * @var string
     */
    public $fdcQuota;

    /**
     * @var int
     */
    public $retentionDays;

    /**
     * @var string
     */
    public $sqlMeteringMax;

    /**
     * @var storageTierInfo
     */
    public $storageTierInfo;

    /**
     * @var tableLifecycle
     */
    public $tableLifecycle;

    /**
     * @var tableLifecycleConfig
     */
    public $tableLifecycleConfig;

    /**
     * @var string
     */
    public $timezone;

    /**
     * @var string
     */
    public $tunnelQuota;

    /**
     * @var string
     */
    public $typeSystem;
    protected $_name = [
        'allowFullScan' => 'allowFullScan',
        'autoMvQuotaGb' => 'autoMvQuotaGb',
        'elderTunnelQuota' => 'elderTunnelQuota',
        'enableAutoMv' => 'enableAutoMv',
        'enableDecimal2' => 'enableDecimal2',
        'enableDr' => 'enableDr',
        'enableFdcCacheForce' => 'enableFdcCacheForce',
        'enableTieredStorage' => 'enableTieredStorage',
        'enableTunnelQuotaRoute' => 'enableTunnelQuotaRoute',
        'encryption' => 'encryption',
        'externalProjectProperties' => 'externalProjectProperties',
        'fdcQuota' => 'fdcQuota',
        'retentionDays' => 'retentionDays',
        'sqlMeteringMax' => 'sqlMeteringMax',
        'storageTierInfo' => 'storageTierInfo',
        'tableLifecycle' => 'tableLifecycle',
        'tableLifecycleConfig' => 'tableLifecycleConfig',
        'timezone' => 'timezone',
        'tunnelQuota' => 'tunnelQuota',
        'typeSystem' => 'typeSystem',
    ];

    public function validate()
    {
        if (null !== $this->encryption) {
            $this->encryption->validate();
        }
        if (null !== $this->externalProjectProperties) {
            $this->externalProjectProperties->validate();
        }
        if (null !== $this->storageTierInfo) {
            $this->storageTierInfo->validate();
        }
        if (null !== $this->tableLifecycle) {
            $this->tableLifecycle->validate();
        }
        if (null !== $this->tableLifecycleConfig) {
            $this->tableLifecycleConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowFullScan) {
            $res['allowFullScan'] = $this->allowFullScan;
        }

        if (null !== $this->autoMvQuotaGb) {
            $res['autoMvQuotaGb'] = $this->autoMvQuotaGb;
        }

        if (null !== $this->elderTunnelQuota) {
            $res['elderTunnelQuota'] = $this->elderTunnelQuota;
        }

        if (null !== $this->enableAutoMv) {
            $res['enableAutoMv'] = $this->enableAutoMv;
        }

        if (null !== $this->enableDecimal2) {
            $res['enableDecimal2'] = $this->enableDecimal2;
        }

        if (null !== $this->enableDr) {
            $res['enableDr'] = $this->enableDr;
        }

        if (null !== $this->enableFdcCacheForce) {
            $res['enableFdcCacheForce'] = $this->enableFdcCacheForce;
        }

        if (null !== $this->enableTieredStorage) {
            $res['enableTieredStorage'] = $this->enableTieredStorage;
        }

        if (null !== $this->enableTunnelQuotaRoute) {
            $res['enableTunnelQuotaRoute'] = $this->enableTunnelQuotaRoute;
        }

        if (null !== $this->encryption) {
            $res['encryption'] = null !== $this->encryption ? $this->encryption->toArray($noStream) : $this->encryption;
        }

        if (null !== $this->externalProjectProperties) {
            $res['externalProjectProperties'] = null !== $this->externalProjectProperties ? $this->externalProjectProperties->toArray($noStream) : $this->externalProjectProperties;
        }

        if (null !== $this->fdcQuota) {
            $res['fdcQuota'] = $this->fdcQuota;
        }

        if (null !== $this->retentionDays) {
            $res['retentionDays'] = $this->retentionDays;
        }

        if (null !== $this->sqlMeteringMax) {
            $res['sqlMeteringMax'] = $this->sqlMeteringMax;
        }

        if (null !== $this->storageTierInfo) {
            $res['storageTierInfo'] = null !== $this->storageTierInfo ? $this->storageTierInfo->toArray($noStream) : $this->storageTierInfo;
        }

        if (null !== $this->tableLifecycle) {
            $res['tableLifecycle'] = null !== $this->tableLifecycle ? $this->tableLifecycle->toArray($noStream) : $this->tableLifecycle;
        }

        if (null !== $this->tableLifecycleConfig) {
            $res['tableLifecycleConfig'] = null !== $this->tableLifecycleConfig ? $this->tableLifecycleConfig->toArray($noStream) : $this->tableLifecycleConfig;
        }

        if (null !== $this->timezone) {
            $res['timezone'] = $this->timezone;
        }

        if (null !== $this->tunnelQuota) {
            $res['tunnelQuota'] = $this->tunnelQuota;
        }

        if (null !== $this->typeSystem) {
            $res['typeSystem'] = $this->typeSystem;
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
        if (isset($map['allowFullScan'])) {
            $model->allowFullScan = $map['allowFullScan'];
        }

        if (isset($map['autoMvQuotaGb'])) {
            $model->autoMvQuotaGb = $map['autoMvQuotaGb'];
        }

        if (isset($map['elderTunnelQuota'])) {
            $model->elderTunnelQuota = $map['elderTunnelQuota'];
        }

        if (isset($map['enableAutoMv'])) {
            $model->enableAutoMv = $map['enableAutoMv'];
        }

        if (isset($map['enableDecimal2'])) {
            $model->enableDecimal2 = $map['enableDecimal2'];
        }

        if (isset($map['enableDr'])) {
            $model->enableDr = $map['enableDr'];
        }

        if (isset($map['enableFdcCacheForce'])) {
            $model->enableFdcCacheForce = $map['enableFdcCacheForce'];
        }

        if (isset($map['enableTieredStorage'])) {
            $model->enableTieredStorage = $map['enableTieredStorage'];
        }

        if (isset($map['enableTunnelQuotaRoute'])) {
            $model->enableTunnelQuotaRoute = $map['enableTunnelQuotaRoute'];
        }

        if (isset($map['encryption'])) {
            $model->encryption = encryption::fromMap($map['encryption']);
        }

        if (isset($map['externalProjectProperties'])) {
            $model->externalProjectProperties = externalProjectProperties::fromMap($map['externalProjectProperties']);
        }

        if (isset($map['fdcQuota'])) {
            $model->fdcQuota = $map['fdcQuota'];
        }

        if (isset($map['retentionDays'])) {
            $model->retentionDays = $map['retentionDays'];
        }

        if (isset($map['sqlMeteringMax'])) {
            $model->sqlMeteringMax = $map['sqlMeteringMax'];
        }

        if (isset($map['storageTierInfo'])) {
            $model->storageTierInfo = storageTierInfo::fromMap($map['storageTierInfo']);
        }

        if (isset($map['tableLifecycle'])) {
            $model->tableLifecycle = tableLifecycle::fromMap($map['tableLifecycle']);
        }

        if (isset($map['tableLifecycleConfig'])) {
            $model->tableLifecycleConfig = tableLifecycleConfig::fromMap($map['tableLifecycleConfig']);
        }

        if (isset($map['timezone'])) {
            $model->timezone = $map['timezone'];
        }

        if (isset($map['tunnelQuota'])) {
            $model->tunnelQuota = $map['tunnelQuota'];
        }

        if (isset($map['typeSystem'])) {
            $model->typeSystem = $map['typeSystem'];
        }

        return $model;
    }
}
