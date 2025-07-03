<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantSecurityConfigsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantSecurityConfigsResponseBody\configs\tenantSecurityConfigs;

class configs extends Model
{
    /**
     * @var string
     */
    public $checkId;

    /**
     * @var string
     */
    public $checkTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var tenantSecurityConfigs[]
     */
    public $tenantSecurityConfigs;

    /**
     * @var int
     */
    public $totalCheckCount;

    /**
     * @var int
     */
    public $totalRiskCount;
    protected $_name = [
        'checkId' => 'CheckId',
        'checkTime' => 'CheckTime',
        'instanceId' => 'InstanceId',
        'tenantSecurityConfigs' => 'TenantSecurityConfigs',
        'totalCheckCount' => 'TotalCheckCount',
        'totalRiskCount' => 'TotalRiskCount',
    ];

    public function validate()
    {
        if (\is_array($this->tenantSecurityConfigs)) {
            Model::validateArray($this->tenantSecurityConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }

        if (null !== $this->checkTime) {
            $res['CheckTime'] = $this->checkTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->tenantSecurityConfigs) {
            if (\is_array($this->tenantSecurityConfigs)) {
                $res['TenantSecurityConfigs'] = [];
                $n1 = 0;
                foreach ($this->tenantSecurityConfigs as $item1) {
                    $res['TenantSecurityConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }

        if (isset($map['CheckTime'])) {
            $model->checkTime = $map['CheckTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['TenantSecurityConfigs'])) {
            if (!empty($map['TenantSecurityConfigs'])) {
                $model->tenantSecurityConfigs = [];
                $n1 = 0;
                foreach ($map['TenantSecurityConfigs'] as $item1) {
                    $model->tenantSecurityConfigs[$n1] = tenantSecurityConfigs::fromMap($item1);
                    ++$n1;
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
