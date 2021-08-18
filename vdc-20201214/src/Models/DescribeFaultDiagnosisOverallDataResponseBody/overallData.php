<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeFaultDiagnosisOverallDataResponseBody;

use AlibabaCloud\Tea\Model;

class overallData extends Model
{
    /**
     * @description 异常用户数/人次
     *
     * @var int
     */
    public $faultUserCount;

    /**
     * @description 用户总数/人次
     *
     * @var int
     */
    public $totalUserCount;

    /**
     * @description 异常用户总占比
     *
     * @var float
     */
    public $faultUserRatio;
    protected $_name = [
        'faultUserCount' => 'FaultUserCount',
        'totalUserCount' => 'TotalUserCount',
        'faultUserRatio' => 'FaultUserRatio',
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
        if (null !== $this->totalUserCount) {
            $res['TotalUserCount'] = $this->totalUserCount;
        }
        if (null !== $this->faultUserRatio) {
            $res['FaultUserRatio'] = $this->faultUserRatio;
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
        if (isset($map['TotalUserCount'])) {
            $model->totalUserCount = $map['TotalUserCount'];
        }
        if (isset($map['FaultUserRatio'])) {
            $model->faultUserRatio = $map['FaultUserRatio'];
        }

        return $model;
    }
}
