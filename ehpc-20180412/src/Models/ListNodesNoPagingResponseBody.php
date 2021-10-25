<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListNodesNoPagingResponseBody\nodes;
use AlibabaCloud\Tea\Model;

class ListNodesNoPagingResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var nodes
     */
    public $nodes;
    protected $_name = [
        'requestId' => 'RequestId',
        'nodes'     => 'Nodes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->nodes) {
            $res['Nodes'] = null !== $this->nodes ? $this->nodes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListNodesNoPagingResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Nodes'])) {
            $model->nodes = nodes::fromMap($map['Nodes']);
        }

        return $model;
    }
}
