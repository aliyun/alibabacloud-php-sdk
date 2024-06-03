<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class GetTransferableNodesRequest extends Model
{
    /**
     * @description The number of nodes to be migrated.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @description The type of nodes.**WORKER**represents a hot node,**WORKER_WARM** represents a warm node.
     *
     * This parameter is required.
     * @example WORKER
     *
     * @var string
     */
    public $nodeType;
    protected $_name = [
        'count'    => 'count',
        'nodeType' => 'nodeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        if (null !== $this->nodeType) {
            $res['nodeType'] = $this->nodeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTransferableNodesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }
        if (isset($map['nodeType'])) {
            $model->nodeType = $map['nodeType'];
        }

        return $model;
    }
}
