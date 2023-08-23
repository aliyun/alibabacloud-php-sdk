<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListProjectsResponseBody\data\projects;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListProjectsResponseBody\data\projects\properties\encryption;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListProjectsResponseBody\data\projects\properties\tableLifecycle;
use AlibabaCloud\Tea\Model;

class properties extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $allowFullScan;

    /**
     * @var string
     */
    public $elderTunnelQuota;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableDecimal2;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableTunnelQuotaRoute;

    /**
     * @var encryption
     */
    public $encryption;

    /**
     * @example 1
     *
     * @var int
     */
    public $retentionDays;

    /**
     * @example 1500
     *
     * @var string
     */
    public $sqlMeteringMax;

    /**
     * @var tableLifecycle
     */
    public $tableLifecycle;

    /**
     * @example Asia/Shanghai
     *
     * @var string
     */
    public $timezone;

    /**
     * @example quota_tunnel
     *
     * @var string
     */
    public $tunnelQuota;

    /**
     * @example 2
     *
     * @var string
     */
    public $typeSystem;
    protected $_name = [
        'allowFullScan'          => 'allowFullScan',
        'elderTunnelQuota'       => 'elderTunnelQuota',
        'enableDecimal2'         => 'enableDecimal2',
        'enableTunnelQuotaRoute' => 'enableTunnelQuotaRoute',
        'encryption'             => 'encryption',
        'retentionDays'          => 'retentionDays',
        'sqlMeteringMax'         => 'sqlMeteringMax',
        'tableLifecycle'         => 'tableLifecycle',
        'timezone'               => 'timezone',
        'tunnelQuota'            => 'tunnelQuota',
        'typeSystem'             => 'typeSystem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowFullScan) {
            $res['allowFullScan'] = $this->allowFullScan;
        }
        if (null !== $this->elderTunnelQuota) {
            $res['elderTunnelQuota'] = $this->elderTunnelQuota;
        }
        if (null !== $this->enableDecimal2) {
            $res['enableDecimal2'] = $this->enableDecimal2;
        }
        if (null !== $this->enableTunnelQuotaRoute) {
            $res['enableTunnelQuotaRoute'] = $this->enableTunnelQuotaRoute;
        }
        if (null !== $this->encryption) {
            $res['encryption'] = null !== $this->encryption ? $this->encryption->toMap() : null;
        }
        if (null !== $this->retentionDays) {
            $res['retentionDays'] = $this->retentionDays;
        }
        if (null !== $this->sqlMeteringMax) {
            $res['sqlMeteringMax'] = $this->sqlMeteringMax;
        }
        if (null !== $this->tableLifecycle) {
            $res['tableLifecycle'] = null !== $this->tableLifecycle ? $this->tableLifecycle->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return properties
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['allowFullScan'])) {
            $model->allowFullScan = $map['allowFullScan'];
        }
        if (isset($map['elderTunnelQuota'])) {
            $model->elderTunnelQuota = $map['elderTunnelQuota'];
        }
        if (isset($map['enableDecimal2'])) {
            $model->enableDecimal2 = $map['enableDecimal2'];
        }
        if (isset($map['enableTunnelQuotaRoute'])) {
            $model->enableTunnelQuotaRoute = $map['enableTunnelQuotaRoute'];
        }
        if (isset($map['encryption'])) {
            $model->encryption = encryption::fromMap($map['encryption']);
        }
        if (isset($map['retentionDays'])) {
            $model->retentionDays = $map['retentionDays'];
        }
        if (isset($map['sqlMeteringMax'])) {
            $model->sqlMeteringMax = $map['sqlMeteringMax'];
        }
        if (isset($map['tableLifecycle'])) {
            $model->tableLifecycle = tableLifecycle::fromMap($map['tableLifecycle']);
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
