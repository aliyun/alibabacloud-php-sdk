<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\QueryIncidentVertexNodesResponseBody\vertexNodes;

class QueryIncidentVertexNodesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
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
        if (null !== $this->vertexNodes) {
            $this->vertexNodes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->vertexNodes) {
            $res['VertexNodes'] = null !== $this->vertexNodes ? $this->vertexNodes->toArray($noStream) : $this->vertexNodes;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
