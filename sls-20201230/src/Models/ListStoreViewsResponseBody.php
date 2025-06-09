<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class ListStoreViewsResponseBody extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string[]
     */
    public $storeviews;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'count' => 'count',
        'storeviews' => 'storeviews',
        'total' => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->storeviews)) {
            Model::validateArray($this->storeviews);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }

        if (null !== $this->storeviews) {
            if (\is_array($this->storeviews)) {
                $res['storeviews'] = [];
                $n1 = 0;
                foreach ($this->storeviews as $item1) {
                    $res['storeviews'][$n1++] = $item1;
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

        if (isset($map['storeviews'])) {
            if (!empty($map['storeviews'])) {
                $model->storeviews = [];
                $n1 = 0;
                foreach ($map['storeviews'] as $item1) {
                    $model->storeviews[$n1++] = $item1;
                }
            }
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
