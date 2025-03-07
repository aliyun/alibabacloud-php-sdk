<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstancePlansResponseBody;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstancePlansResponseBody\items\planList;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->planList) {
            $res['PlanList'] = [];
            if (null !== $this->planList && \is_array($this->planList)) {
                $n = 0;
                foreach ($this->planList as $item) {
                    $res['PlanList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PlanList'])) {
            if (!empty($map['PlanList'])) {
                $model->planList = [];
                $n               = 0;
                foreach ($map['PlanList'] as $item) {
                    $model->planList[$n++] = null !== $item ? planList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
