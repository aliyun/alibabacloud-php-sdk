<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListNodesNoPagingResponseBody\nodes;

class ListNodesNoPagingResponseBody extends Model
{
    /**
     * @var nodes
     */
    public $nodes;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nodes' => 'Nodes',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->nodes) {
            $this->nodes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodes) {
            $res['Nodes'] = null !== $this->nodes ? $this->nodes->toArray($noStream) : $this->nodes;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Nodes'])) {
            $model->nodes = nodes::fromMap($map['Nodes']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
