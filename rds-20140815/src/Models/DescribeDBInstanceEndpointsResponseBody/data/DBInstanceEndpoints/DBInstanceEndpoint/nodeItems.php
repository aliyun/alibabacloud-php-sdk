<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceEndpointsResponseBody\data\DBInstanceEndpoints\DBInstanceEndpoint;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceEndpointsResponseBody\data\DBInstanceEndpoints\DBInstanceEndpoint\nodeItems\nodeItem;

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
        if (\is_array($this->nodeItem)) {
            Model::validateArray($this->nodeItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeItem) {
            if (\is_array($this->nodeItem)) {
                $res['NodeItem'] = [];
                $n1              = 0;
                foreach ($this->nodeItem as $item1) {
                    $res['NodeItem'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NodeItem'])) {
            if (!empty($map['NodeItem'])) {
                $model->nodeItem = [];
                $n1              = 0;
                foreach ($map['NodeItem'] as $item1) {
                    $model->nodeItem[$n1++] = nodeItem::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
