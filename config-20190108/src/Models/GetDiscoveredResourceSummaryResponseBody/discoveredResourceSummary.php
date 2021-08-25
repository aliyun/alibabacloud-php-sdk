<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models\GetDiscoveredResourceSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class discoveredResourceSummary extends Model
{
    /**
     * @var int
     */
    public $resourceTypeCount;

    /**
     * @var int
     */
    public $regionCount;

    /**
     * @var int
     */
    public $resourceCount;
    protected $_name = [
        'resourceTypeCount' => 'ResourceTypeCount',
        'regionCount'       => 'RegionCount',
        'resourceCount'     => 'ResourceCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceTypeCount) {
            $res['ResourceTypeCount'] = $this->resourceTypeCount;
        }
        if (null !== $this->regionCount) {
            $res['RegionCount'] = $this->regionCount;
        }
        if (null !== $this->resourceCount) {
            $res['ResourceCount'] = $this->resourceCount;
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
        if (isset($map['ResourceTypeCount'])) {
            $model->resourceTypeCount = $map['ResourceTypeCount'];
        }
        if (isset($map['RegionCount'])) {
            $model->regionCount = $map['RegionCount'];
        }
        if (isset($map['ResourceCount'])) {
            $model->resourceCount = $map['ResourceCount'];
        }

        return $model;
    }
}
