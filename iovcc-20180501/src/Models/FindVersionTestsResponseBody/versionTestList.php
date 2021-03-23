<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\FindVersionTestsResponseBody;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\FindVersionTestsResponseBody\versionTestList\items;
use AlibabaCloud\Tea\Model;

class versionTestList extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var items[]
     */
    public $items;
    protected $_name = [
        'totalCount' => 'TotalCount',
        'items'      => 'Items',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->items) {
            $res['Items'] = [];
            if (null !== $this->items && \is_array($this->items)) {
                $n = 0;
                foreach ($this->items as $item) {
                    $res['Items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return versionTestList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n            = 0;
                foreach ($map['Items'] as $item) {
                    $model->items[$n++] = null !== $item ? items::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
