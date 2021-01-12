<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceIPArrayListResponseBody;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceIPArrayListResponseBody\items\DBInstanceIPArray;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceIPArray) {
            $res['DBInstanceIPArray'] = [];
            if (null !== $this->DBInstanceIPArray && \is_array($this->DBInstanceIPArray)) {
                $n = 0;
                foreach ($this->DBInstanceIPArray as $item) {
                    $res['DBInstanceIPArray'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceIPArray'])) {
            if (!empty($map['DBInstanceIPArray'])) {
                $model->DBInstanceIPArray = [];
                $n                        = 0;
                foreach ($map['DBInstanceIPArray'] as $item) {
                    $model->DBInstanceIPArray[$n++] = null !== $item ? DBInstanceIPArray::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
