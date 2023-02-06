<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageComponentsResponseBody\imageComponent;
use AlibabaCloud\Tea\Model;

class DescribeImageComponentsResponseBody extends Model
{
    /**
     * @description Details about the image components.
     *
     * @var imageComponent
     */
    public $imageComponent;

    /**
     * @description The maximum number of entries returned per page.
     *
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The query token returned in this call. For information about how to use this return value, see the "Description" section in this topic.
     *
     * @example AAAAAdDWBF2****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of image components returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'imageComponent' => 'ImageComponent',
        'maxResults'     => 'MaxResults',
        'nextToken'      => 'NextToken',
        'requestId'      => 'RequestId',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageComponent) {
            $res['ImageComponent'] = null !== $this->imageComponent ? $this->imageComponent->toMap() : null;
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
     * @return DescribeImageComponentsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageComponent'])) {
            $model->imageComponent = imageComponent::fromMap($map['ImageComponent']);
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
