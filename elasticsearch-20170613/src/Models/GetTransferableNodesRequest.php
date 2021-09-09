<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class GetTransferableNodesRequest extends Model
{
    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var int
     */
    public $count;
    protected $_name = [
        'nodeType' => 'nodeType',
        'count'    => 'count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeType) {
            $res['nodeType'] = $this->nodeType;
        }
        if (null !== $this->count) {
            $res['count'] = $this->count;
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
        if (isset($map['nodeType'])) {
            $model->nodeType = $map['nodeType'];
        }
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }

        return $model;
    }
}
