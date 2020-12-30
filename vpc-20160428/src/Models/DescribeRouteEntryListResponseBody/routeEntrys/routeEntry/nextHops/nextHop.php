<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteEntryListResponseBody\routeEntrys\routeEntry\nextHops;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteEntryListResponseBody\routeEntrys\routeEntry\nextHops\nextHop\nextHopRelatedInfo;
use AlibabaCloud\Tea\Model;

class nextHop extends Model
{
    /**
     * @var int
     */
    public $weight;

    /**
     * @var string
     */
    public $nextHopId;

    /**
     * @var int
     */
    public $enabled;

    /**
     * @var string
     */
    public $nextHopType;

    /**
     * @var nextHopRelatedInfo
     */
    public $nextHopRelatedInfo;

    /**
     * @var string
     */
    public $nextHopRegionId;
    protected $_name = [
        'weight'             => 'Weight',
        'nextHopId'          => 'NextHopId',
        'enabled'            => 'Enabled',
        'nextHopType'        => 'NextHopType',
        'nextHopRelatedInfo' => 'NextHopRelatedInfo',
        'nextHopRegionId'    => 'NextHopRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }
        if (null !== $this->nextHopId) {
            $res['NextHopId'] = $this->nextHopId;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->nextHopType) {
            $res['NextHopType'] = $this->nextHopType;
        }
        if (null !== $this->nextHopRelatedInfo) {
            $res['NextHopRelatedInfo'] = null !== $this->nextHopRelatedInfo ? $this->nextHopRelatedInfo->toMap() : null;
        }
        if (null !== $this->nextHopRegionId) {
            $res['NextHopRegionId'] = $this->nextHopRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nextHop
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }
        if (isset($map['NextHopId'])) {
            $model->nextHopId = $map['NextHopId'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['NextHopType'])) {
            $model->nextHopType = $map['NextHopType'];
        }
        if (isset($map['NextHopRelatedInfo'])) {
            $model->nextHopRelatedInfo = nextHopRelatedInfo::fromMap($map['NextHopRelatedInfo']);
        }
        if (isset($map['NextHopRegionId'])) {
            $model->nextHopRegionId = $map['NextHopRegionId'];
        }

        return $model;
    }
}
