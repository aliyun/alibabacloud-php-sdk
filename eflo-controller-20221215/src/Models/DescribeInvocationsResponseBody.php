<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeInvocationsResponseBody\invocations;
use AlibabaCloud\Tea\Model;

class DescribeInvocationsResponseBody extends Model
{
    /**
     * @var invocations
     */
    public $invocations;

    /**
     * @example 4FD06DF0-9167-5C6F-A145-F30CA4A15D54
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'invocations' => 'Invocations',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invocations) {
            $res['Invocations'] = null !== $this->invocations ? $this->invocations->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInvocationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Invocations'])) {
            $model->invocations = invocations::fromMap($map['Invocations']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
