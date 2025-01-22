<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstancePlansResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstancePlansResponseBody\items\planList;

class items extends Model
{
    /**
     * @var planList[]
     */
    public $planList;
    protected $_name = [
        'planList' => 'PlanList',
    ];

    public function validate()
    {
        if (\is_array($this->planList)) {
            Model::validateArray($this->planList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->planList) {
            if (\is_array($this->planList)) {
                $res['PlanList'] = [];
                $n1              = 0;
                foreach ($this->planList as $item1) {
                    $res['PlanList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PlanList'])) {
            if (!empty($map['PlanList'])) {
                $model->planList = [];
                $n1              = 0;
                foreach ($map['PlanList'] as $item1) {
                    $model->planList[$n1++] = planList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
