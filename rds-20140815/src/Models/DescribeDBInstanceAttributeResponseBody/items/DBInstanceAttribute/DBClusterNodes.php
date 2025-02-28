<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponseBody\items\DBInstanceAttribute;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponseBody\items\DBInstanceAttribute\DBClusterNodes\DBClusterNode;

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
        if (\is_array($this->DBClusterNode)) {
            Model::validateArray($this->DBClusterNode);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterNode) {
            if (\is_array($this->DBClusterNode)) {
                $res['DBClusterNode'] = [];
                $n1                   = 0;
                foreach ($this->DBClusterNode as $item1) {
                    $res['DBClusterNode'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DBClusterNode'])) {
            if (!empty($map['DBClusterNode'])) {
                $model->DBClusterNode = [];
                $n1                   = 0;
                foreach ($map['DBClusterNode'] as $item1) {
                    $model->DBClusterNode[$n1++] = DBClusterNode::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
