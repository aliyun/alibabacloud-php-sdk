<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponseBody\items\DBInstanceAttribute\extra;

use AlibabaCloud\Dara\Model;

class DBInstanceIds extends Model
{
    /**
     * @var string[]
     */
    public $DBInstanceId;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->DBInstanceId)) {
            Model::validateArray($this->DBInstanceId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            if (\is_array($this->DBInstanceId)) {
                $res['DBInstanceId'] = [];
                $n1 = 0;
                foreach ($this->DBInstanceId as $item1) {
                    $res['DBInstanceId'][$n1] = $item1;
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
        if (isset($map['DBInstanceId'])) {
            if (!empty($map['DBInstanceId'])) {
                $model->DBInstanceId = [];
                $n1 = 0;
                foreach ($map['DBInstanceId'] as $item1) {
                    $model->DBInstanceId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
