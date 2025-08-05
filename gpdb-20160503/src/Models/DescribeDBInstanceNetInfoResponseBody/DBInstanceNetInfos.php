<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceNetInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceNetInfoResponseBody\DBInstanceNetInfos\DBInstanceNetInfo;

class DBInstanceNetInfos extends Model
{
    /**
     * @var DBInstanceNetInfo[]
     */
    public $DBInstanceNetInfo;
    protected $_name = [
        'DBInstanceNetInfo' => 'DBInstanceNetInfo',
    ];

    public function validate()
    {
        if (\is_array($this->DBInstanceNetInfo)) {
            Model::validateArray($this->DBInstanceNetInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceNetInfo) {
            if (\is_array($this->DBInstanceNetInfo)) {
                $res['DBInstanceNetInfo'] = [];
                $n1 = 0;
                foreach ($this->DBInstanceNetInfo as $item1) {
                    $res['DBInstanceNetInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DBInstanceNetInfo'])) {
            if (!empty($map['DBInstanceNetInfo'])) {
                $model->DBInstanceNetInfo = [];
                $n1 = 0;
                foreach ($map['DBInstanceNetInfo'] as $item1) {
                    $model->DBInstanceNetInfo[$n1] = DBInstanceNetInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
