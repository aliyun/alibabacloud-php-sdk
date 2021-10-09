<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models\GetDiscoveredResourceSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class discoveredResourceSummary extends Model
{
    /**
     * @var int
     */
    public $regionCount;

    /**
     * @var int
     */
    public $resourceCount;

    /**
     * @var int
     */
    public $resourceTypeCount;
    protected $_name = [
        'regionCount'       => 'RegionCount',
        'resourceCount'     => 'ResourceCount',
        'resourceTypeCount' => 'ResourceTypeCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionCount) {
            $res['RegionCount'] = $this->regionCount;
        }
        if (null !== $this->resourceCount) {
            $res['ResourceCount'] = $this->resourceCount;
        }
        if (null !== $this->resourceTypeCount) {
            $res['ResourceTypeCount'] = $this->resourceTypeCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return discoveredResourceSummary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionCount'])) {
            $model->regionCount = $map['RegionCount'];
        }
        if (isset($map['ResourceCount'])) {
            $model->resourceCount = $map['ResourceCount'];
        }
        if (isset($map['ResourceTypeCount'])) {
            $model->resourceTypeCount = $map['ResourceTypeCount'];
        }

        return $model;
    }
}
