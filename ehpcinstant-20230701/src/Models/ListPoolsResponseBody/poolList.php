<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListPoolsResponseBody;

use AlibabaCloud\Tea\Model;

class poolList extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @example 2000
     *
     * @var int
     */
    public $maxExectorNum;

    /**
     * @example PoolTest
     *
     * @var string
     */
    public $poolName;

    /**
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @example Working
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'isDefault'     => 'IsDefault',
        'maxExectorNum' => 'MaxExectorNum',
        'poolName'      => 'PoolName',
        'priority'      => 'Priority',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->maxExectorNum) {
            $res['MaxExectorNum'] = $this->maxExectorNum;
        }
        if (null !== $this->poolName) {
            $res['PoolName'] = $this->poolName;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return poolList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['MaxExectorNum'])) {
            $model->maxExectorNum = $map['MaxExectorNum'];
        }
        if (isset($map['PoolName'])) {
            $model->poolName = $map['PoolName'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
