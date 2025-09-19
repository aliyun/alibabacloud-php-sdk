<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\UpdateOpaStrategyNewRequest\alarmDetail;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\UpdateOpaStrategyNewRequest\alarmDetail\vul\item;
use AlibabaCloud\SDK\Sas\V20181203\Models\UpdateOpaStrategyNewRequest\alarmDetail\vul\riskClass;

class vul extends Model
{
    /**
     * @var item[]
     */
    public $item;

    /**
     * @var riskClass[]
     */
    public $riskClass;

    /**
     * @var string[]
     */
    public $riskLevel;
    protected $_name = [
        'item' => 'Item',
        'riskClass' => 'RiskClass',
        'riskLevel' => 'RiskLevel',
    ];

    public function validate()
    {
        if (\is_array($this->item)) {
            Model::validateArray($this->item);
        }
        if (\is_array($this->riskClass)) {
            Model::validateArray($this->riskClass);
        }
        if (\is_array($this->riskLevel)) {
            Model::validateArray($this->riskLevel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->item) {
            if (\is_array($this->item)) {
                $res['Item'] = [];
                $n1 = 0;
                foreach ($this->item as $item1) {
                    $res['Item'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->riskClass) {
            if (\is_array($this->riskClass)) {
                $res['RiskClass'] = [];
                $n1 = 0;
                foreach ($this->riskClass as $item1) {
                    $res['RiskClass'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->riskLevel) {
            if (\is_array($this->riskLevel)) {
                $res['RiskLevel'] = [];
                $n1 = 0;
                foreach ($this->riskLevel as $item1) {
                    $res['RiskLevel'][$n1] = $item1;
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
        if (isset($map['Item'])) {
            if (!empty($map['Item'])) {
                $model->item = [];
                $n1 = 0;
                foreach ($map['Item'] as $item1) {
                    $model->item[$n1] = item::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RiskClass'])) {
            if (!empty($map['RiskClass'])) {
                $model->riskClass = [];
                $n1 = 0;
                foreach ($map['RiskClass'] as $item1) {
                    $model->riskClass[$n1] = riskClass::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RiskLevel'])) {
            if (!empty($map['RiskLevel'])) {
                $model->riskLevel = [];
                $n1 = 0;
                foreach ($map['RiskLevel'] as $item1) {
                    $model->riskLevel[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
