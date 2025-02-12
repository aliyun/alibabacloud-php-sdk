<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeFaultDiagnosisOverallDataResponseBody;

use AlibabaCloud\Dara\Model;

class overallData extends Model
{
    /**
     * @var int
     */
    public $faultUserCount;
    /**
     * @var float
     */
    public $faultUserRatio;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
