<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelUserMetricsResponseBody;

use AlibabaCloud\Tea\Model;

class overallData extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $totalBadExpNum;

    /**
     * @example 0
     *
     * @var int
     */
    public $totalJoinFailNum;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalPubUserNum;

    /**
     * @example 3
     *
     * @var int
     */
    public $totalSubUserNum;

    /**
     * @example 5
     *
     * @var int
     */
    public $totalUserNum;
    protected $_name = [
        'totalBadExpNum' => 'TotalBadExpNum',
        'totalJoinFailNum' => 'TotalJoinFailNum',
        'totalPubUserNum' => 'TotalPubUserNum',
        'totalSubUserNum' => 'TotalSubUserNum',
        'totalUserNum' => 'TotalUserNum',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalBadExpNum) {
            $res['TotalBadExpNum'] = $this->totalBadExpNum;
        }
        if (null !== $this->totalJoinFailNum) {
            $res['TotalJoinFailNum'] = $this->totalJoinFailNum;
        }
        if (null !== $this->totalPubUserNum) {
            $res['TotalPubUserNum'] = $this->totalPubUserNum;
        }
        if (null !== $this->totalSubUserNum) {
            $res['TotalSubUserNum'] = $this->totalSubUserNum;
        }
        if (null !== $this->totalUserNum) {
            $res['TotalUserNum'] = $this->totalUserNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return overallData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalBadExpNum'])) {
            $model->totalBadExpNum = $map['TotalBadExpNum'];
        }
        if (isset($map['TotalJoinFailNum'])) {
            $model->totalJoinFailNum = $map['TotalJoinFailNum'];
        }
        if (isset($map['TotalPubUserNum'])) {
            $model->totalPubUserNum = $map['TotalPubUserNum'];
        }
        if (isset($map['TotalSubUserNum'])) {
            $model->totalSubUserNum = $map['TotalSubUserNum'];
        }
        if (isset($map['TotalUserNum'])) {
            $model->totalUserNum = $map['TotalUserNum'];
        }

        return $model;
    }
}
