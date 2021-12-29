<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\ListDcdnEsTemplateInfoResponseBody;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\ListDcdnEsTemplateInfoResponseBody\dataItems\dataItem;
use AlibabaCloud\Tea\Model;

class dataItems extends Model
{
    /**
     * @var dataItem[]
     */
    public $dataItem;
    protected $_name = [
        'dataItem' => 'DataItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataItem) {
            $res['DataItem'] = [];
            if (null !== $this->dataItem && \is_array($this->dataItem)) {
                $n = 0;
                foreach ($this->dataItem as $item) {
                    $res['DataItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataItem'])) {
            if (!empty($map['DataItem'])) {
                $model->dataItem = [];
                $n               = 0;
                foreach ($map['DataItem'] as $item) {
                    $model->dataItem[$n++] = null !== $item ? dataItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
