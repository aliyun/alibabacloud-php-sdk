<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class GetAggregatedDesktopsRequest extends Model
{
    /**
     * @var string
     */
    public $aggregationFactor;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $searchRegionId;
    protected $_name = [
        'aggregationFactor' => 'AggregationFactor',
        'regionId' => 'RegionId',
        'searchRegionId' => 'SearchRegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggregationFactor) {
            $res['AggregationFactor'] = $this->aggregationFactor;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->searchRegionId) {
            $res['SearchRegionId'] = $this->searchRegionId;
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
        if (isset($map['AggregationFactor'])) {
            $model->aggregationFactor = $map['AggregationFactor'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SearchRegionId'])) {
            $model->searchRegionId = $map['SearchRegionId'];
        }

        return $model;
    }
}
