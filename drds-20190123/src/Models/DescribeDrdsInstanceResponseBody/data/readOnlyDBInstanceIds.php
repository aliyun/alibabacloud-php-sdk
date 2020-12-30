<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstanceResponseBody\data;

use AlibabaCloud\Tea\Model;

class readOnlyDBInstanceIds extends Model
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->readOnlyDBInstanceId) {
            $res['ReadOnlyDBInstanceId'] = $this->readOnlyDBInstanceId;
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
                $model->readOnlyDBInstanceId = $map['ReadOnlyDBInstanceId'];
            }
        }

        return $model;
    }
}
