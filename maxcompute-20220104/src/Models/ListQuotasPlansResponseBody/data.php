<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListQuotasPlansResponseBody;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListQuotasPlansResponseBody\data\planList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The list of quota plans.
     *
     * @var planList[]
     */
    public $planList;
    protected $_name = [
        'planList' => 'planList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->planList) {
            $res['planList'] = [];
            if (null !== $this->planList && \is_array($this->planList)) {
                $n = 0;
                foreach ($this->planList as $item) {
                    $res['planList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['planList'])) {
            if (!empty($map['planList'])) {
                $model->planList = [];
                $n               = 0;
                foreach ($map['planList'] as $item) {
                    $model->planList[$n++] = null !== $item ? planList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
