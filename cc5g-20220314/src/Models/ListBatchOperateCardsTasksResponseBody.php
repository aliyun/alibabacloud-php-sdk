<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models;

use AlibabaCloud\SDK\CC5G\V20220314\Models\ListBatchOperateCardsTasksResponseBody\batchOperateCardsTasks;
use AlibabaCloud\Tea\Model;

class ListBatchOperateCardsTasksResponseBody extends Model
{
    /**
     * @var batchOperateCardsTasks[]
     */
    public $batchOperateCardsTasks;

    /**
     * @var string
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
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'batchOperateCardsTasks' => 'BatchOperateCardsTasks',
        'maxResults'             => 'MaxResults',
        'nextToken'              => 'NextToken',
        'requestId'              => 'RequestId',
        'totalCount'             => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchOperateCardsTasks) {
            $res['BatchOperateCardsTasks'] = [];
            if (null !== $this->batchOperateCardsTasks && \is_array($this->batchOperateCardsTasks)) {
                $n = 0;
                foreach ($this->batchOperateCardsTasks as $item) {
                    $res['BatchOperateCardsTasks'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return ListBatchOperateCardsTasksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchOperateCardsTasks'])) {
            if (!empty($map['BatchOperateCardsTasks'])) {
                $model->batchOperateCardsTasks = [];
                $n                             = 0;
                foreach ($map['BatchOperateCardsTasks'] as $item) {
                    $model->batchOperateCardsTasks[$n++] = null !== $item ? batchOperateCardsTasks::fromMap($item) : $item;
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
