<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetStorageAnalysisResultResponseBody\data\storageAnalysisResult;

use AlibabaCloud\Tea\Model;

class tableStats extends Model
{
    /**
     * @description The average length of rows. Unit: bytes.
     *
     * @example 154
     *
     * @var int
     */
    public $avgRowLength;

    /**
     * @description The size of space fragments. Unit: bytes.
     *
     * >  This parameter is applicable only to ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters. The fragmentation rate of a table is generally calculated based on the following formula: `Fragmentation rate = DataFree/(DataSize + IndexSize + DataFree)`. In this topic, `Fragmentation rate = DataFree/PhyTotalSize`.
     * @example 7340032
     *
     * @var int
     */
    public $dataFree;

    /**
     * @description *   For ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters, this parameter indicates the amount of space occupied by data. Unit: bytes.
     *   For ApsaraDB for MongoDB instances, this parameter indicates the size of uncompressed data, that is, the amount of data. Unit: bytes.
     *
     * @example 1982857216
     *
     * @var int
     */
    public $dataSize;

    /**
     * @description The name of the database.
     *
     * @example testdb01
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The type of the storage engine used by the table.
     *
     * >  This parameter is applicable only to ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters.
     * @example InnoDB
     *
     * @var string
     */
    public $engine;

    /**
     * @description The size of space that can be reclaimed. Unit: bytes.
     *
     * >  This parameter is applicable only to ApsaraDB for MongoDB instances. `Fragmentation rate = FragmentSize/PhyTotalSize`.
     * @example 362221568
     *
     * @var int
     */
    public $fragmentSize;

    /**
     * @description The storage space occupied by indexes. Unit: bytes.
     *
     * @example 1022296064
     *
     * @var int
     */
    public $indexSize;

    /**
     * @description The storage space of the table. Unit: bytes.
     *
     * >  For ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters, the value of the parameter is the sum of **DataSize**, **IndexSize**, and **DataFree**. For ApsaraDB for MongoDB instances, the value of this parameter is the sum of **DataSize** and **IndexSize**.
     * @example 3012493312
     *
     * @var int
     */
    public $phyTotalSize;

    /**
     * @description The physical file size of the table. Unit: bytes.
     *
     * >  This parameter is applicable only to ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters. Data of specific database instances cannot be obtained due to deployment mode.
     * @example 3057655808
     *
     * @var int
     */
    public $physicalFileSize;

    /**
     * @description The name of the table.
     *
     * @example test_table
     *
     * @var string
     */
    public $tableName;

    /**
     * @description The number of rows in the table.
     *
     * @example 12794732
     *
     * @var int
     */
    public $tableRows;

    /**
     * @description The type of the table.
     *
     * >  This parameter is applicable only to ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters.
     * @example BASE TABLE
     *
     * @var string
     */
    public $tableType;

    /**
     * @description *   For ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters, this parameter indicates the amount of space occupied by table data and indexes. Unit: bytes. The value is the sum of **DataSize** and **IndexSize**.
     *   For ApsaraDB for MongoDB instances, this parameter indicates the actual size of space allocated by Block Manager. Unit: Bytes. The compression ratio of an ApsaraDB for MongoDB instance is calculated based on the following formula: `Compression ratio = TotalSize/DataSize`.
     *
     * @example 3005153280
     *
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'avgRowLength'     => 'AvgRowLength',
        'dataFree'         => 'DataFree',
        'dataSize'         => 'DataSize',
        'dbName'           => 'DbName',
        'engine'           => 'Engine',
        'fragmentSize'     => 'FragmentSize',
        'indexSize'        => 'IndexSize',
        'phyTotalSize'     => 'PhyTotalSize',
        'physicalFileSize' => 'PhysicalFileSize',
        'tableName'        => 'TableName',
        'tableRows'        => 'TableRows',
        'tableType'        => 'TableType',
        'totalSize'        => 'TotalSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avgRowLength) {
            $res['AvgRowLength'] = $this->avgRowLength;
        }
        if (null !== $this->dataFree) {
            $res['DataFree'] = $this->dataFree;
        }
        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->fragmentSize) {
            $res['FragmentSize'] = $this->fragmentSize;
        }
        if (null !== $this->indexSize) {
            $res['IndexSize'] = $this->indexSize;
        }
        if (null !== $this->phyTotalSize) {
            $res['PhyTotalSize'] = $this->phyTotalSize;
        }
        if (null !== $this->physicalFileSize) {
            $res['PhysicalFileSize'] = $this->physicalFileSize;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->tableRows) {
            $res['TableRows'] = $this->tableRows;
        }
        if (null !== $this->tableType) {
            $res['TableType'] = $this->tableType;
        }
        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tableStats
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvgRowLength'])) {
            $model->avgRowLength = $map['AvgRowLength'];
        }
        if (isset($map['DataFree'])) {
            $model->dataFree = $map['DataFree'];
        }
        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['FragmentSize'])) {
            $model->fragmentSize = $map['FragmentSize'];
        }
        if (isset($map['IndexSize'])) {
            $model->indexSize = $map['IndexSize'];
        }
        if (isset($map['PhyTotalSize'])) {
            $model->phyTotalSize = $map['PhyTotalSize'];
        }
        if (isset($map['PhysicalFileSize'])) {
            $model->physicalFileSize = $map['PhysicalFileSize'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['TableRows'])) {
            $model->tableRows = $map['TableRows'];
        }
        if (isset($map['TableType'])) {
            $model->tableType = $map['TableType'];
        }
        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }

        return $model;
    }
}
