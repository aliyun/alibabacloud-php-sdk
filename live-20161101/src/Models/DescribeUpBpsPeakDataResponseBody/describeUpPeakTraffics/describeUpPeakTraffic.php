<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeUpBpsPeakDataResponseBody\describeUpPeakTraffics;

use AlibabaCloud\Tea\Model;

class describeUpPeakTraffic extends Model
{
    /**
     * @description The daily peak inbound bandwidth.
     *
     * @example 777.2727083333333
     *
     * @var string
     */
    public $bandWidth;

    /**
     * @description The time when the daily peak bandwidth is reached.
     *
     * @example 1522180000000
     *
     * @var string
     */
    public $peakTime;

    /**
     * @description The time queried on the day.
     *
     * @example 1522080000000
     *
     * @var string
     */
    public $queryTime;

    /**
     * @description The category of the statistical data. If the DomainSwitch parameter is set to on, the value of this parameter is the domain name. If the DomainSwitch parameter is set to off or not specified, the value of this parameter is the user ID.
     *
     * @example push-live.aliyuncs.com
     *
     * @var string
     */
    public $statName;
    protected $_name = [
        'bandWidth' => 'BandWidth',
        'peakTime' => 'PeakTime',
        'queryTime' => 'QueryTime',
        'statName' => 'StatName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandWidth) {
            $res['BandWidth'] = $this->bandWidth;
        }
        if (null !== $this->peakTime) {
            $res['PeakTime'] = $this->peakTime;
        }
        if (null !== $this->queryTime) {
            $res['QueryTime'] = $this->queryTime;
        }
        if (null !== $this->statName) {
            $res['StatName'] = $this->statName;
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
        if (isset($map['BandWidth'])) {
            $model->bandWidth = $map['BandWidth'];
        }
        if (isset($map['PeakTime'])) {
            $model->peakTime = $map['PeakTime'];
        }
        if (isset($map['QueryTime'])) {
            $model->queryTime = $map['QueryTime'];
        }
        if (isset($map['StatName'])) {
            $model->statName = $map['StatName'];
        }

        return $model;
    }
}
