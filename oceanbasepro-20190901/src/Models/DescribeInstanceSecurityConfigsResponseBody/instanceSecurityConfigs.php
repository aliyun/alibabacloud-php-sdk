<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceSecurityConfigsResponseBody;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceSecurityConfigsResponseBody\instanceSecurityConfigs\securityConfigs;
use AlibabaCloud\Tea\Model;

class instanceSecurityConfigs extends Model
{
    /**
     * @var securityConfigs[]
     */
    public $securityConfigs;

    /**
     * @example 5
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
        'securityConfigs' => 'SecurityConfigs',
        'totalCheckCount' => 'TotalCheckCount',
        'totalRiskCount'  => 'TotalRiskCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityConfigs) {
            $res['SecurityConfigs'] = [];
            if (null !== $this->securityConfigs && \is_array($this->securityConfigs)) {
                $n = 0;
                foreach ($this->securityConfigs as $item) {
                    $res['SecurityConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return instanceSecurityConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityConfigs'])) {
            if (!empty($map['SecurityConfigs'])) {
                $model->securityConfigs = [];
                $n                      = 0;
                foreach ($map['SecurityConfigs'] as $item) {
                    $model->securityConfigs[$n++] = null !== $item ? securityConfigs::fromMap($item) : $item;
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
