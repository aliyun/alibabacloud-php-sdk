<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDataCorrectPreCheckSQLResponseBody;

use AlibabaCloud\Tea\Model;

class preCheckSQLList extends Model
{
    /**
     * @description The review status of the SQL statement. Valid values:
     *
     *   **WAITING**: The SQL statement is pending for review.
     *   **RUNNING**: The SQL statement is being reviewed.
     *   **IGNORE**: The SQL statement review is skipped.
     *   **PASS**: The SQL statement passed the review.
     *   **BLOCK**: The SQL statement failed the review.
     *
     * @example 0
     *
     * @var int
     */
    public $affectRows;

    /**
     * @description The estimated number of affected rows.
     *
     * @example CheckSQL": "OPTIMIZE TABLE `Text_TableNames`
     *
     * @var string
     */
    public $checkSQL;

    /**
     * @description The name of the table whose data is changed.
     *
     * @example 1930****
     *
     * @var int
     */
    public $dbId;

    /**
     * @description The ID of the request.
     *
     * @example b9e771fc6ec247dea6d06a32c777****
     *
     * @var string
     */
    public $SQLReviewQueryKey;

    /**
     * @example WAITING
     *
     * @var string
     */
    public $sqlReviewStatus;

    /**
     * @example OPTIMIZE
     *
     * @var string
     */
    public $sqlType;

    /**
     * @example Text_TableNames
     *
     * @var string
     */
    public $tableNames;
    protected $_name = [
        'affectRows'        => 'AffectRows',
        'checkSQL'          => 'CheckSQL',
        'dbId'              => 'DbId',
        'SQLReviewQueryKey' => 'SQLReviewQueryKey',
        'sqlReviewStatus'   => 'SqlReviewStatus',
        'sqlType'           => 'SqlType',
        'tableNames'        => 'TableNames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->affectRows) {
            $res['AffectRows'] = $this->affectRows;
        }
        if (null !== $this->checkSQL) {
            $res['CheckSQL'] = $this->checkSQL;
        }
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->SQLReviewQueryKey) {
            $res['SQLReviewQueryKey'] = $this->SQLReviewQueryKey;
        }
        if (null !== $this->sqlReviewStatus) {
            $res['SqlReviewStatus'] = $this->sqlReviewStatus;
        }
        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }
        if (null !== $this->tableNames) {
            $res['TableNames'] = $this->tableNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return preCheckSQLList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AffectRows'])) {
            $model->affectRows = $map['AffectRows'];
        }
        if (isset($map['CheckSQL'])) {
            $model->checkSQL = $map['CheckSQL'];
        }
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['SQLReviewQueryKey'])) {
            $model->SQLReviewQueryKey = $map['SQLReviewQueryKey'];
        }
        if (isset($map['SqlReviewStatus'])) {
            $model->sqlReviewStatus = $map['SqlReviewStatus'];
        }
        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }
        if (isset($map['TableNames'])) {
            $model->tableNames = $map['TableNames'];
        }

        return $model;
    }
}
