<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantSecurityConfigsResponseBody\configs\tenantSecurityConfigs;

use AlibabaCloud\Tea\Model;

class securityConfigs extends Model
{
    /**
     * @example 校验集群白名单范围是否过大
     *
     * @var string
     */
    public $configDescription;

    /**
     * @example WHITELIST
     *
     * @var string
     */
    public $configGroup;

    /**
     * @example WHITELIST_RANGE_LARGE
     *
     * @var string
     */
    public $configName;

    /**
     * @example true
     *
     * @var bool
     */
    public $risk;

    /**
     * @example 白名单开放过大，建议按需设置
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
