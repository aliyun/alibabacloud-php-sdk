<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\PreviewStackResponseBody\stack;
use AlibabaCloud\Tea\Model;

class PreviewStackResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example B288A0BE-D927-4888-B0F7-B35EF84B6E6F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the stack that is previewed.
     *
     * @var stack
     */
    public $stack;
    protected $_name = [
        'requestId' => 'RequestId',
        'stack'     => 'Stack',
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
        if (null !== $this->stack) {
            $res['Stack'] = null !== $this->stack ? $this->stack->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PreviewStackResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Stack'])) {
            $model->stack = stack::fromMap($map['Stack']);
        }

        return $model;
    }
}
