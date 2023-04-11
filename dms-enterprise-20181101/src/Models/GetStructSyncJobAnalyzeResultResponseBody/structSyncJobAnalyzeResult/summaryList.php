<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncJobAnalyzeResultResponseBody\structSyncJobAnalyzeResult;

use AlibabaCloud\Tea\Model;

class summaryList extends Model
{
    /**
     * @description The type of the comparison. Valid values:
     *
     *   **CREATE_TABLE**: compares the created tables.
     *   **ALTER_TABLE**: compares the modified tables.
     *   **EQUAL_TABLE**: compares the identical tables.
     *   **PASS_TABLE**: compares the tables that are skipped during schema synchronization.
     *   **NOT_COMPARE**: does not compare tables.
     *
     * @example CREATE_TABLE
     *
     * @var string
     */
    public $compareType;

    /**
     * @description The number of tables.
     *
     * @example 1
     *
     * @var int
     */
    public $count;
    protected $_name = [
        'compareType' => 'CompareType',
        'count'       => 'Count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compareType) {
            $res['CompareType'] = $this->compareType;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return summaryList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompareType'])) {
            $model->compareType = $map['CompareType'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
