<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSQLReviewOriginSQLResponseBody;

use AlibabaCloud\Tea\Model;

class originSQLList extends Model
{
    /**
     * @description The ID of the file.
     *
     * @example check_pass
     *
     * @var string
     */
    public $checkStatus;

    /**
     * @description Queries the details of the SQL statements that are involved in an SQL review ticket.
     *
     * @example 2021-06-09 21:07:00
     *
     * @var string
     */
    public $checkedTime;

    /**
     * @description The key that is used to query the details of optimization suggestions. You can call the [GetSQLReviewOptimizeDetail](https://icms.alibaba-inc.com/content/dms/doc?l=1\&m=61777\&n=2712723\&spm) operation to query the details of optimization suggestions based on the key.
     *
     * @example 123321
     *
     * @var int
     */
    public $fileId;

    /**
     * @description The SQL statement.
     *
     * @example test.sql
     *
     * @var string
     */
    public $fileName;

    /**
     * @example {"POTENTIAL_ISSUE":1,"SUGGEST_IMPROVE":1}
     *
     * @var string
     */
    public $reviewSummary;

    /**
     * @description The error message returned.
     *
     * @example select id from table_name
     *
     * @var string
     */
    public $SQLContent;

    /**
     * @description The time when the SQL statement is reviewed.
     *
     * @example 1111
     *
     * @var int
     */
    public $SQLId;

    /**
     * @example getByPk
     *
     * @var string
     */
    public $SQLName;

    /**
     * @example a57e54ec5433475ea3082d882fdb89c5
     *
     * @var string
     */
    public $SQLReviewQueryKey;

    /**
     * @example 95adb6e77a0884d9e50232cb8c5c969d
     *
     * @var string
     */
    public $sqlHash;

    /**
     * @description The ID of the request.
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
