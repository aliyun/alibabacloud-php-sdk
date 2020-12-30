<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeRequestStatisticCountByEsnBiz1DayProvinceResponseBody;

use AlibabaCloud\Tea\Model;

class statistic extends Model
{
    /**
     * @var int
     */
    public $failureCount;

    /**
     * @var int
     */
    public $provinceId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $successCount;
    protected $_name = [
        'failureCount' => 'FailureCount',
        'provinceId'   => 'ProvinceId',
        'totalCount'   => 'TotalCount',
        'successCount' => 'SuccessCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failureCount) {
            $res['FailureCount'] = $this->failureCount;
        }
        if (null !== $this->provinceId) {
            $res['ProvinceId'] = $this->provinceId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statistic
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailureCount'])) {
            $model->failureCount = $map['FailureCount'];
        }
        if (isset($map['ProvinceId'])) {
            $model->provinceId = $map['ProvinceId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }

        return $model;
    }
}
