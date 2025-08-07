<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\ListPublishedAgentResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListPublishedAgentResponseBody\data\list_;

class data extends Model
{
    /**
     * @var list_[]
     */
    public $list;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'list' => 'list',
        'pageNo' => 'pageNo',
        'pageSize' => 'pageSize',
        'total' => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->list)) {
            Model::validateArray($this->list);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->list) {
            if (\is_array($this->list)) {
                $res['list'] = [];
                $n1 = 0;
                foreach ($this->list as $item1) {
                    $res['list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNo) {
            $res['pageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->total) {
            $res['total'] = $this->total;
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
        if (isset($map['list'])) {
            if (!empty($map['list'])) {
                $model->list = [];
                $n1 = 0;
                foreach ($map['list'] as $item1) {
                    $model->list[$n1] = list_::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['pageNo'])) {
            $model->pageNo = $map['pageNo'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
