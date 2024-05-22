<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribeItemsResponseBody;

use AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribeItemsResponseBody\items\itemInfo;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var itemInfo[]
     */
    public $itemInfo;
    protected $_name = [
        'itemInfo' => 'ItemInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemInfo) {
            $res['ItemInfo'] = [];
            if (null !== $this->itemInfo && \is_array($this->itemInfo)) {
                $n = 0;
                foreach ($this->itemInfo as $item) {
                    $res['ItemInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ItemInfo'])) {
            if (!empty($map['ItemInfo'])) {
                $model->itemInfo = [];
                $n               = 0;
                foreach ($map['ItemInfo'] as $item) {
                    $model->itemInfo[$n++] = null !== $item ? itemInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
