<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gwlb\V20240415\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\GetListenerHealthStatusResponseBody\listenerHealthStatus;

class GetListenerHealthStatusResponseBody extends Model
{
    /**
     * @var listenerHealthStatus[]
     */
    public $listenerHealthStatus;

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

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'listenerHealthStatus' => 'ListenerHealthStatus',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->listenerHealthStatus)) {
            Model::validateArray($this->listenerHealthStatus);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->listenerHealthStatus) {
            if (\is_array($this->listenerHealthStatus)) {
                $res['ListenerHealthStatus'] = [];
                $n1 = 0;
                foreach ($this->listenerHealthStatus as $item1) {
                    $res['ListenerHealthStatus'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['ListenerHealthStatus'])) {
            if (!empty($map['ListenerHealthStatus'])) {
                $model->listenerHealthStatus = [];
                $n1 = 0;
                foreach ($map['ListenerHealthStatus'] as $item1) {
                    $model->listenerHealthStatus[$n1++] = listenerHealthStatus::fromMap($item1);
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

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
