<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetSQLReviewCheckResultStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetSQLReviewCheckResultStatusResponseBody\checkResultStatus\checkStatusResult;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetSQLReviewCheckResultStatusResponseBody\checkResultStatus\SQLReviewResult;

class checkResultStatus extends Model
{
    /**
     * @var checkStatusResult
     */
    public $checkStatusResult;
    /**
     * @var int
     */
    public $checkedCount;
    /**
     * @var SQLReviewResult
     */
    public $SQLReviewResult;
    /**
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
        if (null !== $this->checkStatusResult) {
            $this->checkStatusResult->validate();
        }
        if (null !== $this->SQLReviewResult) {
            $this->SQLReviewResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkStatusResult) {
            $res['CheckStatusResult'] = null !== $this->checkStatusResult ? $this->checkStatusResult->toArray($noStream) : $this->checkStatusResult;
        }

        if (null !== $this->checkedCount) {
            $res['CheckedCount'] = $this->checkedCount;
        }

        if (null !== $this->SQLReviewResult) {
            $res['SQLReviewResult'] = null !== $this->SQLReviewResult ? $this->SQLReviewResult->toArray($noStream) : $this->SQLReviewResult;
        }

        if (null !== $this->totalSQLCount) {
            $res['TotalSQLCount'] = $this->totalSQLCount;
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
