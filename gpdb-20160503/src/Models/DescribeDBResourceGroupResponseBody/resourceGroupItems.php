<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBResourceGroupResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBResourceGroupResponseBody\resourceGroupItems\resourceGroupItem;

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
        if (\is_array($this->resourceGroupItem)) {
            Model::validateArray($this->resourceGroupItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourceGroupItem) {
            if (\is_array($this->resourceGroupItem)) {
                $res['ResourceGroupItem'] = [];
                $n1                       = 0;
                foreach ($this->resourceGroupItem as $item1) {
                    $res['ResourceGroupItem'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ResourceGroupItem'])) {
            if (!empty($map['ResourceGroupItem'])) {
                $model->resourceGroupItem = [];
                $n1                       = 0;
                foreach ($map['ResourceGroupItem'] as $item1) {
                    $model->resourceGroupItem[$n1++] = resourceGroupItem::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
