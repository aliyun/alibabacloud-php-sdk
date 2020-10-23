<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models\GetDiscoveredResourceSummaryResponse;

use AlibabaCloud\Tea\Model;

class discoveredResourceSummary extends Model
{
    /**
     * @var int
     */
    public $resourceCount;

    /**
     * @var int
     */
    public $resourceTypeCount;

    /**
     * @var int
     */
    public $regionCount;
    protected $_name = [
        'resourceCount'     => 'ResourceCount',
        'resourceTypeCount' => 'ResourceTypeCount',
        'regionCount'       => 'RegionCount',
    ];

    public function validate()
    {
        Model::validateRequired('resourceCount', $this->resourceCount, true);
        Model::validateRequired('resourceTypeCount', $this->resourceTypeCount, true);
        Model::validateRequired('regionCount', $this->regionCount, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceCount) {
            $res['ResourceCount'] = $this->resourceCount;
        }
        if (null !== $this->resourceTypeCount) {
            $res['ResourceTypeCount'] = $this->resourceTypeCount;
        }
        if (null !== $this->regionCount) {
            $res['RegionCount'] = $this->regionCount;
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
        if (isset($map['ResourceCount'])) {
            $model->resourceCount = $map['ResourceCount'];
        }
        if (isset($map['ResourceTypeCount'])) {
            $model->resourceTypeCount = $map['ResourceTypeCount'];
        }
        if (isset($map['RegionCount'])) {
            $model->regionCount = $map['RegionCount'];
        }

        return $model;
    }
}
