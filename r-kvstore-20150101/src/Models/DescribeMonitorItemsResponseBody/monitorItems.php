<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeMonitorItemsResponseBody;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeMonitorItemsResponseBody\monitorItems\KVStoreMonitorItem;
use AlibabaCloud\Tea\Model;

class monitorItems extends Model
{
    /**
     * @var KVStoreMonitorItem[]
     */
    public $KVStoreMonitorItem;
    protected $_name = [
        'KVStoreMonitorItem' => 'KVStoreMonitorItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->KVStoreMonitorItem) {
            $res['KVStoreMonitorItem'] = [];
            if (null !== $this->KVStoreMonitorItem && \is_array($this->KVStoreMonitorItem)) {
                $n = 0;
                foreach ($this->KVStoreMonitorItem as $item) {
                    $res['KVStoreMonitorItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return monitorItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KVStoreMonitorItem'])) {
            if (!empty($map['KVStoreMonitorItem'])) {
                $model->KVStoreMonitorItem = [];
                $n                         = 0;
                foreach ($map['KVStoreMonitorItem'] as $item) {
                    $model->KVStoreMonitorItem[$n++] = null !== $item ? KVStoreMonitorItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
