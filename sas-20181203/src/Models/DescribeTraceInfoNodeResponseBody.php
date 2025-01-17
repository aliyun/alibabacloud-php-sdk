<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeTraceInfoNodeResponseBody\node;

class DescribeTraceInfoNodeResponseBody extends Model
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
        'node'      => 'Node',
        'requestId' => 'RequestId',
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
            $res['Node'] = null !== $this->node ? $this->node->toArray($noStream) : $this->node;
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
        if (isset($map['Node'])) {
            $model->node = node::fromMap($map['Node']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
