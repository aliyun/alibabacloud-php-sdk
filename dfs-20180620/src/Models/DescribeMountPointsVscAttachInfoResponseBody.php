<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\SDK\DFS\V20180620\Models\DescribeMountPointsVscAttachInfoResponseBody\attachInfos;
use AlibabaCloud\Tea\Model;

class DescribeMountPointsVscAttachInfoResponseBody extends Model
{
    /**
     * @var attachInfos[]
     */
    public $attachInfos;

    /**
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example asd0daj****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 55C5FFD6-BF99-41BD-9C66-FFF39189****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'attachInfos' => 'AttachInfos',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachInfos) {
            $res['AttachInfos'] = [];
            if (null !== $this->attachInfos && \is_array($this->attachInfos)) {
                $n = 0;
                foreach ($this->attachInfos as $item) {
                    $res['AttachInfos'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeMountPointsVscAttachInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachInfos'])) {
            if (!empty($map['AttachInfos'])) {
                $model->attachInfos = [];
                $n = 0;
                foreach ($map['AttachInfos'] as $item) {
                    $model->attachInfos[$n++] = null !== $item ? attachInfos::fromMap($item) : $item;
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
