<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListMessageGroupResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\ListMessageGroupResponseBody\result\groupList;

class result extends Model
{
    /**
     * @var groupList[]
     */
    public $groupList;

    /**
     * @var bool
     */
    public $hasMore;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'groupList' => 'GroupList',
        'hasMore' => 'HasMore',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->groupList)) {
            Model::validateArray($this->groupList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupList) {
            if (\is_array($this->groupList)) {
                $res['GroupList'] = [];
                $n1 = 0;
                foreach ($this->groupList as $item1) {
                    $res['GroupList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hasMore) {
            $res['HasMore'] = $this->hasMore;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['GroupList'])) {
            if (!empty($map['GroupList'])) {
                $model->groupList = [];
                $n1 = 0;
                foreach ($map['GroupList'] as $item1) {
                    $model->groupList[$n1] = groupList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['HasMore'])) {
            $model->hasMore = $map['HasMore'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
