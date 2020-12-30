<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeRequestStatisticCountByEsnBiz1DayResponseBody;

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
    public $successCount;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'failureCount' => 'FailureCount',
        'successCount' => 'SuccessCount',
        'totalCount'   => 'TotalCount',
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
        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
