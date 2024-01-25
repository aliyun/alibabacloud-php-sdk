<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20200201\Models;

use AlibabaCloud\SDK\Cloudesl\V20200201\Models\BatchInsertItemsRequest\itemInfo;
use AlibabaCloud\Tea\Model;

class BatchInsertItemsRequest extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $extraParams;

    /**
     * @var itemInfo[]
     */
    public $itemInfo;

    /**
     * @example s-dxsxx****
     *
     * @var string
     */
    public $storeId;

    /**
     * @example true
     *
     * @var bool
     */
    public $syncByItemId;
    protected $_name = [
        'extraParams'  => 'ExtraParams',
        'itemInfo'     => 'ItemInfo',
        'storeId'      => 'StoreId',
        'syncByItemId' => 'SyncByItemId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extraParams) {
            $res['ExtraParams'] = $this->extraParams;
        }
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
        if (null !== $this->syncByItemId) {
            $res['SyncByItemId'] = $this->syncByItemId;
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
        if (isset($map['ExtraParams'])) {
            $model->extraParams = $map['ExtraParams'];
        }
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
        if (isset($map['SyncByItemId'])) {
            $model->syncByItemId = $map['SyncByItemId'];
        }

        return $model;
    }
}
