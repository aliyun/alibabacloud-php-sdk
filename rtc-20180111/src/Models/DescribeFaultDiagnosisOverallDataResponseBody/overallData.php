<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeFaultDiagnosisOverallDataResponseBody;

use AlibabaCloud\Tea\Model;

class overallData extends Model
{
    /**
     * @example 20
     *
     * @var int
     */
    public $faultUserCount;

    /**
     * @example 0.1
     *
     * @var float
     */
    public $faultUserRatio;

    /**
     * @example 40
     *
     * @var int
     */
    public $totalUserCount;
    protected $_name = [
        'faultUserCount' => 'FaultUserCount',
        'faultUserRatio' => 'FaultUserRatio',
        'totalUserCount' => 'TotalUserCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faultUserCount) {
            $res['FaultUserCount'] = $this->faultUserCount;
        }
        if (null !== $this->faultUserRatio) {
            $res['FaultUserRatio'] = $this->faultUserRatio;
        }
        if (null !== $this->totalUserCount) {
            $res['TotalUserCount'] = $this->totalUserCount;
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
        if (isset($map['FaultUserCount'])) {
            $model->faultUserCount = $map['FaultUserCount'];
        }
        if (isset($map['FaultUserRatio'])) {
            $model->faultUserRatio = $map['FaultUserRatio'];
        }
        if (isset($map['TotalUserCount'])) {
            $model->totalUserCount = $map['TotalUserCount'];
        }

        return $model;
    }
}
