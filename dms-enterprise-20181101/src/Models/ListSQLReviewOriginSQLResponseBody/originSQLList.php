<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSQLReviewOriginSQLResponseBody;

use AlibabaCloud\Tea\Model;

class originSQLList extends Model
{
    /**
     * @description The review status of the SQL statement. Valid values:
     *
     *   **new**: The SQL statement was waiting to be reviewed.
     *   **unknown**: The SQL statement cannot be parsed.
     *   **check_not_pass**: The SQL statement failed to pass the review.
     *   **check_pass**: The SQL statement passed the review.
     *   **force_pass**: The SQL statement passed the manual review.
     *   **force_not_pass**: The SQL statement failed to pass the manual review.
     *
     * @example check_pass
     *
     * @var string
     */
    public $checkStatus;

    /**
     * @description The time when the SQL statement was reviewed.
     *
     * @example 2021-06-09 21:07:00
     *
     * @var string
     */
    public $checkedTime;

    /**
     * @description The file ID.
     *
     * @example 123321
     *
     * @var int
     */
    public $fileId;

    /**
     * @description The name of the file.
     *
     * @example test.sql
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The statistics on the optimization suggestions for SQL statements. The value is a JSON string. Valid values:
     *
     *   **MUST_IMPROVE**: The SQL statements must be optimized.
     *   **POTENTIAL_ISSUE**: The SQL statements contain potential issues.
     *   **SUGGEST_IMPROVE**: We recommend that you optimize the SQL statements.
     *   **USEDMSTOOLKIT**: We recommend that you change schemas without locking tables.
     *   **USEDMSDML_UNLOCK**: We recommend that you change data without locking tables.
     *   **TABLEINDEXSUGGEST**: We recommend that you optimize indexes for the SQL statements.
     *
     * @example {"POTENTIAL_ISSUE":1,"SUGGEST_IMPROVE":1}
     *
     * @var string
     */
    public $reviewSummary;

    /**
     * @description The SQL statement in the file.
     *
     * @example select id from table_name
     *
     * @var string
     */
    public $SQLContent;

    /**
     * @description The ID of the SQL statement.
     *
     * @example 1111
     *
     * @var int
     */
    public $SQLId;

    /**
     * @description The name of the SQL statement.
     *
     * @example getByPk
     *
     * @var string
     */
    public $SQLName;

    /**
     * @description The key that is used to query the information about optimization suggestions. You can call the [GetSQLReviewOptimizeDetail](https://help.aliyun.com/document_detail/465919.html) operation to query the details based on this key.
     *
     * @example a57e54ec5433475ea3082d882fdb89c5
     *
     * @var string
     */
    public $SQLReviewQueryKey;

    /**
     * @description The MD5 hash value that is obtained after the SQL statement is calculated by using a hash algorithm.
     *
     * @example 95adb6e77a0884d9e50232cb8c5c969d
     *
     * @var string
     */
    public $sqlHash;

    /**
     * @description The description of the review status.
     *
     * @example passed the test
     *
     * @var string
     */
    public $statusDesc;
    protected $_name = [
        'checkStatus'       => 'CheckStatus',
        'checkedTime'       => 'CheckedTime',
        'fileId'            => 'FileId',
        'fileName'          => 'FileName',
        'reviewSummary'     => 'ReviewSummary',
        'SQLContent'        => 'SQLContent',
        'SQLId'             => 'SQLId',
        'SQLName'           => 'SQLName',
        'SQLReviewQueryKey' => 'SQLReviewQueryKey',
        'sqlHash'           => 'SqlHash',
        'statusDesc'        => 'StatusDesc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkStatus) {
            $res['CheckStatus'] = $this->checkStatus;
        }
        if (null !== $this->checkedTime) {
            $res['CheckedTime'] = $this->checkedTime;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->reviewSummary) {
            $res['ReviewSummary'] = $this->reviewSummary;
        }
        if (null !== $this->SQLContent) {
            $res['SQLContent'] = $this->SQLContent;
        }
        if (null !== $this->SQLId) {
            $res['SQLId'] = $this->SQLId;
        }
        if (null !== $this->SQLName) {
            $res['SQLName'] = $this->SQLName;
        }
        if (null !== $this->SQLReviewQueryKey) {
            $res['SQLReviewQueryKey'] = $this->SQLReviewQueryKey;
        }
        if (null !== $this->sqlHash) {
            $res['SqlHash'] = $this->sqlHash;
        }
        if (null !== $this->statusDesc) {
            $res['StatusDesc'] = $this->statusDesc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return originSQLList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckStatus'])) {
            $model->checkStatus = $map['CheckStatus'];
        }
        if (isset($map['CheckedTime'])) {
            $model->checkedTime = $map['CheckedTime'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['ReviewSummary'])) {
            $model->reviewSummary = $map['ReviewSummary'];
        }
        if (isset($map['SQLContent'])) {
            $model->SQLContent = $map['SQLContent'];
        }
        if (isset($map['SQLId'])) {
            $model->SQLId = $map['SQLId'];
        }
        if (isset($map['SQLName'])) {
            $model->SQLName = $map['SQLName'];
        }
        if (isset($map['SQLReviewQueryKey'])) {
            $model->SQLReviewQueryKey = $map['SQLReviewQueryKey'];
        }
        if (isset($map['SqlHash'])) {
            $model->sqlHash = $map['SqlHash'];
        }
        if (isset($map['StatusDesc'])) {
            $model->statusDesc = $map['StatusDesc'];
        }

        return $model;
    }
}
