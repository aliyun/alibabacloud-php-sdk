<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetAppApiByPageResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $completed;
    /**
     * @var mixed[][]
     */
    public $items;
    /**
     * @var int
     */
    public $page;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $total;
    protected $_name = [
        'completed' => 'Completed',
        'items'     => 'Items',
        'page'      => 'Page',
        'pageSize'  => 'PageSize',
        'total'     => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->completed) {
            $res['Completed'] = $this->completed;
        }

        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['Items'] = [];
                $n1           = 0;
                foreach ($this->items as $item1) {
                    if (\is_array($item1)) {
                        $res['Items'][$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['Items'][$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['Completed'])) {
            $model->completed = $map['Completed'];
        }

        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n1           = 0;
                foreach ($map['Items'] as $item1) {
                    if (!empty($item1)) {
                        $model->items[$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->items[$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
