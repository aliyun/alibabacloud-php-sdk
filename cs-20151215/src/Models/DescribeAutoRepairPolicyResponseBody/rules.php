<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeAutoRepairPolicyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeAutoRepairPolicyResponseBody\rules\incidents;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeAutoRepairPolicyResponseBody\rules\repairProcedure;

class rules extends Model
{
    /**
     * @var incidents[]
     */
    public $incidents;

    /**
     * @var repairProcedure[]
     */
    public $repairProcedure;
    protected $_name = [
        'incidents' => 'incidents',
        'repairProcedure' => 'repair_procedure',
    ];

    public function validate()
    {
        if (\is_array($this->incidents)) {
            Model::validateArray($this->incidents);
        }
        if (\is_array($this->repairProcedure)) {
            Model::validateArray($this->repairProcedure);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->incidents) {
            if (\is_array($this->incidents)) {
                $res['incidents'] = [];
                $n1 = 0;
                foreach ($this->incidents as $item1) {
                    $res['incidents'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->repairProcedure) {
            if (\is_array($this->repairProcedure)) {
                $res['repair_procedure'] = [];
                $n1 = 0;
                foreach ($this->repairProcedure as $item1) {
                    $res['repair_procedure'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['incidents'])) {
            if (!empty($map['incidents'])) {
                $model->incidents = [];
                $n1 = 0;
                foreach ($map['incidents'] as $item1) {
                    $model->incidents[$n1] = incidents::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['repair_procedure'])) {
            if (!empty($map['repair_procedure'])) {
                $model->repairProcedure = [];
                $n1 = 0;
                foreach ($map['repair_procedure'] as $item1) {
                    $model->repairProcedure[$n1] = repairProcedure::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
