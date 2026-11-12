<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAccessWhitelistResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAccessWhitelistResponseBody\projectItems\DBClusterProjectIPArray;

class projectItems extends Model
{
    /**
     * @var DBClusterProjectIPArray[]
     */
    public $DBClusterProjectIPArray;
    protected $_name = [
        'DBClusterProjectIPArray' => 'DBClusterProjectIPArray',
    ];

    public function validate()
    {
        if (\is_array($this->DBClusterProjectIPArray)) {
            Model::validateArray($this->DBClusterProjectIPArray);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterProjectIPArray) {
            if (\is_array($this->DBClusterProjectIPArray)) {
                $res['DBClusterProjectIPArray'] = [];
                $n1 = 0;
                foreach ($this->DBClusterProjectIPArray as $item1) {
                    $res['DBClusterProjectIPArray'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DBClusterProjectIPArray'])) {
            if (!empty($map['DBClusterProjectIPArray'])) {
                $model->DBClusterProjectIPArray = [];
                $n1 = 0;
                foreach ($map['DBClusterProjectIPArray'] as $item1) {
                    $model->DBClusterProjectIPArray[$n1] = DBClusterProjectIPArray::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
