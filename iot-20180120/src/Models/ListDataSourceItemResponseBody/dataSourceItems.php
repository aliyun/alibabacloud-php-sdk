<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListDataSourceItemResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\ListDataSourceItemResponseBody\dataSourceItems\dataSourceItem;
use AlibabaCloud\Tea\Model;

class dataSourceItems extends Model
{
    /**
     * @var dataSourceItem[]
     */
    public $dataSourceItem;
    protected $_name = [
        'dataSourceItem' => 'dataSourceItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceItem) {
            $res['dataSourceItem'] = [];
            if (null !== $this->dataSourceItem && \is_array($this->dataSourceItem)) {
                $n = 0;
                foreach ($this->dataSourceItem as $item) {
                    $res['dataSourceItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataSourceItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dataSourceItem'])) {
            if (!empty($map['dataSourceItem'])) {
                $model->dataSourceItem = [];
                $n                     = 0;
                foreach ($map['dataSourceItem'] as $item) {
                    $model->dataSourceItem[$n++] = null !== $item ? dataSourceItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
