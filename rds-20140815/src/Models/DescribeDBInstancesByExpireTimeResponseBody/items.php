<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesByExpireTimeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesByExpireTimeResponseBody\items\DBInstanceExpireTime;

class items extends Model
{
    /**
     * @var DBInstanceExpireTime[]
     */
    public $DBInstanceExpireTime;
    protected $_name = [
        'DBInstanceExpireTime' => 'DBInstanceExpireTime',
    ];

    public function validate()
    {
        if (\is_array($this->DBInstanceExpireTime)) {
            Model::validateArray($this->DBInstanceExpireTime);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceExpireTime) {
            if (\is_array($this->DBInstanceExpireTime)) {
                $res['DBInstanceExpireTime'] = [];
                $n1 = 0;
                foreach ($this->DBInstanceExpireTime as $item1) {
                    $res['DBInstanceExpireTime'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DBInstanceExpireTime'])) {
            if (!empty($map['DBInstanceExpireTime'])) {
                $model->DBInstanceExpireTime = [];
                $n1 = 0;
                foreach ($map['DBInstanceExpireTime'] as $item1) {
                    $model->DBInstanceExpireTime[$n1] = DBInstanceExpireTime::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
