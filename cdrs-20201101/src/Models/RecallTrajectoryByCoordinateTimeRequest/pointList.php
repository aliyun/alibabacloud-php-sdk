<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\RecallTrajectoryByCoordinateTimeRequest;

use AlibabaCloud\Tea\Model;

class pointList extends Model
{
    /**
     * @var float
     */
    public $deltaDistance;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var float
     */
    public $latitude;

    /**
     * @var float
     */
    public $longitude;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'deltaDistance' => 'DeltaDistance',
        'endTime'       => 'EndTime',
        'latitude'      => 'Latitude',
        'longitude'     => 'Longitude',
        'startTime'     => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deltaDistance) {
            $res['DeltaDistance'] = $this->deltaDistance;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->latitude) {
            $res['Latitude'] = $this->latitude;
        }
        if (null !== $this->longitude) {
            $res['Longitude'] = $this->longitude;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['DeltaDistance'])) {
            $model->deltaDistance = $map['DeltaDistance'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Latitude'])) {
            $model->latitude = $map['Latitude'];
        }
        if (isset($map['Longitude'])) {
            $model->longitude = $map['Longitude'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
