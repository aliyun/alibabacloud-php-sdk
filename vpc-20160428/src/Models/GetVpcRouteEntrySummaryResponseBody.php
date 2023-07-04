<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\GetVpcRouteEntrySummaryResponseBody\routeEntrySummarys;
use AlibabaCloud\Tea\Model;

class GetVpcRouteEntrySummaryResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example DC668356-BCB4-42FD-9BC3-FA2B2E04B634
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the routes in the route tables.
     *
     * @var routeEntrySummarys[]
     */
    public $routeEntrySummarys;
    protected $_name = [
        'requestId'          => 'RequestId',
        'routeEntrySummarys' => 'RouteEntrySummarys',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->routeEntrySummarys) {
            $res['RouteEntrySummarys'] = [];
            if (null !== $this->routeEntrySummarys && \is_array($this->routeEntrySummarys)) {
                $n = 0;
                foreach ($this->routeEntrySummarys as $item) {
                    $res['RouteEntrySummarys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVpcRouteEntrySummaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RouteEntrySummarys'])) {
            if (!empty($map['RouteEntrySummarys'])) {
                $model->routeEntrySummarys = [];
                $n                         = 0;
                foreach ($map['RouteEntrySummarys'] as $item) {
                    $model->routeEntrySummarys[$n++] = null !== $item ? routeEntrySummarys::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
