<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelUserMetricsResponseBody;

use AlibabaCloud\Dara\Model;

class overallData extends Model
{
    /**
     * @var int
     */
    public $totalBadExpNum;

    /**
     * @var int
     */
    public $totalJoinFailNum;

    /**
     * @var int
     */
    public $totalPubUserNum;

    /**
     * @var int
     */
    public $totalSubUserNum;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
