<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBClusterResponseBody\dbInstance;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBClusterResponseBody\dbInstance\DBNodes\DBNode;

class DBNodes extends Model
{
    /**
     * @var DBNode[]
     */
    public $DBNode;
    protected $_name = [
        'DBNode' => 'DBNode',
    ];

    public function validate()
    {
        if (\is_array($this->DBNode)) {
            Model::validateArray($this->DBNode);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBNode) {
            if (\is_array($this->DBNode)) {
                $res['DBNode'] = [];
                $n1 = 0;
                foreach ($this->DBNode as $item1) {
                    $res['DBNode'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DBNode'])) {
            if (!empty($map['DBNode'])) {
                $model->DBNode = [];
                $n1 = 0;
                foreach ($map['DBNode'] as $item1) {
                    $model->DBNode[$n1] = DBNode::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
