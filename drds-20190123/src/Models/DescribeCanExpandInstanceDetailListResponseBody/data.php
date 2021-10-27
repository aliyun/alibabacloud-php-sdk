<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeCanExpandInstanceDetailListResponseBody;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeCanExpandInstanceDetailListResponseBody\data\itemData;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var itemData[]
     */
    public $itemData;
    protected $_name = [
        'itemData' => 'itemData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemData) {
            $res['itemData'] = [];
            if (null !== $this->itemData && \is_array($this->itemData)) {
                $n = 0;
                foreach ($this->itemData as $item) {
                    $res['itemData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['itemData'])) {
            if (!empty($map['itemData'])) {
                $model->itemData = [];
                $n               = 0;
                foreach ($map['itemData'] as $item) {
                    $model->itemData[$n++] = null !== $item ? itemData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
