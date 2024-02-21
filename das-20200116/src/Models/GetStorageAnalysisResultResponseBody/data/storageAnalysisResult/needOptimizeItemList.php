<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetStorageAnalysisResultResponseBody\data\storageAnalysisResult;

use AlibabaCloud\Tea\Model;

class needOptimizeItemList extends Model
{
    /**
     * @description The data associated with items to be optimized.
     *
     * @example {
     * }
     * @var string
     */
    public $associatedData;

    /**
     * @description The database name.
     *
     * @example testdb01
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The optimization suggestion. Valid values:
     *
     *   **NEED_ANALYZE_TABLE**: You can execute the ANALYZE TABLE statement on the related table during off-peak hours.
     *   **NEED_OPTIMIZE_TABLE**: You can reclaim fragments during off-peak hours.
     *
     * @example NEED_OPTIMIZE_TABLE
     *
     * @var string
     */
    public $optimizeAdvice;

    /**
     * @description The item to be optimized. Valid values:
     *
     *   **NEED_ANALYZE_TABLE**: The statistical data in information_schema.tables differs greatly from the physical file size.
     *   **NEED_OPTIMIZE_TABLE**: The fragmentation degree of the table is high.
     *
     * @example NEED_OPTIMIZE_TABLE
     *
     * @var string
     */
    public $optimizeItemName;

    /**
     * @description The table name.
     *
     * @example test_table
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'associatedData'   => 'AssociatedData',
        'dbName'           => 'DbName',
        'optimizeAdvice'   => 'OptimizeAdvice',
        'optimizeItemName' => 'OptimizeItemName',
        'tableName'        => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->associatedData) {
            $res['AssociatedData'] = $this->associatedData;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->optimizeAdvice) {
            $res['OptimizeAdvice'] = $this->optimizeAdvice;
        }
        if (null !== $this->optimizeItemName) {
            $res['OptimizeItemName'] = $this->optimizeItemName;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return needOptimizeItemList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssociatedData'])) {
            $model->associatedData = $map['AssociatedData'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['OptimizeAdvice'])) {
            $model->optimizeAdvice = $map['OptimizeAdvice'];
        }
        if (isset($map['OptimizeItemName'])) {
            $model->optimizeItemName = $map['OptimizeItemName'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
