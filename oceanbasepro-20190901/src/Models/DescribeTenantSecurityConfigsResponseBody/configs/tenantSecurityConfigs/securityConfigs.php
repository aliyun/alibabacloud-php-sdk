<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantSecurityConfigsResponseBody\configs\tenantSecurityConfigs;

use AlibabaCloud\Tea\Model;

class securityConfigs extends Model
{
    /**
     * @description The name of the check item.
     *
     * @example Check whether the scope of the cluster allowlist is too big
     *
     * @var string
     */
    public $configDescription;

    /**
     * @description The group of the risk.
     *
     * @example WHITELIST
     *
     * @var string
     */
    public $configGroup;

    /**
     * @description The name of the risk.
     *
     * @example WHITELIST_RANGE_LARGE
     *
     * @var string
     */
    public $configName;

    /**
     * @description Indicates whether the risk causes security issues.
     *
     * @example true
     *
     * @var bool
     */
    public $risk;

    /**
     * @description The description of the risk.
     *
     * @example The scope of the allowlist is too big.
     *
     * @var string
     */
    public $riskDescription;
    protected $_name = [
        'configDescription' => 'ConfigDescription',
        'configGroup'       => 'ConfigGroup',
        'configName'        => 'ConfigName',
        'risk'              => 'Risk',
        'riskDescription'   => 'RiskDescription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configDescription) {
            $res['ConfigDescription'] = $this->configDescription;
        }
        if (null !== $this->configGroup) {
            $res['ConfigGroup'] = $this->configGroup;
        }
        if (null !== $this->configName) {
            $res['ConfigName'] = $this->configName;
        }
        if (null !== $this->risk) {
            $res['Risk'] = $this->risk;
        }
        if (null !== $this->riskDescription) {
            $res['RiskDescription'] = $this->riskDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigDescription'])) {
            $model->configDescription = $map['ConfigDescription'];
        }
        if (isset($map['ConfigGroup'])) {
            $model->configGroup = $map['ConfigGroup'];
        }
        if (isset($map['ConfigName'])) {
            $model->configName = $map['ConfigName'];
        }
        if (isset($map['Risk'])) {
            $model->risk = $map['Risk'];
        }
        if (isset($map['RiskDescription'])) {
            $model->riskDescription = $map['RiskDescription'];
        }

        return $model;
    }
}
