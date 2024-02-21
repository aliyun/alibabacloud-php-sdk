<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gdb\V20190903\Models\DescribeDBInstanceAttributeResponseBody\items\DBInstance;

use AlibabaCloud\SDK\Gdb\V20190903\Models\DescribeDBInstanceAttributeResponseBody\items\DBInstance\readOnlyDBInstanceIds\readOnlyDBInstanceId;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->readOnlyDBInstanceId) {
            $res['ReadOnlyDBInstanceId'] = [];
            if (null !== $this->readOnlyDBInstanceId && \is_array($this->readOnlyDBInstanceId)) {
                $n = 0;
                foreach ($this->readOnlyDBInstanceId as $item) {
                    $res['ReadOnlyDBInstanceId'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return readOnlyDBInstanceIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReadOnlyDBInstanceId'])) {
            if (!empty($map['ReadOnlyDBInstanceId'])) {
                $model->readOnlyDBInstanceId = [];
                $n                           = 0;
                foreach ($map['ReadOnlyDBInstanceId'] as $item) {
                    $model->readOnlyDBInstanceId[$n++] = null !== $item ? readOnlyDBInstanceId::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
