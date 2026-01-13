<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241121\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IQS\V20241121\Models\ListMeteringDailyDetailResult\meteringDailyDetailList;

class ListMeteringDailyDetailResult extends Model
{
    /**
     * @var meteringDailyDetailList[]
     */
    public $meteringDailyDetailList;
    protected $_name = [
        'meteringDailyDetailList' => 'meteringDailyDetailList',
    ];

    public function validate()
    {
        if (\is_array($this->meteringDailyDetailList)) {
            Model::validateArray($this->meteringDailyDetailList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->meteringDailyDetailList) {
            if (\is_array($this->meteringDailyDetailList)) {
                $res['meteringDailyDetailList'] = [];
                $n1 = 0;
                foreach ($this->meteringDailyDetailList as $item1) {
                    $res['meteringDailyDetailList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['meteringDailyDetailList'])) {
            if (!empty($map['meteringDailyDetailList'])) {
                $model->meteringDailyDetailList = [];
                $n1 = 0;
                foreach ($map['meteringDailyDetailList'] as $item1) {
                    $model->meteringDailyDetailList[$n1] = meteringDailyDetailList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
