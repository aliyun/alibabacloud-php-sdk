<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainMax95BpsDataResponseBody\detailData;

use AlibabaCloud\Tea\Model;

class max95Detail extends Model
{
    /**
     * @example CN
     *
     * @var string
     */
    public $area;

    /**
     * @example 16777590.28
     *
     * @var float
     */
    public $max95Bps;

    /**
     * @example 2015-12-11T21:05:00Z
     *
     * @var string
     */
    public $max95BpsPeakTime;

    /**
     * @example 2024-01-18 10:11:32
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'area'             => 'Area',
        'max95Bps'         => 'Max95Bps',
        'max95BpsPeakTime' => 'Max95BpsPeakTime',
        'timeStamp'        => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }
        if (null !== $this->max95Bps) {
            $res['Max95Bps'] = $this->max95Bps;
        }
        if (null !== $this->max95BpsPeakTime) {
            $res['Max95BpsPeakTime'] = $this->max95BpsPeakTime;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return max95Detail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }
        if (isset($map['Max95Bps'])) {
            $model->max95Bps = $map['Max95Bps'];
        }
        if (isset($map['Max95BpsPeakTime'])) {
            $model->max95BpsPeakTime = $map['Max95BpsPeakTime'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
