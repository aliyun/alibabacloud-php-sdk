<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterEcrAttachmentsResponseBody\transitRouterAttachments;
use AlibabaCloud\Tea\Model;

class ListTransitRouterEcrAttachmentsResponseBody extends Model
{
    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 461EC1B5-04A8-4706-8764-8F5BCEF48A6F
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 4
     *
     * @var int
     */
    public $totalCount;

    /**
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
     * @return ListTransitRouterEcrAttachmentsResponseBody
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
