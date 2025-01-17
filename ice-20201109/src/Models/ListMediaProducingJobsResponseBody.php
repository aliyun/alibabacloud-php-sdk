<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaProducingJobsResponseBody\mediaProducingJobList;

class ListMediaProducingJobsResponseBody extends Model
{
    /**
     * @var string
     */
    public $maxResults;
    /**
     * @var mediaProducingJobList[]
     */
    public $mediaProducingJobList;
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'maxResults'            => 'MaxResults',
        'mediaProducingJobList' => 'MediaProducingJobList',
        'nextToken'             => 'NextToken',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->mediaProducingJobList)) {
            Model::validateArray($this->mediaProducingJobList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->mediaProducingJobList) {
            if (\is_array($this->mediaProducingJobList)) {
                $res['MediaProducingJobList'] = [];
                $n1                           = 0;
                foreach ($this->mediaProducingJobList as $item1) {
                    $res['MediaProducingJobList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['MediaProducingJobList'])) {
            if (!empty($map['MediaProducingJobList'])) {
                $model->mediaProducingJobList = [];
                $n1                           = 0;
                foreach ($map['MediaProducingJobList'] as $item1) {
                    $model->mediaProducingJobList[$n1++] = mediaProducingJobList::fromMap($item1);
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
