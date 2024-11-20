<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaProducingJobsResponseBody\mediaProducingJobList;
use AlibabaCloud\Tea\Model;

class ListMediaProducingJobsResponseBody extends Model
{
    /**
     * @description The maximum number of entries returned.
     *
     * Default value: 10. Valid values: 1 to 100.
     * @example 100
     *
     * @var string
     */
    public $maxResults;

    /**
     * @description The queried media editing and production jobs.
     *
     * @var mediaProducingJobList[]
     */
    public $mediaProducingJobList;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results.
     *
     * @example 8EqYpQbZ6Eh7+Zz8DxVYoQ==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example ******11-DB8D-4A9A-875B-275798******
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->mediaProducingJobList) {
            $res['MediaProducingJobList'] = [];
            if (null !== $this->mediaProducingJobList && \is_array($this->mediaProducingJobList)) {
                $n = 0;
                foreach ($this->mediaProducingJobList as $item) {
                    $res['MediaProducingJobList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return ListMediaProducingJobsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['MediaProducingJobList'])) {
            if (!empty($map['MediaProducingJobList'])) {
                $model->mediaProducingJobList = [];
                $n                            = 0;
                foreach ($map['MediaProducingJobList'] as $item) {
                    $model->mediaProducingJobList[$n++] = null !== $item ? mediaProducingJobList::fromMap($item) : $item;
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
