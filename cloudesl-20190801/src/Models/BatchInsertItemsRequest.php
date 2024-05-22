<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20190801\Models;

use AlibabaCloud\SDK\Cloudesl\V20190801\Models\BatchInsertItemsRequest\itemInfo;
use AlibabaCloud\Tea\Model;

class BatchInsertItemsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var itemInfo[]
     */
    public $itemInfo;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $storeId;
    protected $_name = [
        'itemInfo' => 'ItemInfo',
        'storeId'  => 'StoreId',
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
        if (null !== $this->storeId) {
            $res['StoreId'] = $this->storeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchInsertItemsRequest
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
        if (isset($map['StoreId'])) {
            $model->storeId = $map['StoreId'];
        }

        return $model;
    }
}
