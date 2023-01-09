<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models;

use AlibabaCloud\Tea\Model;

class AdjustJMeterSceneSpeedRequest extends Model
{
    /**
     * @example DYYPZIH
     *
     * @var string
     */
    public $reportId;

    /**
     * @example 100
     *
     * @var int
     */
    public $speed;
    protected $_name = [
        'reportId' => 'ReportId',
        'speed'    => 'Speed',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }
        if (null !== $this->speed) {
            $res['Speed'] = $this->speed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AdjustJMeterSceneSpeedRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }
        if (isset($map['Speed'])) {
            $model->speed = $map['Speed'];
        }

        return $model;
    }
}
