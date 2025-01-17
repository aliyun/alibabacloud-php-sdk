<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListBatchMediaProducingJobsResponseBody\editingBatchJobList;

class ListBatchMediaProducingJobsResponseBody extends Model
{
    /**
     * @var editingBatchJobList[]
     */
    public $editingBatchJobList;
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
        'editingBatchJobList' => 'EditingBatchJobList',
        'maxResults'          => 'MaxResults',
        'nextToken'           => 'NextToken',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->editingBatchJobList)) {
            Model::validateArray($this->editingBatchJobList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->editingBatchJobList) {
            if (\is_array($this->editingBatchJobList)) {
                $res['EditingBatchJobList'] = [];
                $n1                         = 0;
                foreach ($this->editingBatchJobList as $item1) {
                    $res['EditingBatchJobList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EditingBatchJobList'])) {
            if (!empty($map['EditingBatchJobList'])) {
                $model->editingBatchJobList = [];
                $n1                         = 0;
                foreach ($map['EditingBatchJobList'] as $item1) {
                    $model->editingBatchJobList[$n1++] = editingBatchJobList::fromMap($item1);
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
