<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oosops\V20190601\Models;

use AlibabaCloud\SDK\Oosops\V20190601\Models\ListFailureMsgsResponseBody\failureMsgs;
use AlibabaCloud\Tea\Model;

class ListFailureMsgsResponseBody extends Model
{
    /**
     * @var failureMsgs[]
     */
    public $failureMsgs;

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
        'failureMsgs' => 'FailureMsgs',
        'maxResults'  => 'MaxResults',
        'nextToken'   => 'NextToken',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failureMsgs) {
            $res['FailureMsgs'] = [];
            if (null !== $this->failureMsgs && \is_array($this->failureMsgs)) {
                $n = 0;
                foreach ($this->failureMsgs as $item) {
                    $res['FailureMsgs'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListFailureMsgsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailureMsgs'])) {
            if (!empty($map['FailureMsgs'])) {
                $model->failureMsgs = [];
                $n                  = 0;
                foreach ($map['FailureMsgs'] as $item) {
                    $model->failureMsgs[$n++] = null !== $item ? failureMsgs::fromMap($item) : $item;
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
