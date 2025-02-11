<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAppliedAdvicesResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $adviceId;
    /**
     * @var string
     */
    public $benefit;
    /**
     * @var string
     */
    public $buildSQL;
    /**
     * @var string
     */
    public $jobStatus;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $rollbackSQL;
    /**
     * @var string
     */
    public $SQL;
    /**
     * @var string
     */
    public $schemaName;
    /**
     * @var string
     */
    public $submitStatus;
    /**
     * @var string
     */
    public $submitTime;
    /**
     * @var string
     */
    public $tableName;
    /**
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
        'schemaName'   => 'SchemaName',
        'submitStatus' => 'SubmitStatus',
        'submitTime'   => 'SubmitTime',
        'tableName'    => 'TableName',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }

        if (null !== $this->submitStatus) {
            $res['SubmitStatus'] = $this->submitStatus;
        }

        if (null !== $this->submitTime) {
            $res['SubmitTime'] = $this->submitTime;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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

        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }

        if (isset($map['SubmitStatus'])) {
            $model->submitStatus = $map['SubmitStatus'];
        }

        if (isset($map['SubmitTime'])) {
            $model->submitTime = $map['SubmitTime'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
