<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetSQLReviewCheckResultStatusResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetSQLReviewCheckResultStatusResponseBody\checkResultStatus\checkStatusResult;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetSQLReviewCheckResultStatusResponseBody\checkResultStatus\SQLReviewResult;
use AlibabaCloud\Tea\Model;

class checkResultStatus extends Model
{
    /**
     * @var int
     */
    public $totalSQLCount;

    /**
     * @var int
     */
    public $checkedCount;

    /**
     * @var checkStatusResult
     */
    public $checkStatusResult;

    /**
     * @var SQLReviewResult
     */
    public $SQLReviewResult;
    protected $_name = [
        'totalSQLCount'     => 'TotalSQLCount',
        'checkedCount'      => 'CheckedCount',
        'checkStatusResult' => 'CheckStatusResult',
        'SQLReviewResult'   => 'SQLReviewResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalSQLCount) {
            $res['TotalSQLCount'] = $this->totalSQLCount;
        }
        if (null !== $this->checkedCount) {
            $res['CheckedCount'] = $this->checkedCount;
        }
        if (null !== $this->checkStatusResult) {
            $res['CheckStatusResult'] = null !== $this->checkStatusResult ? $this->checkStatusResult->toMap() : null;
        }
        if (null !== $this->SQLReviewResult) {
            $res['SQLReviewResult'] = null !== $this->SQLReviewResult ? $this->SQLReviewResult->toMap() : null;
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
        if (isset($map['TotalSQLCount'])) {
            $model->totalSQLCount = $map['TotalSQLCount'];
        }
        if (isset($map['CheckedCount'])) {
            $model->checkedCount = $map['CheckedCount'];
        }
        if (isset($map['CheckStatusResult'])) {
            $model->checkStatusResult = checkStatusResult::fromMap($map['CheckStatusResult']);
        }
        if (isset($map['SQLReviewResult'])) {
            $model->SQLReviewResult = SQLReviewResult::fromMap($map['SQLReviewResult']);
        }

        return $model;
    }
}
