<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayElasticPolicyRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayElasticPolicyRequest\elasticPolicy\enableScaleTimePolicyList;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayElasticPolicyRequest\elasticPolicy\timePolicyList;

class elasticPolicy extends Model
{
    /**
     * @var bool
     */
    public $elasticEnabled;

    /**
     * @var string
     */
    public $elasticType;

    /**
     * @var enableScaleTimePolicyList[]
     */
    public $enableScaleTimePolicyList;

    /**
     * @var bool
     */
    public $loadWarningThreshold;

    /**
     * @var int
     */
    public $maxUnits;

    /**
     * @var timePolicyList[]
     */
    public $timePolicyList;
    protected $_name = [
        'elasticEnabled' => 'elasticEnabled',
        'elasticType' => 'elasticType',
        'enableScaleTimePolicyList' => 'enableScaleTimePolicyList',
        'loadWarningThreshold' => 'loadWarningThreshold',
        'maxUnits' => 'maxUnits',
        'timePolicyList' => 'timePolicyList',
    ];

    public function validate()
    {
        if (\is_array($this->enableScaleTimePolicyList)) {
            Model::validateArray($this->enableScaleTimePolicyList);
        }
        if (\is_array($this->timePolicyList)) {
            Model::validateArray($this->timePolicyList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elasticEnabled) {
            $res['elasticEnabled'] = $this->elasticEnabled;
        }

        if (null !== $this->elasticType) {
            $res['elasticType'] = $this->elasticType;
        }

        if (null !== $this->enableScaleTimePolicyList) {
            if (\is_array($this->enableScaleTimePolicyList)) {
                $res['enableScaleTimePolicyList'] = [];
                $n1 = 0;
                foreach ($this->enableScaleTimePolicyList as $item1) {
                    $res['enableScaleTimePolicyList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->loadWarningThreshold) {
            $res['loadWarningThreshold'] = $this->loadWarningThreshold;
        }

        if (null !== $this->maxUnits) {
            $res['maxUnits'] = $this->maxUnits;
        }

        if (null !== $this->timePolicyList) {
            if (\is_array($this->timePolicyList)) {
                $res['timePolicyList'] = [];
                $n1 = 0;
                foreach ($this->timePolicyList as $item1) {
                    $res['timePolicyList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['elasticEnabled'])) {
            $model->elasticEnabled = $map['elasticEnabled'];
        }

        if (isset($map['elasticType'])) {
            $model->elasticType = $map['elasticType'];
        }

        if (isset($map['enableScaleTimePolicyList'])) {
            if (!empty($map['enableScaleTimePolicyList'])) {
                $model->enableScaleTimePolicyList = [];
                $n1 = 0;
                foreach ($map['enableScaleTimePolicyList'] as $item1) {
                    $model->enableScaleTimePolicyList[$n1] = enableScaleTimePolicyList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['loadWarningThreshold'])) {
            $model->loadWarningThreshold = $map['loadWarningThreshold'];
        }

        if (isset($map['maxUnits'])) {
            $model->maxUnits = $map['maxUnits'];
        }

        if (isset($map['timePolicyList'])) {
            if (!empty($map['timePolicyList'])) {
                $model->timePolicyList = [];
                $n1 = 0;
                foreach ($map['timePolicyList'] as $item1) {
                    $model->timePolicyList[$n1] = timePolicyList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
