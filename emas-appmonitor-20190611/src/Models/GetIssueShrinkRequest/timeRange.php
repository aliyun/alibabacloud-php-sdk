<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emasappmonitor\V20190611\Models\GetIssueShrinkRequest;

use AlibabaCloud\Dara\Model;

class timeRange extends Model
{
    /**
     * @var int
     */
    public $endTime;
    /**
     * @var int
     */
    public $granularity;
    /**
     * @var string
     */
    public $granularityUnit;
    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime'         => 'EndTime',
        'granularity'     => 'Granularity',
        'granularityUnit' => 'GranularityUnit',
        'startTime'       => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->granularity) {
            $res['Granularity'] = $this->granularity;
        }

        if (null !== $this->granularityUnit) {
            $res['GranularityUnit'] = $this->granularityUnit;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Granularity'])) {
            $model->granularity = $map['Granularity'];
        }

        if (isset($map['GranularityUnit'])) {
            $model->granularityUnit = $map['GranularityUnit'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
