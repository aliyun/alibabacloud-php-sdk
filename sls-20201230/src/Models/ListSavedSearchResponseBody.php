<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class ListSavedSearchResponseBody extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var SavedSearch[]
     */
    public $savedsearchItems;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'count' => 'count',
        'savedsearchItems' => 'savedsearchItems',
        'total' => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->savedsearchItems)) {
            Model::validateArray($this->savedsearchItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }

        if (null !== $this->savedsearchItems) {
            if (\is_array($this->savedsearchItems)) {
                $res['savedsearchItems'] = [];
                $n1 = 0;
                foreach ($this->savedsearchItems as $item1) {
                    $res['savedsearchItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }

        if (isset($map['savedsearchItems'])) {
            if (!empty($map['savedsearchItems'])) {
                $model->savedsearchItems = [];
                $n1 = 0;
                foreach ($map['savedsearchItems'] as $item1) {
                    $model->savedsearchItems[$n1++] = SavedSearch::fromMap($item1);
                }
            }
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
