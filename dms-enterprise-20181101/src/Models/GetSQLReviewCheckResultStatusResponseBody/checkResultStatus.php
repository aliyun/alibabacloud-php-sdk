<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetSQLReviewCheckResultStatusResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetSQLReviewCheckResultStatusResponseBody\checkResultStatus\checkStatusResult;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetSQLReviewCheckResultStatusResponseBody\checkResultStatus\SQLReviewResult;
use AlibabaCloud\Tea\Model;

class checkResultStatus extends Model
{
    /**
     * @var checkStatusResult
     */
    public $checkStatusResult;

    /**
     * @example 10
     *
     * @var int
     */
    public $checkedCount;

    /**
     * @var SQLReviewResult
     */
    public $SQLReviewResult;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalSQLCount;
    protected $_name = [
        'checkStatusResult' => 'CheckStatusResult',
        'checkedCount'      => 'CheckedCount',
        'SQLReviewResult'   => 'SQLReviewResult',
        'totalSQLCount'     => 'TotalSQLCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkStatusResult) {
            $res['CheckStatusResult'] = null !== $this->checkStatusResult ? $this->checkStatusResult->toMap() : null;
        }
        if (null !== $this->checkedCount) {
            $res['CheckedCount'] = $this->checkedCount;
        }
        if (null !== $this->SQLReviewResult) {
            $res['SQLReviewResult'] = null !== $this->SQLReviewResult ? $this->SQLReviewResult->toMap() : null;
        }
        if (null !== $this->totalSQLCount) {
            $res['TotalSQLCount'] = $this->totalSQLCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return checkResultStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckStatusResult'])) {
            $model->checkStatusResult = checkStatusResult::fromMap($map['CheckStatusResult']);
        }
        if (isset($map['CheckedCount'])) {
            $model->checkedCount = $map['CheckedCount'];
        }
        if (isset($map['SQLReviewResult'])) {
            $model->SQLReviewResult = SQLReviewResult::fromMap($map['SQLReviewResult']);
        }
        if (isset($map['TotalSQLCount'])) {
            $model->totalSQLCount = $map['TotalSQLCount'];
        }

        return $model;
    }
}
