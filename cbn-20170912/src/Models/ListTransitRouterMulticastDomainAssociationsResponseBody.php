<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterMulticastDomainAssociationsResponseBody\transitRouterMulticastAssociations;
use AlibabaCloud\Tea\Model;

class ListTransitRouterMulticastDomainAssociationsResponseBody extends Model
{
    /**
     * @description The number of entries returned on each page.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that determines the start point of the query. Valid values:
     *
     *   If **NextToken** is empty, it indicates that no subsequent query is to be sent.
     *   If **NextToken** was returned in the previous query, specify the value to obtain the next set of results.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example 1CD0969B-A605-5D2D-BFF0-699FD182FB7F
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
     * @description The information about the resource associated with the multicast domain.
     *
     * @var transitRouterMulticastAssociations[]
     */
    public $transitRouterMulticastAssociations;
    protected $_name = [
        'maxResults'                         => 'MaxResults',
        'nextToken'                          => 'NextToken',
        'requestId'                          => 'RequestId',
        'totalCount'                         => 'TotalCount',
        'transitRouterMulticastAssociations' => 'TransitRouterMulticastAssociations',
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
        if (null !== $this->transitRouterMulticastAssociations) {
            $res['TransitRouterMulticastAssociations'] = [];
            if (null !== $this->transitRouterMulticastAssociations && \is_array($this->transitRouterMulticastAssociations)) {
                $n = 0;
                foreach ($this->transitRouterMulticastAssociations as $item) {
                    $res['TransitRouterMulticastAssociations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTransitRouterMulticastDomainAssociationsResponseBody
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
        if (isset($map['TransitRouterMulticastAssociations'])) {
            if (!empty($map['TransitRouterMulticastAssociations'])) {
                $model->transitRouterMulticastAssociations = [];
                $n                                         = 0;
                foreach ($map['TransitRouterMulticastAssociations'] as $item) {
                    $model->transitRouterMulticastAssociations[$n++] = null !== $item ? transitRouterMulticastAssociations::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
