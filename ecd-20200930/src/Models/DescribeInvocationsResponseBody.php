<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeInvocationsResponseBody\invocations;
use AlibabaCloud\Tea\Model;

class DescribeInvocationsResponseBody extends Model
{
    /**
     * @var invocations[]
     */
    public $invocations;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'invocations' => 'Invocations',
        'nextToken'   => 'NextToken',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invocations) {
            $res['Invocations'] = [];
            if (null !== $this->invocations && \is_array($this->invocations)) {
                $n = 0;
                foreach ($this->invocations as $item) {
                    $res['Invocations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
            if (!empty($map['Invocations'])) {
                $model->invocations = [];
                $n                  = 0;
                foreach ($map['Invocations'] as $item) {
                    $model->invocations[$n++] = null !== $item ? invocations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
