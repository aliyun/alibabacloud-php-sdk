<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeInvocationsResponse\invocations;
use AlibabaCloud\Tea\Model;

class DescribeInvocationsResponse extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var invocations[]
     */
    public $invocations;
    protected $_name = [
        'nextToken'   => 'NextToken',
        'requestId'   => 'RequestId',
        'invocations' => 'Invocations',
    ];

    public function validate()
    {
        Model::validateRequired('nextToken', $this->nextToken, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('invocations', $this->invocations, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->invocations) {
            $res['Invocations'] = [];
            if (null !== $this->invocations && \is_array($this->invocations)) {
                $n = 0;
                foreach ($this->invocations as $item) {
                    $res['Invocations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInvocationsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Invocations'])) {
            if (!empty($map['Invocations'])) {
                $model->invocations = [];
                $n                  = 0;
                foreach ($map['Invocations'] as $item) {
                    $model->invocations[$n++] = null !== $item ? invocations::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
