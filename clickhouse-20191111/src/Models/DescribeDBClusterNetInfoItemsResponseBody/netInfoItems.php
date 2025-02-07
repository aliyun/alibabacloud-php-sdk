<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterNetInfoItemsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterNetInfoItemsResponseBody\netInfoItems\netInfoItem;

class netInfoItems extends Model
{
    /**
     * @var netInfoItem[]
     */
    public $netInfoItem;
    protected $_name = [
        'netInfoItem' => 'NetInfoItem',
    ];

    public function validate()
    {
        if (\is_array($this->netInfoItem)) {
            Model::validateArray($this->netInfoItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->netInfoItem) {
            if (\is_array($this->netInfoItem)) {
                $res['NetInfoItem'] = [];
                $n1                 = 0;
                foreach ($this->netInfoItem as $item1) {
                    $res['NetInfoItem'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NetInfoItem'])) {
            if (!empty($map['NetInfoItem'])) {
                $model->netInfoItem = [];
                $n1                 = 0;
                foreach ($map['NetInfoItem'] as $item1) {
                    $model->netInfoItem[$n1++] = netInfoItem::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
