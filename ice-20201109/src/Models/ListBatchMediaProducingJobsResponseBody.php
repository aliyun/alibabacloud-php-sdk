<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListBatchMediaProducingJobsResponseBody\editingBatchJobList;
use AlibabaCloud\Tea\Model;

class ListBatchMediaProducingJobsResponseBody extends Model
{
    /**
     * @var editingBatchJobList[]
     */
    public $editingBatchJobList;

    /**
     * @example 100
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 8EqYpQbZ6Eh7+Zz8DxVYoQ==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description Id of the request
     *
     * @example ******3B-0E1A-586A-AC29-742247******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'editingBatchJobList' => 'EditingBatchJobList',
        'maxResults'          => 'MaxResults',
        'nextToken'           => 'NextToken',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->editingBatchJobList) {
            $res['EditingBatchJobList'] = [];
            if (null !== $this->editingBatchJobList && \is_array($this->editingBatchJobList)) {
                $n = 0;
                foreach ($this->editingBatchJobList as $item) {
                    $res['EditingBatchJobList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListBatchMediaProducingJobsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EditingBatchJobList'])) {
            if (!empty($map['EditingBatchJobList'])) {
                $model->editingBatchJobList = [];
                $n                          = 0;
                foreach ($map['EditingBatchJobList'] as $item) {
                    $model->editingBatchJobList[$n++] = null !== $item ? editingBatchJobList::fromMap($item) : $item;
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
