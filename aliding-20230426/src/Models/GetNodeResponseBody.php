<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNodeResponseBody\node;

class GetNodeResponseBody extends Model
{
    /**
     * @var node
     */
    public $node;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'node'      => 'node',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->node) {
            $this->node->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->node) {
            $res['node'] = null !== $this->node ? $this->node->toArray($noStream) : $this->node;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['node'])) {
            $model->node = node::fromMap($map['node']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
