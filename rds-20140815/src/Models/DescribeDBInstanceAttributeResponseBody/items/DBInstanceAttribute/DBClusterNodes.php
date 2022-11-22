<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponseBody\items\DBInstanceAttribute;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponseBody\items\DBInstanceAttribute\DBClusterNodes\DBClusterNode;
use AlibabaCloud\Tea\Model;

class DBClusterNodes extends Model
{
    /**
     * @var DBClusterNode[]
     */
    public $DBClusterNode;
    protected $_name = [
        'DBClusterNode' => 'DBClusterNode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterNode) {
            $res['DBClusterNode'] = [];
            if (null !== $this->DBClusterNode && \is_array($this->DBClusterNode)) {
                $n = 0;
                foreach ($this->DBClusterNode as $item) {
                    $res['DBClusterNode'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBClusterNodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterNode'])) {
            if (!empty($map['DBClusterNode'])) {
                $model->DBClusterNode = [];
                $n                    = 0;
                foreach ($map['DBClusterNode'] as $item) {
                    $model->DBClusterNode[$n++] = null !== $item ? DBClusterNode::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
