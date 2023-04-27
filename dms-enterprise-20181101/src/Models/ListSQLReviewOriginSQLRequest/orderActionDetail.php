<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSQLReviewOriginSQLRequest;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSQLReviewOriginSQLRequest\orderActionDetail\page;
use AlibabaCloud\Tea\Model;

class orderActionDetail extends Model
{
    /**
     * @description The operation that you want to perform. Set the value to **ListSQLReviewOriginSQL**.
     *
     * @example check_not_pass
     *
     * @var string
     */
    public $checkStatusResult;

    /**
     * @description The error code returned.
     *
     * @example 123345
     *
     * @var int
     */
    public $fileId;

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
     * @var page
     */
    public $page;

    /**
     * @description The paging settings.
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
