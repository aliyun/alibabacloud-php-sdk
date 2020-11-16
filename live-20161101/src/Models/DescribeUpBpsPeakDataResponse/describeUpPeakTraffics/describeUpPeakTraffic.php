<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeUpBpsPeakDataResponse\describeUpPeakTraffics;

use AlibabaCloud\Tea\Model;

class describeUpPeakTraffic extends Model
{
    /**
     * @var string
     */
    public $peakTime;

    /**
     * @var string
     */
    public $queryTime;

    /**
     * @var string
     */
    public $statName;

    /**
     * @var string
     */
    public $bandWidth;
    protected $_name = [
        'peakTime'  => 'PeakTime',
        'queryTime' => 'QueryTime',
        'statName'  => 'StatName',
        'bandWidth' => 'BandWidth',
    ];

    public function validate()
    {
        Model::validateRequired('peakTime', $this->peakTime, true);
        Model::validateRequired('queryTime', $this->queryTime, true);
        Model::validateRequired('statName', $this->statName, true);
        Model::validateRequired('bandWidth', $this->bandWidth, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->peakTime) {
            $res['PeakTime'] = $this->peakTime;
        }
        if (null !== $this->queryTime) {
            $res['QueryTime'] = $this->queryTime;
        }
        if (null !== $this->statName) {
            $res['StatName'] = $this->statName;
        }
        if (null !== $this->bandWidth) {
            $res['BandWidth'] = $this->bandWidth;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return describeUpPeakTraffic
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PeakTime'])) {
            $model->peakTime = $map['PeakTime'];
        }
        if (isset($map['QueryTime'])) {
            $model->queryTime = $map['QueryTime'];
        }
        if (isset($map['StatName'])) {
            $model->statName = $map['StatName'];
        }
        if (isset($map['BandWidth'])) {
            $model->bandWidth = $map['BandWidth'];
        }

        return $model;
    }
}
