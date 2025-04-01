<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantSecurityConfigsResponseBody\configs;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantSecurityConfigsResponseBody\configs\tenantSecurityConfigs\securityConfigs;

class tenantSecurityConfigs extends Model
{
    /**
     * @var int
     */
    public $riskCount;

    /**
     * @var securityConfigs[]
     */
    public $securityConfigs;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $tenantName;
    protected $_name = [
        'riskCount' => 'RiskCount',
        'securityConfigs' => 'SecurityConfigs',
        'tenantId' => 'TenantId',
        'tenantName' => 'TenantName',
    ];

    public function validate()
    {
        if (\is_array($this->securityConfigs)) {
            Model::validateArray($this->securityConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->riskCount) {
            $res['RiskCount'] = $this->riskCount;
        }

        if (null !== $this->securityConfigs) {
            if (\is_array($this->securityConfigs)) {
                $res['SecurityConfigs'] = [];
                $n1 = 0;
                foreach ($this->securityConfigs as $item1) {
                    $res['SecurityConfigs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RiskCount'])) {
            $model->riskCount = $map['RiskCount'];
        }

        if (isset($map['SecurityConfigs'])) {
            if (!empty($map['SecurityConfigs'])) {
                $model->securityConfigs = [];
                $n1 = 0;
                foreach ($map['SecurityConfigs'] as $item1) {
                    $model->securityConfigs[$n1++] = securityConfigs::fromMap($item1);
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
