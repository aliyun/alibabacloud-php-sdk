<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class QueryXpackRelateDBRequest extends Model
{
    /**
     * @example ap-bp1qtz9rcbbt3p6ng
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example false
     *
     * @var bool
     */
    public $hasSingleNode;

    /**
     * @example hbase
     *
     * @var string
     */
    public $relateDbType;
    protected $_name = [
        'clusterId'     => 'ClusterId',
        'hasSingleNode' => 'HasSingleNode',
        'relateDbType'  => 'RelateDbType',
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
        if (null !== $this->hasSingleNode) {
            $res['HasSingleNode'] = $this->hasSingleNode;
        }
        if (null !== $this->relateDbType) {
            $res['RelateDbType'] = $this->relateDbType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryXpackRelateDBRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['HasSingleNode'])) {
            $model->hasSingleNode = $map['HasSingleNode'];
        }
        if (isset($map['RelateDbType'])) {
            $model->relateDbType = $map['RelateDbType'];
        }

        return $model;
    }
}
