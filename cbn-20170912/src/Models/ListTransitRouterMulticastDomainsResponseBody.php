<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterMulticastDomainsResponseBody\transitRouterMulticastDomains;
use AlibabaCloud\Tea\Model;

class ListTransitRouterMulticastDomainsResponseBody extends Model
{
    /**
     * @description $.parameters[8].schema.example
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description $.parameters[8].schema.enumValueTitles
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description $.parameters[7].schema.enumValueTitles
     *
     * @example 8A0F93D1-FD6C-56FC-B6D2-668FC92D12D2
     *
     * @var string
     */
    public $requestId;

    /**
     * @description $.parameters[8].schema.description
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description {
     * "MaxResults": 20,
     * "NextToken": "FFmyTO70tTpLG6I3FmYAXGKPd****",
     * {
     * "TransitRouterMulticastDomainId": "tr-mcast-domain-3r3bvbypxqheej****",
     * }
     * @var transitRouterMulticastDomains[]
     */
    public $transitRouterMulticastDomains;
    protected $_name = [
        'maxResults'                    => 'MaxResults',
        'nextToken'                     => 'NextToken',
        'requestId'                     => 'RequestId',
        'totalCount'                    => 'TotalCount',
        'transitRouterMulticastDomains' => 'TransitRouterMulticastDomains',
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
        if (null !== $this->transitRouterMulticastDomains) {
            $res['TransitRouterMulticastDomains'] = [];
            if (null !== $this->transitRouterMulticastDomains && \is_array($this->transitRouterMulticastDomains)) {
                $n = 0;
                foreach ($this->transitRouterMulticastDomains as $item) {
                    $res['TransitRouterMulticastDomains'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTransitRouterMulticastDomainsResponseBody
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
        if (isset($map['TransitRouterMulticastDomains'])) {
            if (!empty($map['TransitRouterMulticastDomains'])) {
                $model->transitRouterMulticastDomains = [];
                $n                                    = 0;
                foreach ($map['TransitRouterMulticastDomains'] as $item) {
                    $model->transitRouterMulticastDomains[$n++] = null !== $item ? transitRouterMulticastDomains::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
