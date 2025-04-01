<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceSecurityConfigsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceSecurityConfigsResponseBody\instanceSecurityConfigs\securityConfigs;

class instanceSecurityConfigs extends Model
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
     * @var securityConfigs[]
     */
    public $securityConfigs;

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
        'securityConfigs' => 'SecurityConfigs',
        'totalCheckCount' => 'TotalCheckCount',
        'totalRiskCount' => 'TotalRiskCount',
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
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }

        if (null !== $this->checkTime) {
            $res['CheckTime'] = $this->checkTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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

        if (isset($map['SecurityConfigs'])) {
            if (!empty($map['SecurityConfigs'])) {
                $model->securityConfigs = [];
                $n1 = 0;
                foreach ($map['SecurityConfigs'] as $item1) {
                    $model->securityConfigs[$n1++] = securityConfigs::fromMap($item1);
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
