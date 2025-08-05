<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeForwardTableEntriesResponseBody\forwardTableEntries;

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

    public function validate()
    {
        if (\is_array($this->forwardTableEntries)) {
            Model::validateArray($this->forwardTableEntries);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->forwardTableEntries) {
            if (\is_array($this->forwardTableEntries)) {
                $res['ForwardTableEntries'] = [];
                $n1 = 0;
                foreach ($this->forwardTableEntries as $item1) {
                    $res['ForwardTableEntries'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ForwardTableEntries'])) {
            if (!empty($map['ForwardTableEntries'])) {
                $model->forwardTableEntries = [];
                $n1 = 0;
                foreach ($map['ForwardTableEntries'] as $item1) {
                    $model->forwardTableEntries[$n1] = forwardTableEntries::fromMap($item1);
                    ++$n1;
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
