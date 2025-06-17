<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceIPArrayListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceIPArrayListResponseBody\items\DBInstanceIPArray;

class items extends Model
{
    /**
     * @var DBInstanceIPArray[]
     */
    public $DBInstanceIPArray;
    protected $_name = [
        'DBInstanceIPArray' => 'DBInstanceIPArray',
    ];

    public function validate()
    {
        if (\is_array($this->DBInstanceIPArray)) {
            Model::validateArray($this->DBInstanceIPArray);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceIPArray) {
            if (\is_array($this->DBInstanceIPArray)) {
                $res['DBInstanceIPArray'] = [];
                $n1 = 0;
                foreach ($this->DBInstanceIPArray as $item1) {
                    $res['DBInstanceIPArray'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DBInstanceIPArray'])) {
            if (!empty($map['DBInstanceIPArray'])) {
                $model->DBInstanceIPArray = [];
                $n1 = 0;
                foreach ($map['DBInstanceIPArray'] as $item1) {
                    $model->DBInstanceIPArray[$n1] = DBInstanceIPArray::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
