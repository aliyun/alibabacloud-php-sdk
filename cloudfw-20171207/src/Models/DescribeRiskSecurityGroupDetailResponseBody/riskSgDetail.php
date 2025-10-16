<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskSecurityGroupDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskSecurityGroupDetailResponseBody\riskSgDetail\ecsInfo;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskSecurityGroupDetailResponseBody\riskSgDetail\ruleInfo;

class riskSgDetail extends Model
{
    /**
     * @var int
     */
    public $ecsCount;

    /**
     * @var ecsInfo[]
     */
    public $ecsInfo;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $regionNo;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var ruleInfo[]
     */
    public $ruleInfo;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'ecsCount' => 'EcsCount',
        'ecsInfo' => 'EcsInfo',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'regionNo' => 'RegionNo',
        'riskLevel' => 'RiskLevel',
        'ruleInfo' => 'RuleInfo',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->ecsInfo)) {
            Model::validateArray($this->ecsInfo);
        }
        if (\is_array($this->ruleInfo)) {
            Model::validateArray($this->ruleInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ecsCount) {
            $res['EcsCount'] = $this->ecsCount;
        }

        if (null !== $this->ecsInfo) {
            if (\is_array($this->ecsInfo)) {
                $res['EcsInfo'] = [];
                $n1 = 0;
                foreach ($this->ecsInfo as $item1) {
                    $res['EcsInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->ruleInfo) {
            if (\is_array($this->ruleInfo)) {
                $res['RuleInfo'] = [];
                $n1 = 0;
                foreach ($this->ruleInfo as $item1) {
                    $res['RuleInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['EcsCount'])) {
            $model->ecsCount = $map['EcsCount'];
        }

        if (isset($map['EcsInfo'])) {
            if (!empty($map['EcsInfo'])) {
                $model->ecsInfo = [];
                $n1 = 0;
                foreach ($map['EcsInfo'] as $item1) {
                    $model->ecsInfo[$n1] = ecsInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['RuleInfo'])) {
            if (!empty($map['RuleInfo'])) {
                $model->ruleInfo = [];
                $n1 = 0;
                foreach ($map['RuleInfo'] as $item1) {
                    $model->ruleInfo[$n1] = ruleInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
