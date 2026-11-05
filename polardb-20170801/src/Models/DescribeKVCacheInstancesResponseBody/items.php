<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeKVCacheInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeKVCacheInstancesResponseBody\items\KVCacheItem;

class items extends Model
{
    /**
     * @var KVCacheItem[]
     */
    public $KVCacheItem;
    protected $_name = [
        'KVCacheItem' => 'KVCacheItem',
    ];

    public function validate()
    {
        if (\is_array($this->KVCacheItem)) {
            Model::validateArray($this->KVCacheItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->KVCacheItem) {
            if (\is_array($this->KVCacheItem)) {
                $res['KVCacheItem'] = [];
                $n1 = 0;
                foreach ($this->KVCacheItem as $item1) {
                    $res['KVCacheItem'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['KVCacheItem'])) {
            if (!empty($map['KVCacheItem'])) {
                $model->KVCacheItem = [];
                $n1 = 0;
                foreach ($map['KVCacheItem'] as $item1) {
                    $model->KVCacheItem[$n1] = KVCacheItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
