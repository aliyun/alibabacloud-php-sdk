<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeMonitorItemsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeMonitorItemsResponseBody\monitorItems\KVStoreMonitorItem;

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
        if (\is_array($this->KVStoreMonitorItem)) {
            Model::validateArray($this->KVStoreMonitorItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->KVStoreMonitorItem) {
            if (\is_array($this->KVStoreMonitorItem)) {
                $res['KVStoreMonitorItem'] = [];
                $n1 = 0;
                foreach ($this->KVStoreMonitorItem as $item1) {
                    $res['KVStoreMonitorItem'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['KVStoreMonitorItem'])) {
            if (!empty($map['KVStoreMonitorItem'])) {
                $model->KVStoreMonitorItem = [];
                $n1 = 0;
                foreach ($map['KVStoreMonitorItem'] as $item1) {
                    $model->KVStoreMonitorItem[$n1] = KVStoreMonitorItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
