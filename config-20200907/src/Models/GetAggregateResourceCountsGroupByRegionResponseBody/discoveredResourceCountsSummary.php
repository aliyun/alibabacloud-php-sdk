<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceCountsGroupByRegionResponseBody;

use AlibabaCloud\Tea\Model;

class discoveredResourceCountsSummary extends Model
{
    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $resourceCount;
    protected $_name = [
        'region'        => 'Region',
        'resourceCount' => 'ResourceCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resourceCount) {
            $res['ResourceCount'] = $this->resourceCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return discoveredResourceCountsSummary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ResourceCount'])) {
            $model->resourceCount = $map['ResourceCount'];
        }

        return $model;
    }
}
