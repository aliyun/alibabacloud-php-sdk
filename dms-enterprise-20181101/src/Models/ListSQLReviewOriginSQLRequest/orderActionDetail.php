<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSQLReviewOriginSQLRequest;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSQLReviewOriginSQLRequest\orderActionDetail\page;
use AlibabaCloud\Tea\Model;

class orderActionDetail extends Model
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
     * @example check_not_pass
     *
     * @var string
     */
    public $checkStatusResult;

    /**
     * @description The ID of the file that contains the SQL statements to be reviewed.
     *
     * @example 123345
     *
     * @var int
     */
    public $fileId;

    /**
     * @description The pagination information.
     *
     * @var page
     */
    public $page;

    /**
     * @description The optimization suggestion for the SQL statement. Valid values:
     *
     *   **MUST_IMPROVE**: The SQL statement must be optimized.
     *   **POTENTIAL_ISSUE**: The SQL statement contains potential issues.
     *   **SUGGEST_IMPROVE**: We recommend that you optimize the SQL statement.
     *   **USE_DMS_TOOLKIT**: We recommend that you change schemas without locking tables.
     *   **USE_DMS_DML_UNLOCK**: We recommend that you change data without locking tables.
     *   **TABLE_INDEX_SUGGEST**: We recommend that you optimize indexes for the SQL statement.
     *
     * @example MUST_IMPROVE
     *
     * @var string
     */
    public $SQLReviewResult;
    protected $_name = [
        'checkStatusResult' => 'CheckStatusResult',
        'fileId' => 'FileId',
        'page' => 'Page',
        'SQLReviewResult' => 'SQLReviewResult',
    ];

    public function validate(): void {}

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
