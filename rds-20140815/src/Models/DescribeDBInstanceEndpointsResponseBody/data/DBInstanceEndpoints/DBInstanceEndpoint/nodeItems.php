<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceEndpointsResponseBody\data\DBInstanceEndpoints\DBInstanceEndpoint;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceEndpointsResponseBody\data\DBInstanceEndpoints\DBInstanceEndpoint\nodeItems\nodeItem;
use AlibabaCloud\Tea\Model;

class nodeItems extends Model
{
    /**
     * @var nodeItem[]
     */
    public $nodeItem;
    protected $_name = [
        'nodeItem' => 'NodeItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeItem) {
            $res['NodeItem'] = [];
            if (null !== $this->nodeItem && \is_array($this->nodeItem)) {
                $n = 0;
                foreach ($this->nodeItem as $item) {
                    $res['NodeItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeItem'])) {
            if (!empty($map['NodeItem'])) {
                $model->nodeItem = [];
                $n               = 0;
                foreach ($map['NodeItem'] as $item) {
                    $model->nodeItem[$n++] = null !== $item ? nodeItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
