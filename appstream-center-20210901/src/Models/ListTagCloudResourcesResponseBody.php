<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListTagCloudResourcesResponseBody\resourceTags;
use AlibabaCloud\Tea\Model;

class ListTagCloudResourcesResponseBody extends Model
{
    /**
     * @description Indicates whether the next query is required.
     *
     * @example AAAAAYRHtOLVQzCYj17y+OP7LZRrUJaF4rnBGQkWwMiVHlLZBB1w3Us37CVvhvyM0TXavA==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The tags added to the cloud resources.
     *
     * @var resourceTags[]
     */
    public $resourceTags;

    /**
     * @description The total number of entries.
     *
     * @example 15
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'resourceTags' => 'ResourceTags',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceTags) {
            $res['ResourceTags'] = [];
            if (null !== $this->resourceTags && \is_array($this->resourceTags)) {
                $n = 0;
                foreach ($this->resourceTags as $item) {
                    $res['ResourceTags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTagCloudResourcesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceTags'])) {
            if (!empty($map['ResourceTags'])) {
                $model->resourceTags = [];
                $n = 0;
                foreach ($map['ResourceTags'] as $item) {
                    $model->resourceTags[$n++] = null !== $item ? resourceTags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
