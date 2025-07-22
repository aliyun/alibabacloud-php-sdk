<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeForwardTableEntriesResponseBody\forwardTableEntries;
use AlibabaCloud\Tea\Model;

class DescribeForwardTableEntriesResponseBody extends Model
{
    /**
     * @var forwardTableEntries[]
     */
    public $forwardTableEntries;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'forwardTableEntries' => 'ForwardTableEntries',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->forwardTableEntries) {
            $res['ForwardTableEntries'] = [];
            if (null !== $this->forwardTableEntries && \is_array($this->forwardTableEntries)) {
                $n = 0;
                foreach ($this->forwardTableEntries as $item) {
                    $res['ForwardTableEntries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
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
     * @return DescribeForwardTableEntriesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ForwardTableEntries'])) {
            if (!empty($map['ForwardTableEntries'])) {
                $model->forwardTableEntries = [];
                $n = 0;
                foreach ($map['ForwardTableEntries'] as $item) {
                    $model->forwardTableEntries[$n++] = null !== $item ? forwardTableEntries::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
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
