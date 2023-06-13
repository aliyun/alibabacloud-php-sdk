<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeRegionBandwidthQuotaResponseBody\bandwidthQuota;

use AlibabaCloud\Tea\Model;

class bandwidthInfo extends Model
{
    /**
     * @var string
     */
    public $isp;

    /**
     * @var int
     */
    public $monthAverageQuota;

    /**
     * @var int
     */
    public $monthMax;

    /**
     * @var int
     */
    public $weekAverageQuota;

    /**
     * @var int
     */
    public $weekMax;
    protected $_name = [
        'isp'               => 'Isp',
        'monthAverageQuota' => 'MonthAverageQuota',
        'monthMax'          => 'MonthMax',
        'weekAverageQuota'  => 'WeekAverageQuota',
        'weekMax'           => 'WeekMax',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }
        if (null !== $this->monthAverageQuota) {
            $res['MonthAverageQuota'] = $this->monthAverageQuota;
        }
        if (null !== $this->monthMax) {
            $res['MonthMax'] = $this->monthMax;
        }
        if (null !== $this->weekAverageQuota) {
            $res['WeekAverageQuota'] = $this->weekAverageQuota;
        }
        if (null !== $this->weekMax) {
            $res['WeekMax'] = $this->weekMax;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bandwidthInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }
        if (isset($map['MonthAverageQuota'])) {
            $model->monthAverageQuota = $map['MonthAverageQuota'];
        }
        if (isset($map['MonthMax'])) {
            $model->monthMax = $map['MonthMax'];
        }
        if (isset($map['WeekAverageQuota'])) {
            $model->weekAverageQuota = $map['WeekAverageQuota'];
        }
        if (isset($map['WeekMax'])) {
            $model->weekMax = $map['WeekMax'];
        }

        return $model;
    }
}
