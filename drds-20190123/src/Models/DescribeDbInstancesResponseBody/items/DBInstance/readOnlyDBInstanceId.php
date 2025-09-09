<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDbInstancesResponseBody\items\DBInstance;

use AlibabaCloud\Dara\Model;

class readOnlyDBInstanceId extends Model
{
    /**
     * @var string[]
     */
    public $readOnlyDBInstanceId;
    protected $_name = [
        'readOnlyDBInstanceId' => 'ReadOnlyDBInstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->readOnlyDBInstanceId)) {
            Model::validateArray($this->readOnlyDBInstanceId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->readOnlyDBInstanceId) {
            if (\is_array($this->readOnlyDBInstanceId)) {
                $res['ReadOnlyDBInstanceId'] = [];
                $n1 = 0;
                foreach ($this->readOnlyDBInstanceId as $item1) {
                    $res['ReadOnlyDBInstanceId'][$n1] = $item1;
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
        if (isset($map['ReadOnlyDBInstanceId'])) {
            if (!empty($map['ReadOnlyDBInstanceId'])) {
                $model->readOnlyDBInstanceId = [];
                $n1 = 0;
                foreach ($map['ReadOnlyDBInstanceId'] as $item1) {
                    $model->readOnlyDBInstanceId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
