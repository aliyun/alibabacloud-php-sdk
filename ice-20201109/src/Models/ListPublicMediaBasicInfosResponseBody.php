<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListPublicMediaBasicInfosResponseBody\mediaInfos;
use AlibabaCloud\Tea\Model;

class ListPublicMediaBasicInfosResponseBody extends Model
{
    /**
     * @description The maximum number of entries returned.
     *
     * @example 2
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The media assets that meet the specified conditions.
     *
     * @var mediaInfos[]
     */
    public $mediaInfos;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results. If NextToken is empty, no next page exists.
     *
     * @example 8EqYpQbZ6Eh7+Zz8DxVYoQ==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example ******B7-7F87-4792-BFE9-63CD21******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of media assets that meet the specified conditions.
     *
     * @example 2
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'mediaInfos' => 'MediaInfos',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->mediaInfos) {
            $res['MediaInfos'] = [];
            if (null !== $this->mediaInfos && \is_array($this->mediaInfos)) {
                $n = 0;
                foreach ($this->mediaInfos as $item) {
                    $res['MediaInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return ListPublicMediaBasicInfosResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['MediaInfos'])) {
            if (!empty($map['MediaInfos'])) {
                $model->mediaInfos = [];
                $n = 0;
                foreach ($map['MediaInfos'] as $item) {
                    $model->mediaInfos[$n++] = null !== $item ? mediaInfos::fromMap($item) : $item;
                }
            }
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
