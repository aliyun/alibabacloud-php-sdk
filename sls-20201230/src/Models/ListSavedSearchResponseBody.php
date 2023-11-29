<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ListSavedSearchResponseBody extends Model
{
    /**
     * @description The number of saved searches returned on the current page.
     *
     * @example 4
     *
     * @var int
     */
    public $count;

    /**
     * @description The saved searches.
     *
     * @example [ "test-1", "test-2" ]
     *
     * @var SavedSearch[]
     */
    public $savedsearchItems;

    /**
     * @description The total number of saved searches that meet the query conditions.
     *
     * @example 4
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'count'            => 'count',
        'savedsearchItems' => 'savedsearchItems',
        'total'            => 'total',
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
        if (null !== $this->savedsearchItems) {
            $res['savedsearchItems'] = [];
            if (null !== $this->savedsearchItems && \is_array($this->savedsearchItems)) {
                $n = 0;
                foreach ($this->savedsearchItems as $item) {
                    $res['savedsearchItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSavedSearchResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }
        if (isset($map['savedsearchItems'])) {
            if (!empty($map['savedsearchItems'])) {
                $model->savedsearchItems = [];
                $n                       = 0;
                foreach ($map['savedsearchItems'] as $item) {
                    $model->savedsearchItems[$n++] = null !== $item ? SavedSearch::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
