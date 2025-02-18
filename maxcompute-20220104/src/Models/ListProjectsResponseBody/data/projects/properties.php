<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListProjectsResponseBody\data\projects;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListProjectsResponseBody\data\projects\properties\encryption;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListProjectsResponseBody\data\projects\properties\externalProjectProperties;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListProjectsResponseBody\data\projects\properties\tableLifecycle;

class properties extends Model
{
    /**
     * @var bool
     */
    public $allowFullScan;
    /**
     * @var bool
     */
    public $enableDecimal2;
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
     * @var int
     */
    public $retentionDays;
    /**
     * @var string
     */
    public $sqlMeteringMax;
    /**
     * @var tableLifecycle
     */
    public $tableLifecycle;
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
        'allowFullScan'             => 'allowFullScan',
        'enableDecimal2'            => 'enableDecimal2',
        'enableTunnelQuotaRoute'    => 'enableTunnelQuotaRoute',
        'encryption'                => 'encryption',
        'externalProjectProperties' => 'externalProjectProperties',
        'retentionDays'             => 'retentionDays',
        'sqlMeteringMax'            => 'sqlMeteringMax',
        'tableLifecycle'            => 'tableLifecycle',
        'timezone'                  => 'timezone',
        'tunnelQuota'               => 'tunnelQuota',
        'typeSystem'                => 'typeSystem',
    ];

    public function validate()
    {
        if (null !== $this->encryption) {
            $this->encryption->validate();
        }
        if (null !== $this->externalProjectProperties) {
            $this->externalProjectProperties->validate();
        }
        if (null !== $this->tableLifecycle) {
            $this->tableLifecycle->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowFullScan) {
            $res['allowFullScan'] = $this->allowFullScan;
        }

        if (null !== $this->enableDecimal2) {
            $res['enableDecimal2'] = $this->enableDecimal2;
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

        if (null !== $this->retentionDays) {
            $res['retentionDays'] = $this->retentionDays;
        }

        if (null !== $this->sqlMeteringMax) {
            $res['sqlMeteringMax'] = $this->sqlMeteringMax;
        }

        if (null !== $this->tableLifecycle) {
            $res['tableLifecycle'] = null !== $this->tableLifecycle ? $this->tableLifecycle->toArray($noStream) : $this->tableLifecycle;
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

        if (isset($map['enableDecimal2'])) {
            $model->enableDecimal2 = $map['enableDecimal2'];
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
