<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models\AppliedStatResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 活跃应用个数
     *
     * @var int
     */
    public $activeApplications;

    /**
     * @description 日均应用运行时长
     *
     * @var int
     */
    public $averageDailyRuntime;

    /**
     * @description 应用并发数量峰值
     *
     * @var int
     */
    public $peakConcurrency;

    /**
     * @description 次均应用时长
     *
     * @var int
     */
    public $secondaryAverageTime;
    protected $_name = [
        'activeApplications'   => 'ActiveApplications',
        'averageDailyRuntime'  => 'AverageDailyRuntime',
        'peakConcurrency'      => 'PeakConcurrency',
        'secondaryAverageTime' => 'SecondaryAverageTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeApplications) {
            $res['ActiveApplications'] = $this->activeApplications;
        }
        if (null !== $this->averageDailyRuntime) {
            $res['AverageDailyRuntime'] = $this->averageDailyRuntime;
        }
        if (null !== $this->peakConcurrency) {
            $res['PeakConcurrency'] = $this->peakConcurrency;
        }
        if (null !== $this->secondaryAverageTime) {
            $res['SecondaryAverageTime'] = $this->secondaryAverageTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveApplications'])) {
            $model->activeApplications = $map['ActiveApplications'];
        }
        if (isset($map['AverageDailyRuntime'])) {
            $model->averageDailyRuntime = $map['AverageDailyRuntime'];
        }
        if (isset($map['PeakConcurrency'])) {
            $model->peakConcurrency = $map['PeakConcurrency'];
        }
        if (isset($map['SecondaryAverageTime'])) {
            $model->secondaryAverageTime = $map['SecondaryAverageTime'];
        }

        return $model;
    }
}
