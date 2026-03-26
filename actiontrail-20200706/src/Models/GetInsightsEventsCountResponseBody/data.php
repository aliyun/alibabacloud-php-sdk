<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models\GetInsightsEventsCountResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $insightType;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'count' => 'Count',
        'insightType' => 'InsightType',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->insightType) {
            $res['InsightType'] = $this->insightType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['InsightType'])) {
            $model->insightType = $map['InsightType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
