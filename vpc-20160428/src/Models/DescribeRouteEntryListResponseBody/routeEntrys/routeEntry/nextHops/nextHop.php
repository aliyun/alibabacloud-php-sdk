<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteEntryListResponseBody\routeEntrys\routeEntry\nextHops;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteEntryListResponseBody\routeEntrys\routeEntry\nextHops\nextHop\nextHopRelatedInfo;

class nextHop extends Model
{
    /**
     * @var int
     */
    public $enabled;
    /**
     * @var string
     */
    public $nextHopId;
    /**
     * @var string
     */
    public $nextHopRegionId;
    /**
     * @var nextHopRelatedInfo
     */
    public $nextHopRelatedInfo;
    /**
     * @var string
     */
    public $nextHopType;
    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'enabled'            => 'Enabled',
        'nextHopId'          => 'NextHopId',
        'nextHopRegionId'    => 'NextHopRegionId',
        'nextHopRelatedInfo' => 'NextHopRelatedInfo',
        'nextHopType'        => 'NextHopType',
        'weight'             => 'Weight',
    ];

    public function validate()
    {
        if (null !== $this->nextHopRelatedInfo) {
            $this->nextHopRelatedInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->nextHopId) {
            $res['NextHopId'] = $this->nextHopId;
        }

        if (null !== $this->nextHopRegionId) {
            $res['NextHopRegionId'] = $this->nextHopRegionId;
        }

        if (null !== $this->nextHopRelatedInfo) {
            $res['NextHopRelatedInfo'] = null !== $this->nextHopRelatedInfo ? $this->nextHopRelatedInfo->toArray($noStream) : $this->nextHopRelatedInfo;
        }

        if (null !== $this->nextHopType) {
            $res['NextHopType'] = $this->nextHopType;
        }

        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['NextHopId'])) {
            $model->nextHopId = $map['NextHopId'];
        }

        if (isset($map['NextHopRegionId'])) {
            $model->nextHopRegionId = $map['NextHopRegionId'];
        }

        if (isset($map['NextHopRelatedInfo'])) {
            $model->nextHopRelatedInfo = nextHopRelatedInfo::fromMap($map['NextHopRelatedInfo']);
        }

        if (isset($map['NextHopType'])) {
            $model->nextHopType = $map['NextHopType'];
        }

        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
