<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantSecurityConfigsResponseBody\configs;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantSecurityConfigsResponseBody\configs\tenantSecurityConfigs\securityConfigs;
use AlibabaCloud\Tea\Model;

class tenantSecurityConfigs extends Model
{
    /**
     * @description The number of detected tenant security risks.
     *
     * @example 0
     *
     * @var int
     */
    public $riskCount;

    /**
     * @description The list of risks.
     *
     * @var securityConfigs[]
     */
    public $securityConfigs;

    /**
     * @description The ID of the tenant.
     *
     * @example xxx
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The name of the tenant.
     *
     * @example xxx
     *
     * @var string
     */
    public $tenantName;
    protected $_name = [
        'riskCount'       => 'RiskCount',
        'securityConfigs' => 'SecurityConfigs',
        'tenantId'        => 'TenantId',
        'tenantName'      => 'TenantName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->riskCount) {
            $res['RiskCount'] = $this->riskCount;
        }
        if (null !== $this->securityConfigs) {
            $res['SecurityConfigs'] = [];
            if (null !== $this->securityConfigs && \is_array($this->securityConfigs)) {
                $n = 0;
                foreach ($this->securityConfigs as $item) {
                    $res['SecurityConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tenantSecurityConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RiskCount'])) {
            $model->riskCount = $map['RiskCount'];
        }
        if (isset($map['SecurityConfigs'])) {
            if (!empty($map['SecurityConfigs'])) {
                $model->securityConfigs = [];
                $n                      = 0;
                foreach ($map['SecurityConfigs'] as $item) {
                    $model->securityConfigs[$n++] = null !== $item ? securityConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }

        return $model;
    }
}
