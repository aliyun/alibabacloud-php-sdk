<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\QueryIncidentVertexNodesResponseBody\vertexNodes;
use AlibabaCloud\Tea\Model;

class QueryIncidentVertexNodesResponseBody extends Model
{
    /**
     * @example ACF97412-FD09-4D1F-994F-34DF12BREF20
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @var vertexNodes
     */
    public $vertexNodes;
    protected $_name = [
        'requestId'   => 'RequestId',
        'success'     => 'Success',
        'vertexNodes' => 'VertexNodes',
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
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->vertexNodes) {
            $res['VertexNodes'] = null !== $this->vertexNodes ? $this->vertexNodes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryIncidentVertexNodesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['VertexNodes'])) {
            $model->vertexNodes = vertexNodes::fromMap($map['VertexNodes']);
        }

        return $model;
    }
}
