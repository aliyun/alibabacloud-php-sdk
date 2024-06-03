<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class GetSuggestShrinkableNodesRequest extends Model
{
    /**
     * @description The number of nodes that you want to remove.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @description Specifies whether to ignore the instance status. Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $ignoreStatus;

    /**
     * @description The type of removing nodes. WORKER indicates hot node and WORKER_WARM indicates warm node.
     *
     * This parameter is required.
     * @example WORKER
     *
     * @var string
     */
    public $nodeType;
    protected $_name = [
        'count'        => 'count',
        'ignoreStatus' => 'ignoreStatus',
        'nodeType'     => 'nodeType',
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
        if (null !== $this->ignoreStatus) {
            $res['ignoreStatus'] = $this->ignoreStatus;
        }
        if (null !== $this->nodeType) {
            $res['nodeType'] = $this->nodeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSuggestShrinkableNodesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }
        if (isset($map['ignoreStatus'])) {
            $model->ignoreStatus = $map['ignoreStatus'];
        }
        if (isset($map['nodeType'])) {
            $model->nodeType = $map['nodeType'];
        }

        return $model;
    }
}
