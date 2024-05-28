<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBResourceGroupResponseBody;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBResourceGroupResponseBody\resourceGroupItems\resourceGroupItem;
use AlibabaCloud\Tea\Model;

class resourceGroupItems extends Model
{
    /**
     * @var resourceGroupItem[]
     */
    public $resourceGroupItem;
    protected $_name = [
        'resourceGroupItem' => 'ResourceGroupItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceGroupItem) {
            $res['ResourceGroupItem'] = [];
            if (null !== $this->resourceGroupItem && \is_array($this->resourceGroupItem)) {
                $n = 0;
                foreach ($this->resourceGroupItem as $item) {
                    $res['ResourceGroupItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceGroupItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceGroupItem'])) {
            if (!empty($map['ResourceGroupItem'])) {
                $model->resourceGroupItem = [];
                $n                        = 0;
                foreach ($map['ResourceGroupItem'] as $item) {
                    $model->resourceGroupItem[$n++] = null !== $item ? resourceGroupItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
