<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVcoRouteEntriesResponseBody;

use AlibabaCloud\Tea\Model;

class vpnRouteCounts extends Model
{
    /**
     * @var int
     */
    public $routeCount;

    /**
     * @var string
     */
    public $routeEntryType;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'routeCount'     => 'RouteCount',
        'routeEntryType' => 'RouteEntryType',
        'source'         => 'Source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->routeCount) {
            $res['RouteCount'] = $this->routeCount;
        }
        if (null !== $this->routeEntryType) {
            $res['RouteEntryType'] = $this->routeEntryType;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpnRouteCounts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RouteCount'])) {
            $model->routeCount = $map['RouteCount'];
        }
        if (isset($map['RouteEntryType'])) {
            $model->routeEntryType = $map['RouteEntryType'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
