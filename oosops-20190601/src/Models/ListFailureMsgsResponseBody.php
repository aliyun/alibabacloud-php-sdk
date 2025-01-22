<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oosops\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Oosops\V20190601\Models\ListFailureMsgsResponseBody\failureMsgs;

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
        if (\is_array($this->failureMsgs)) {
            Model::validateArray($this->failureMsgs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failureMsgs) {
            if (\is_array($this->failureMsgs)) {
                $res['FailureMsgs'] = [];
                $n1                 = 0;
                foreach ($this->failureMsgs as $item1) {
                    $res['FailureMsgs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FailureMsgs'])) {
            if (!empty($map['FailureMsgs'])) {
                $model->failureMsgs = [];
                $n1                 = 0;
                foreach ($map['FailureMsgs'] as $item1) {
                    $model->failureMsgs[$n1++] = failureMsgs::fromMap($item1);
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
