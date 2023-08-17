<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAppliedAdvicesResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The suggestion ID.
     *
     * @example 7417db9c-914d-43f3-a123-4d0e448f****
     *
     * @var string
     */
    public $adviceId;

    /**
     * @description The benefit of the suggestion.
     *
     * @var string
     */
    public $benefit;

    /**
     * @description The SQL statement used to execute the BUILD task.
     *
     * @example build table `schema1`.`table1`
     *
     * @var string
     */
    public $buildSQL;

    /**
     * @description The state of the suggestion execution task.
     *
     * Valid values:
     *
     *   **SUCCEED**
     *   **FAILED**
     *
     * @example SUCCEED
     *
     * @var string
     */
    public $jobStatus;

    /**
     * @description The page number of the returned page. The value must be an integer that is greater than 0. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page. Default value: 30. Valid values:
     *
     *   **30**
     *   **50**
     *   **100**
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The SQL statement used to roll back the suggestion.
     *
     * @example alter table `schema1`.`table1` add key col1_1_idx(col1)
     *
     * @var string
     */
    public $rollbackSQL;

    /**
     * @description The SQL statement used to apply the suggestion.
     *
     * @example alter table `schema1`.`table1` drop key col1_1_idx
     *
     * @var string
     */
    public $SQL;

    /**
     * @description The submission state of the suggestion.
     *
     * Valid values:
     *
     *   **SUCCEED**
     *   **FAILED**
     *
     * @example SUCCEED
     *
     * @var string
     */
    public $submitStatus;

    /**
     * @description The time when the suggestion was submitted. The time follows the yyMMddHHmm format. The time is displayed in UTC.
     *
     * @example 2208131600
     *
     * @var string
     */
    public $submitTime;

    /**
     * @description The total number of entries returned. The value must be an integer that is greater than or equal to 0. Default value: 0.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'adviceId'     => 'AdviceId',
        'benefit'      => 'Benefit',
        'buildSQL'     => 'BuildSQL',
        'jobStatus'    => 'JobStatus',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'rollbackSQL'  => 'RollbackSQL',
        'SQL'          => 'SQL',
        'submitStatus' => 'SubmitStatus',
        'submitTime'   => 'SubmitTime',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adviceId) {
            $res['AdviceId'] = $this->adviceId;
        }
        if (null !== $this->benefit) {
            $res['Benefit'] = $this->benefit;
        }
        if (null !== $this->buildSQL) {
            $res['BuildSQL'] = $this->buildSQL;
        }
        if (null !== $this->jobStatus) {
            $res['JobStatus'] = $this->jobStatus;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->rollbackSQL) {
            $res['RollbackSQL'] = $this->rollbackSQL;
        }
        if (null !== $this->SQL) {
            $res['SQL'] = $this->SQL;
        }
        if (null !== $this->submitStatus) {
            $res['SubmitStatus'] = $this->submitStatus;
        }
        if (null !== $this->submitTime) {
            $res['SubmitTime'] = $this->submitTime;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdviceId'])) {
            $model->adviceId = $map['AdviceId'];
        }
        if (isset($map['Benefit'])) {
            $model->benefit = $map['Benefit'];
        }
        if (isset($map['BuildSQL'])) {
            $model->buildSQL = $map['BuildSQL'];
        }
        if (isset($map['JobStatus'])) {
            $model->jobStatus = $map['JobStatus'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RollbackSQL'])) {
            $model->rollbackSQL = $map['RollbackSQL'];
        }
        if (isset($map['SQL'])) {
            $model->SQL = $map['SQL'];
        }
        if (isset($map['SubmitStatus'])) {
            $model->submitStatus = $map['SubmitStatus'];
        }
        if (isset($map['SubmitTime'])) {
            $model->submitTime = $map['SubmitTime'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
