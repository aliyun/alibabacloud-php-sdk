<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\ListCenChildInstanceRouteEntriesToAttachmentResponseBody\routeEntry;
use AlibabaCloud\Tea\Model;

class ListCenChildInstanceRouteEntriesToAttachmentResponseBody extends Model
{
    /**
     * @description The token that determines the start point of the next query. Valid values:
     *
     *   If **NextToken** is not returned, it indicates that no additional results exist.
     *   If **NextToken** was returned in the previous query, specify the value to obtain the next set of results.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the region.
     *
     * @example 530BC816-F575-412A-AAB2-435125D26328
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The detailed information about the route.
     *
     * @var routeEntry[]
     */
    public $routeEntry;
    protected $_name = [
        'nextToken'  => 'NextToken',
        'requestId'  => 'RequestId',
        'routeEntry' => 'RouteEntry',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->routeEntry) {
            $res['RouteEntry'] = [];
            if (null !== $this->routeEntry && \is_array($this->routeEntry)) {
                $n = 0;
                foreach ($this->routeEntry as $item) {
                    $res['RouteEntry'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCenChildInstanceRouteEntriesToAttachmentResponseBody
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
        if (isset($map['RouteEntry'])) {
            if (!empty($map['RouteEntry'])) {
                $model->routeEntry = [];
                $n                 = 0;
                foreach ($map['RouteEntry'] as $item) {
                    $model->routeEntry[$n++] = null !== $item ? routeEntry::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
