<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListVpcPublishedRouteEntriesResponseBody\routeEntries;
use AlibabaCloud\Tea\Model;

class ListVpcPublishedRouteEntriesResponseBody extends Model
{
    /**
     * @description Indicates whether there is a token for the next query. Values:
     *
     * - If **NextToken** is empty, it means there is no next query.
     * - If **NextToken** has a return value, this value indicates the token for the start of the next query.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description Request ID.
     *
     * @example 1D0971B2-A35A-42C1-A44C-E91360C36C0B
     *
     * @var string
     */
    public $requestId;

    /**
     * @description List of route entry publishing status information.
     *
     * @var routeEntries[]
     */
    public $routeEntries;
    protected $_name = [
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'routeEntries' => 'RouteEntries',
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
        if (null !== $this->routeEntries) {
            $res['RouteEntries'] = [];
            if (null !== $this->routeEntries && \is_array($this->routeEntries)) {
                $n = 0;
                foreach ($this->routeEntries as $item) {
                    $res['RouteEntries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVpcPublishedRouteEntriesResponseBody
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
        if (isset($map['RouteEntries'])) {
            if (!empty($map['RouteEntries'])) {
                $model->routeEntries = [];
                $n = 0;
                foreach ($map['RouteEntries'] as $item) {
                    $model->routeEntries[$n++] = null !== $item ? routeEntries::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
