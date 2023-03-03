<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantSecurityConfigsResponseBody;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantSecurityConfigsResponseBody\configs\tenantSecurityConfigs;
use AlibabaCloud\Tea\Model;

class configs extends Model
{
    /**
     * @var tenantSecurityConfigs[]
     */
    public $tenantSecurityConfigs;

    /**
     * @example 4
     *
     * @var int
     */
    public $totalCheckCount;

    /**
     * @example 0
     *
     * @var int
     */
    public $totalRiskCount;
    protected $_name = [
        'tenantSecurityConfigs' => 'TenantSecurityConfigs',
        'totalCheckCount'       => 'TotalCheckCount',
        'totalRiskCount'        => 'TotalRiskCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tenantSecurityConfigs) {
            $res['TenantSecurityConfigs'] = [];
            if (null !== $this->tenantSecurityConfigs && \is_array($this->tenantSecurityConfigs)) {
                $n = 0;
                foreach ($this->tenantSecurityConfigs as $item) {
                    $res['TenantSecurityConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCheckCount) {
            $res['TotalCheckCount'] = $this->totalCheckCount;
        }
        if (null !== $this->totalRiskCount) {
            $res['TotalRiskCount'] = $this->totalRiskCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TenantSecurityConfigs'])) {
            if (!empty($map['TenantSecurityConfigs'])) {
                $model->tenantSecurityConfigs = [];
                $n                            = 0;
                foreach ($map['TenantSecurityConfigs'] as $item) {
                    $model->tenantSecurityConfigs[$n++] = null !== $item ? tenantSecurityConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCheckCount'])) {
            $model->totalCheckCount = $map['TotalCheckCount'];
        }
        if (isset($map['TotalRiskCount'])) {
            $model->totalRiskCount = $map['TotalRiskCount'];
        }

        return $model;
    }
}
