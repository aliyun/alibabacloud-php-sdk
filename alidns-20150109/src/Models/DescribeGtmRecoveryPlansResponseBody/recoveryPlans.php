<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlansResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlansResponseBody\recoveryPlans\recoveryPlan;

class recoveryPlans extends Model
{
    /**
     * @var recoveryPlan[]
     */
    public $recoveryPlan;
    protected $_name = [
        'recoveryPlan' => 'RecoveryPlan',
    ];

    public function validate()
    {
        if (\is_array($this->recoveryPlan)) {
            Model::validateArray($this->recoveryPlan);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recoveryPlan) {
            if (\is_array($this->recoveryPlan)) {
                $res['RecoveryPlan'] = [];
                $n1 = 0;
                foreach ($this->recoveryPlan as $item1) {
                    $res['RecoveryPlan'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RecoveryPlan'])) {
            if (!empty($map['RecoveryPlan'])) {
                $model->recoveryPlan = [];
                $n1 = 0;
                foreach ($map['RecoveryPlan'] as $item1) {
                    $model->recoveryPlan[$n1] = recoveryPlan::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
