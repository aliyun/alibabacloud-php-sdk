<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class XpackRelateDBRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example ap-bp1qtz9rcbbt3****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description This parameter is required.
     *
     * @example hb-bp16o0pd52e3****
     *
     * @var string
     */
    public $dbClusterIds;

    /**
     * @description This parameter is required.
     *
     * @example hbase
     *
     * @var string
     */
    public $relateDbType;
    protected $_name = [
        'clusterId'    => 'ClusterId',
        'dbClusterIds' => 'DbClusterIds',
        'relateDbType' => 'RelateDbType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->dbClusterIds) {
            $res['DbClusterIds'] = $this->dbClusterIds;
        }
        if (null !== $this->relateDbType) {
            $res['RelateDbType'] = $this->relateDbType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return XpackRelateDBRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DbClusterIds'])) {
            $model->dbClusterIds = $map['DbClusterIds'];
        }
        if (isset($map['RelateDbType'])) {
            $model->relateDbType = $map['RelateDbType'];
        }

        return $model;
    }
}
