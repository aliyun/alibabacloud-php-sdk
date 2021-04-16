<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\RecallTrajectoryByCoordinateTimeRequest;

use AlibabaCloud\Tea\Model;

class pointList extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var float
     */
    public $longitude;

    /**
     * @var float
     */
    public $latitude;

    /**
     * @var float
     */
    public $deltaDistance;
    protected $_name = [
        'endTime'       => 'EndTime',
        'startTime'     => 'StartTime',
        'longitude'     => 'Longitude',
        'latitude'      => 'Latitude',
        'deltaDistance' => 'DeltaDistance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->longitude) {
            $res['Longitude'] = $this->longitude;
        }
        if (null !== $this->latitude) {
            $res['Latitude'] = $this->latitude;
        }
        if (null !== $this->deltaDistance) {
            $res['DeltaDistance'] = $this->deltaDistance;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pointList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Longitude'])) {
            $model->longitude = $map['Longitude'];
        }
        if (isset($map['Latitude'])) {
            $model->latitude = $map['Latitude'];
        }
        if (isset($map['DeltaDistance'])) {
            $model->deltaDistance = $map['DeltaDistance'];
        }

        return $model;
    }
}
