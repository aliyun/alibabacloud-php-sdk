<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterPeerAttachmentsResponseBody\transitRouterAttachments;
use AlibabaCloud\Tea\Model;

class ListTransitRouterPeerAttachmentsResponseBody extends Model
{
    /**
     * @description The number of entries returned per page.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The returned value of NextToken is a pagination token, which can be used in the next request to retrieve a new page of results. Valid values:
     *
     *   If the **NextToken** parameter is empty, no next page exists.
     *   If **NextToken** was returned in the previous query, specify the value to obtain the next set of results.
     *
     * @example dd20****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example AA97AFA3-8E48-4BD7-9F3E-A9F6176018A0
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description A list of inter-region connections.
     *
     * @var transitRouterAttachments[]
     */
    public $transitRouterAttachments;
    protected $_name = [
        'maxResults'               => 'MaxResults',
        'nextToken'                => 'NextToken',
        'requestId'                => 'RequestId',
        'totalCount'               => 'TotalCount',
        'transitRouterAttachments' => 'TransitRouterAttachments',
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
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->transitRouterAttachments) {
            $res['TransitRouterAttachments'] = [];
            if (null !== $this->transitRouterAttachments && \is_array($this->transitRouterAttachments)) {
                $n = 0;
                foreach ($this->transitRouterAttachments as $item) {
                    $res['TransitRouterAttachments'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTransitRouterPeerAttachmentsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['TransitRouterAttachments'])) {
            if (!empty($map['TransitRouterAttachments'])) {
                $model->transitRouterAttachments = [];
                $n                               = 0;
                foreach ($map['TransitRouterAttachments'] as $item) {
                    $model->transitRouterAttachments[$n++] = null !== $item ? transitRouterAttachments::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
