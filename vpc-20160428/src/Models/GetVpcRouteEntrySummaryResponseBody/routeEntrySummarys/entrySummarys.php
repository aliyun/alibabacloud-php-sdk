<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\GetVpcRouteEntrySummaryResponseBody\routeEntrySummarys;

use AlibabaCloud\Tea\Model;

class entrySummarys extends Model
{
    /**
     * @description The number of entries returned.
     *
     * @example 10
     *
     * @var int
     */
    public $count;

    /**
     * @description The type of the route. Valid values:
     *
     *   **All**: all route types
     *   **Custom**: a custom route
     *   **System**: a system route
     *   **BGP**: a BGP route
     *   **CEN**: a CEN route
     *
     * @example Custom
     *
     * @var string
     */
    public $routeEntryType;
    protected $_name = [
        'count'          => 'Count',
        'routeEntryType' => 'RouteEntryType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->routeEntryType) {
            $res['RouteEntryType'] = $this->routeEntryType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return entrySummarys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['RouteEntryType'])) {
            $model->routeEntryType = $map['RouteEntryType'];
        }

        return $model;
    }
}
