<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\Tea\Model;

class GetPoolRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example PoolTest
     *
     * @var string
     */
    public $poolName;
    protected $_name = [
        'poolName' => 'PoolName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->poolName) {
            $res['PoolName'] = $this->poolName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPoolRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PoolName'])) {
            $model->poolName = $map['PoolName'];
        }

        return $model;
    }
}
