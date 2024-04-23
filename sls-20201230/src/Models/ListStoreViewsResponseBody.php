<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ListStoreViewsResponseBody extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $count;

    /**
     * @var string[]
     */
    public $storeviews;

    /**
     * @example 100
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'count'      => 'count',
        'storeviews' => 'storeviews',
        'total'      => 'total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        if (null !== $this->storeviews) {
            $res['storeviews'] = $this->storeviews;
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListStoreViewsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }
        if (isset($map['storeviews'])) {
            if (!empty($map['storeviews'])) {
                $model->storeviews = $map['storeviews'];
            }
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
