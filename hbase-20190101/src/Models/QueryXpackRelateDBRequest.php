<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class QueryXpackRelateDBRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $relateDbType;

    /**
     * @var bool
     */
    public $hasSingleNode;
    protected $_name = [
        'clusterId'     => 'ClusterId',
        'relateDbType'  => 'RelateDbType',
        'hasSingleNode' => 'HasSingleNode',
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
        if (null !== $this->relateDbType) {
            $res['RelateDbType'] = $this->relateDbType;
        }
        if (null !== $this->hasSingleNode) {
            $res['HasSingleNode'] = $this->hasSingleNode;
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
        if (isset($map['RelateDbType'])) {
            $model->relateDbType = $map['RelateDbType'];
        }
        if (isset($map['HasSingleNode'])) {
            $model->hasSingleNode = $map['HasSingleNode'];
        }

        return $model;
    }
}
