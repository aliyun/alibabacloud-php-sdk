<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetStorageAnalysisResultResponseBody\data\storageAnalysisResult;

use AlibabaCloud\Tea\Model;

class needOptimizeItemList extends Model
{
    /**
     * @description The data associated with the items to be optimized, which is in the JSON format.
     *
     * @example {
     * "autoIncrementCurrentValue": 2147483647,
     * "autoIncrementRatio": 1,
     * "dbName": "testdb01",
     * "maximumValue": 2147483647,
     * "columnName": "id",
     * "tableName": "test_table"
     * }
     *
     * @var string
     */
    public $associatedData;

    /**
     * @description The name of the database.
     *
     * @example testdb01
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The optimization suggestion. Valid values:
     *
     *   **NEED_ANALYZE_TABLE**: You can execute the `ANALYZE TABLE` statement on the table during off-peak hours. This is applicable only to ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters.
     *   **NEED_OPTIMIZE_TABLE**: You can reclaim fragments during off-peak hours.
     *   **CHANGE_TABLE_ENGINE_IF_NECESSARY**: Change the storage engine type of a table after risk assessment. This is applicable only to ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters.
     *   **AUTO_INCREMENT_ID_BE_TO_RUN_OUT**: Pay attention to the usage of auto-increment IDs. This is applicable only to ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters.
     *   **DUPLICATE_INDEX**: Optimize indexes of tables. This is applicable only to ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters.
     *   **TABLE_SIZE**: Pay attention to the table size. This is applicable only to ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters.
     *   **TABLE_ROWS_AND_AVG_ROW_LENGTH**: Pay attention to the number of rows in a table and the average row length. This is applicable only to ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters.
     *   **STORAGE_USED_PERCENT**: Pay attention to the space usage to prevent the instance from being locked if the instance is full.
     *
     * @example NEED_OPTIMIZE_TABLE
     *
     * @var string
     */
    public $optimizeAdvice;

    /**
     * @description The item to be optimized. Valid values:
     *
     *   **NEED_ANALYZE_TABLE**: tables whose storage statistics obtained from `information_schema.tables` are 50 GB larger or smaller than the physical file sizes. This is applicable only to ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters.
     *
     *   **NEED_OPTIMIZE_TABLE**: tables whose space fragments are larger than 6 GB and whose fragmentation rates are greater than 30%. The fragmentation rate of a table is generally calculated based on the following formulas:
     *
     *   ApsaraDB RDS for MySQL and PolarDB for MySQL: `Fragmentation rate = DataFree/(DataSize + IndexSize + DataFree)`. In this topic, PhyTotalSize = DataSize + IndexSize + DataFree. Thus, the fragmentation rate can be calculated based on the following formula: `Fragmentation rate = DataFree/PhyTotalSize`.
     *   ApsaraDB for MongoDB: `Fragmentation rate = FragmentSize/PhyTotalSize`.
     *
     *   **TABLE_ENGINE**: tables whose storage engines are not InnoDB or XEngine. This is applicable only to ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters.
     *
     *   **AUTO_INCREMENT_ID_BE_TO_RUN_OUT**: tables whose usages of auto-increment IDs exceed 80%. This is applicable only to ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters.
     *
     *   **DUPLICATE_INDEX**: tables whose indexes are redundant or duplicate. This is applicable only to ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters.
     *
     *   **TABLE_SIZE**: single tables whose sizes are larger than 50 GB. This is applicable only to ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters.
     *
     *   **TABLE_ROWS_AND_AVG_ROW_LENGTH**: single tables that contain more than 5 million rows and whose average row lengths exceed 10 KB. This is applicable only to ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters.
     *
     *   **TOTAL_DATA_FREE**: instances whose reclaimable space is larger than 60 GB and whose total fragmentation rate is larger than 5%.
     *
     *   **STORAGE_USED_PERCENT**: instances whose space usage is larger than 90%.
     *
     * @example NEED_OPTIMIZE_TABLE
     *
     * @var string
     */
    public $optimizeItemName;

    /**
     * @description The name of the table.
     *
     * @example test_table
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'associatedData' => 'AssociatedData',
        'dbName' => 'DbName',
        'optimizeAdvice' => 'OptimizeAdvice',
        'optimizeItemName' => 'OptimizeItemName',
        'tableName' => 'TableName',
    ];

    public function validate() {}

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
