<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodStorageDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodStorageDataResponseBody\storageData\storageDataItem;

class storageData extends Model
{
    /**
     * @var storageDataItem[]
     */
    public $storageDataItem;
    protected $_name = [
        'storageDataItem' => 'StorageDataItem',
    ];

    public function validate()
    {
        if (\is_array($this->storageDataItem)) {
            Model::validateArray($this->storageDataItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->storageDataItem) {
            if (\is_array($this->storageDataItem)) {
                $res['StorageDataItem'] = [];
                $n1 = 0;
                foreach ($this->storageDataItem as $item1) {
                    $res['StorageDataItem'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StorageDataItem'])) {
            if (!empty($map['StorageDataItem'])) {
                $model->storageDataItem = [];
                $n1 = 0;
                foreach ($map['StorageDataItem'] as $item1) {
                    $model->storageDataItem[$n1] = storageDataItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
