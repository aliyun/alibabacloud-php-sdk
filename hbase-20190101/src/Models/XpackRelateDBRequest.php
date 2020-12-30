<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class XpackRelateDBRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $dbClusterIds;

    /**
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
