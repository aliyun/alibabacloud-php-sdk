<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeChannelUserMetricsResponseBody;

use AlibabaCloud\Tea\Model;

class overallData extends Model
{
    /**
     * @description 累计通信体验异常用户数量。
     *
     * @var int
     */
    public $totalBadExpNum;

    /**
     * @description 累计加入频道异常用户数量。
     *
     * @var int
     */
    public $totalJoinFailNum;

    /**
     * @description 累计发布端用户数量。
     *
     * @var int
     */
    public $totalPubUserNum;

    /**
     * @description 累计订阅端用户数量。
     *
     * @var int
     */
    public $totalSubUserNum;

    /**
     * @description 累计用户数量。
     *
     * @var int
     */
    public $totalUserNum;
    protected $_name = [
        'totalBadExpNum'   => 'TotalBadExpNum',
        'totalJoinFailNum' => 'TotalJoinFailNum',
        'totalPubUserNum'  => 'TotalPubUserNum',
        'totalSubUserNum'  => 'TotalSubUserNum',
        'totalUserNum'     => 'TotalUserNum',
    ];

    public function validate()
    {
    }

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
