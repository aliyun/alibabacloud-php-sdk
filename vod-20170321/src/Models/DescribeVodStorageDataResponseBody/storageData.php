<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodStorageDataResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodStorageDataResponseBody\storageData\storageDataItem;
use AlibabaCloud\Tea\Model;

class storageData extends Model
{
    /**
     * @var storageDataItem[]
     */
    public $storageDataItem;
    protected $_name = [
        'storageDataItem' => 'StorageDataItem',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->storageDataItem) {
            $res['StorageDataItem'] = [];
            if (null !== $this->storageDataItem && \is_array($this->storageDataItem)) {
                $n = 0;
                foreach ($this->storageDataItem as $item) {
                    $res['StorageDataItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storageData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StorageDataItem'])) {
            if (!empty($map['StorageDataItem'])) {
                $model->storageDataItem = [];
                $n = 0;
                foreach ($map['StorageDataItem'] as $item) {
                    $model->storageDataItem[$n++] = null !== $item ? storageDataItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
