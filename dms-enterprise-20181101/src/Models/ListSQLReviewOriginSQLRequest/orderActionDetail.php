<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSQLReviewOriginSQLRequest;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSQLReviewOriginSQLRequest\orderActionDetail\page;
use AlibabaCloud\Tea\Model;

class orderActionDetail extends Model
{
    /**
     * @description The review status of the SQL statement. Valid values:
     *
     *   **new**: The SQL statement is pending for analysis.
     *   **unknown**: The SQL statement failed to be parsed.
     *   **check_not_pass**: The SQL statement failed the review.
     *   **check_pass**: The SQL statement passed the review.
     *   **force_pass**: The SQL statement passed the review by manual effort.
     *   **force_not_pass**: The SQL statement failed the review by manual effort.
     *
     * @example check_not_pass
     *
     * @var string
     */
    public $checkStatusResult;

    /**
     * @description The ID of the file.
     *
     * @example 123345
     *
     * @var int
     */
    public $fileId;

    /**
     * @description The paging settings.
     *
     * @var page
     */
    public $page;

    /**
     * @description The optimization suggestion for the SQL statement. Valid values:
     *
     *   **MUST_IMPROVE**: The SQL statement must be improved.
     *   **POTENTIAL_ISSUE**: The SQL statement contains potential issues.
     *   **SUGGEST_IMPROVE**: We recommend that you improve the SQL statement.
     *   **USE_DMS_TOOLKIT**: We recommend that you change schemas without locking tables.
     *   **USE_DMS_DML_UNLOCK**: We recommend that you change data without locking tables.
     *   **TABLE_INDEX_SUGGEST**: We recommend that you use SQL statements that use indexes.
     *
     * @example MUST_IMPROVE
     *
     * @var string
     */
    public $SQLReviewResult;
    protected $_name = [
        'checkStatusResult' => 'CheckStatusResult',
        'fileId'            => 'FileId',
        'page'              => 'Page',
        'SQLReviewResult'   => 'SQLReviewResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkStatusResult) {
            $res['CheckStatusResult'] = $this->checkStatusResult;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->page) {
            $res['Page'] = null !== $this->page ? $this->page->toMap() : null;
        }
        if (null !== $this->SQLReviewResult) {
            $res['SQLReviewResult'] = $this->SQLReviewResult;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return orderActionDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckStatusResult'])) {
            $model->checkStatusResult = $map['CheckStatusResult'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['Page'])) {
            $model->page = page::fromMap($map['Page']);
        }
        if (isset($map['SQLReviewResult'])) {
            $model->SQLReviewResult = $map['SQLReviewResult'];
        }

        return $model;
    }
}
