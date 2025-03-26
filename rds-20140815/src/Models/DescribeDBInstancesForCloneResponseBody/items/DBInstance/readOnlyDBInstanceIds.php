<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesForCloneResponseBody\items\DBInstance;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesForCloneResponseBody\items\DBInstance\readOnlyDBInstanceIds\readOnlyDBInstanceId;

class readOnlyDBInstanceIds extends Model
{
    /**
     * @var readOnlyDBInstanceId[]
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
                    $res['ReadOnlyDBInstanceId'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                    $model->readOnlyDBInstanceId[$n1++] = readOnlyDBInstanceId::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
