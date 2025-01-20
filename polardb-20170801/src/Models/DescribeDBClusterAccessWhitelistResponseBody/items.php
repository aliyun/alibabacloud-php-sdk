<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAccessWhitelistResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAccessWhitelistResponseBody\items\DBClusterIPArray;

class items extends Model
{
    /**
     * @var DBClusterIPArray[]
     */
    public $DBClusterIPArray;
    protected $_name = [
        'DBClusterIPArray' => 'DBClusterIPArray',
    ];

    public function validate()
    {
        if (\is_array($this->DBClusterIPArray)) {
            Model::validateArray($this->DBClusterIPArray);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterIPArray) {
            if (\is_array($this->DBClusterIPArray)) {
                $res['DBClusterIPArray'] = [];
                $n1                      = 0;
                foreach ($this->DBClusterIPArray as $item1) {
                    $res['DBClusterIPArray'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DBClusterIPArray'])) {
            if (!empty($map['DBClusterIPArray'])) {
                $model->DBClusterIPArray = [];
                $n1                      = 0;
                foreach ($map['DBClusterIPArray'] as $item1) {
                    $model->DBClusterIPArray[$n1++] = DBClusterIPArray::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
