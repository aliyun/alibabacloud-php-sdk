<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class CreateLockRequest extends Model
{
    /**
     * @description LockObjList
     *
     * @example {"databaseName":"db","tableName":"test"}
     *
     * @var LockObj[]
     */
    public $lockObjList;
    protected $_name = [
        'lockObjList' => 'LockObjList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lockObjList) {
            $res['LockObjList'] = [];
            if (null !== $this->lockObjList && \is_array($this->lockObjList)) {
                $n = 0;
                foreach ($this->lockObjList as $item) {
                    $res['LockObjList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLockRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LockObjList'])) {
            if (!empty($map['LockObjList'])) {
                $model->lockObjList = [];
                $n                  = 0;
                foreach ($map['LockObjList'] as $item) {
                    $model->lockObjList[$n++] = null !== $item ? LockObj::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
