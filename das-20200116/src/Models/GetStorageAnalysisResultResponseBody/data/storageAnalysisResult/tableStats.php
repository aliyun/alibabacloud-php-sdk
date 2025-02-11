<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetStorageAnalysisResultResponseBody\data\storageAnalysisResult;

use AlibabaCloud\Dara\Model;

class tableStats extends Model
{
    /**
     * @var int
     */
    public $avgRowLength;
    /**
     * @var int
     */
    public $dataFree;
    /**
     * @var int
     */
    public $dataSize;
    /**
     * @var string
     */
    public $dbName;
    /**
     * @var string
     */
    public $engine;
    /**
     * @var int
     */
    public $fragmentSize;
    /**
     * @var int
     */
    public $indexSize;
    /**
     * @var int
     */
    public $phyTotalSize;
    /**
     * @var int
     */
    public $physicalFileSize;
    /**
     * @var string
     */
    public $tableName;
    /**
     * @var int
     */
    public $tableRows;
    /**
     * @var string
     */
    public $tableType;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
