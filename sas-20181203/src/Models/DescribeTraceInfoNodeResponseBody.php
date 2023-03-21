<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeTraceInfoNodeResponseBody\node;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->node) {
            $res['Node'] = null !== $this->node ? $this->node->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTraceInfoNodeResponseBody
     */
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
