<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models\ListMetaProfilingResultTablePageResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $averageFileSize;

    /**
     * @var string
     */
    public $averagePartitionSize;

    /**
     * @var string
     */
    public $created;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $ds;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var int
     */
    public $fileNum;

    /**
     * @var int
     */
    public $isExternal;

    /**
     * @var int
     */
    public $isPtTable;

    /**
     * @var int
     */
    public $isTransactional;

    /**
     * @var string
     */
    public $lastAccessed;

    /**
     * @var string
     */
    public $lastModified;

    /**
     * @var string
     */
    public $maxPtCrtTime;

    /**
     * @var string[]
     */
    public $maximumPartitionList;

    /**
     * @var float
     */
    public $migrationProcess;

    /**
     * @var string
     */
    public $migrationStatus;

    /**
     * @var string
     */
    public $minPtCrtTime;

    /**
     * @var string[]
     */
    public $minimumPartitionList;

    /**
     * @var int
     */
    public $newAdded;

    /**
     * @var string[]
     */
    public $partitionFieldNameList;

    /**
     * @var int
     */
    public $partitionNum;

    /**
     * @var int
     */
    public $recordCount;

    /**
     * @var string
     */
    public $storageSize;

    /**
     * @var string
     */
    public $tableComment;

    /**
     * @var string
     */
    public $tableId;

    /**
     * @var string
     */
    public $tableModTime;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $tableType;
    protected $_name = [
        'averageFileSize' => 'averageFileSize',
        'averagePartitionSize' => 'averagePartitionSize',
        'created' => 'created',
        'dbName' => 'dbName',
        'ds' => 'ds',
        'engine' => 'engine',
        'fileNum' => 'fileNum',
        'isExternal' => 'isExternal',
        'isPtTable' => 'isPtTable',
        'isTransactional' => 'isTransactional',
        'lastAccessed' => 'lastAccessed',
        'lastModified' => 'lastModified',
        'maxPtCrtTime' => 'maxPtCrtTime',
        'maximumPartitionList' => 'maximumPartitionList',
        'migrationProcess' => 'migrationProcess',
        'migrationStatus' => 'migrationStatus',
        'minPtCrtTime' => 'minPtCrtTime',
        'minimumPartitionList' => 'minimumPartitionList',
        'newAdded' => 'newAdded',
        'partitionFieldNameList' => 'partitionFieldNameList',
        'partitionNum' => 'partitionNum',
        'recordCount' => 'recordCount',
        'storageSize' => 'storageSize',
        'tableComment' => 'tableComment',
        'tableId' => 'tableId',
        'tableModTime' => 'tableModTime',
        'tableName' => 'tableName',
        'tableType' => 'tableType',
    ];

    public function validate()
    {
        if (\is_array($this->maximumPartitionList)) {
            Model::validateArray($this->maximumPartitionList);
        }
        if (\is_array($this->minimumPartitionList)) {
            Model::validateArray($this->minimumPartitionList);
        }
        if (\is_array($this->partitionFieldNameList)) {
            Model::validateArray($this->partitionFieldNameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->averageFileSize) {
            $res['averageFileSize'] = $this->averageFileSize;
        }

        if (null !== $this->averagePartitionSize) {
            $res['averagePartitionSize'] = $this->averagePartitionSize;
        }

        if (null !== $this->created) {
            $res['created'] = $this->created;
        }

        if (null !== $this->dbName) {
            $res['dbName'] = $this->dbName;
        }

        if (null !== $this->ds) {
            $res['ds'] = $this->ds;
        }

        if (null !== $this->engine) {
            $res['engine'] = $this->engine;
        }

        if (null !== $this->fileNum) {
            $res['fileNum'] = $this->fileNum;
        }

        if (null !== $this->isExternal) {
            $res['isExternal'] = $this->isExternal;
        }

        if (null !== $this->isPtTable) {
            $res['isPtTable'] = $this->isPtTable;
        }

        if (null !== $this->isTransactional) {
            $res['isTransactional'] = $this->isTransactional;
        }

        if (null !== $this->lastAccessed) {
            $res['lastAccessed'] = $this->lastAccessed;
        }

        if (null !== $this->lastModified) {
            $res['lastModified'] = $this->lastModified;
        }

        if (null !== $this->maxPtCrtTime) {
            $res['maxPtCrtTime'] = $this->maxPtCrtTime;
        }

        if (null !== $this->maximumPartitionList) {
            if (\is_array($this->maximumPartitionList)) {
                $res['maximumPartitionList'] = [];
                $n1 = 0;
                foreach ($this->maximumPartitionList as $item1) {
                    $res['maximumPartitionList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->migrationProcess) {
            $res['migrationProcess'] = $this->migrationProcess;
        }

        if (null !== $this->migrationStatus) {
            $res['migrationStatus'] = $this->migrationStatus;
        }

        if (null !== $this->minPtCrtTime) {
            $res['minPtCrtTime'] = $this->minPtCrtTime;
        }

        if (null !== $this->minimumPartitionList) {
            if (\is_array($this->minimumPartitionList)) {
                $res['minimumPartitionList'] = [];
                $n1 = 0;
                foreach ($this->minimumPartitionList as $item1) {
                    $res['minimumPartitionList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->newAdded) {
            $res['newAdded'] = $this->newAdded;
        }

        if (null !== $this->partitionFieldNameList) {
            if (\is_array($this->partitionFieldNameList)) {
                $res['partitionFieldNameList'] = [];
                $n1 = 0;
                foreach ($this->partitionFieldNameList as $item1) {
                    $res['partitionFieldNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->partitionNum) {
            $res['partitionNum'] = $this->partitionNum;
        }

        if (null !== $this->recordCount) {
            $res['recordCount'] = $this->recordCount;
        }

        if (null !== $this->storageSize) {
            $res['storageSize'] = $this->storageSize;
        }

        if (null !== $this->tableComment) {
            $res['tableComment'] = $this->tableComment;
        }

        if (null !== $this->tableId) {
            $res['tableId'] = $this->tableId;
        }

        if (null !== $this->tableModTime) {
            $res['tableModTime'] = $this->tableModTime;
        }

        if (null !== $this->tableName) {
            $res['tableName'] = $this->tableName;
        }

        if (null !== $this->tableType) {
            $res['tableType'] = $this->tableType;
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
        if (isset($map['averageFileSize'])) {
            $model->averageFileSize = $map['averageFileSize'];
        }

        if (isset($map['averagePartitionSize'])) {
            $model->averagePartitionSize = $map['averagePartitionSize'];
        }

        if (isset($map['created'])) {
            $model->created = $map['created'];
        }

        if (isset($map['dbName'])) {
            $model->dbName = $map['dbName'];
        }

        if (isset($map['ds'])) {
            $model->ds = $map['ds'];
        }

        if (isset($map['engine'])) {
            $model->engine = $map['engine'];
        }

        if (isset($map['fileNum'])) {
            $model->fileNum = $map['fileNum'];
        }

        if (isset($map['isExternal'])) {
            $model->isExternal = $map['isExternal'];
        }

        if (isset($map['isPtTable'])) {
            $model->isPtTable = $map['isPtTable'];
        }

        if (isset($map['isTransactional'])) {
            $model->isTransactional = $map['isTransactional'];
        }

        if (isset($map['lastAccessed'])) {
            $model->lastAccessed = $map['lastAccessed'];
        }

        if (isset($map['lastModified'])) {
            $model->lastModified = $map['lastModified'];
        }

        if (isset($map['maxPtCrtTime'])) {
            $model->maxPtCrtTime = $map['maxPtCrtTime'];
        }

        if (isset($map['maximumPartitionList'])) {
            if (!empty($map['maximumPartitionList'])) {
                $model->maximumPartitionList = [];
                $n1 = 0;
                foreach ($map['maximumPartitionList'] as $item1) {
                    $model->maximumPartitionList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['migrationProcess'])) {
            $model->migrationProcess = $map['migrationProcess'];
        }

        if (isset($map['migrationStatus'])) {
            $model->migrationStatus = $map['migrationStatus'];
        }

        if (isset($map['minPtCrtTime'])) {
            $model->minPtCrtTime = $map['minPtCrtTime'];
        }

        if (isset($map['minimumPartitionList'])) {
            if (!empty($map['minimumPartitionList'])) {
                $model->minimumPartitionList = [];
                $n1 = 0;
                foreach ($map['minimumPartitionList'] as $item1) {
                    $model->minimumPartitionList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['newAdded'])) {
            $model->newAdded = $map['newAdded'];
        }

        if (isset($map['partitionFieldNameList'])) {
            if (!empty($map['partitionFieldNameList'])) {
                $model->partitionFieldNameList = [];
                $n1 = 0;
                foreach ($map['partitionFieldNameList'] as $item1) {
                    $model->partitionFieldNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['partitionNum'])) {
            $model->partitionNum = $map['partitionNum'];
        }

        if (isset($map['recordCount'])) {
            $model->recordCount = $map['recordCount'];
        }

        if (isset($map['storageSize'])) {
            $model->storageSize = $map['storageSize'];
        }

        if (isset($map['tableComment'])) {
            $model->tableComment = $map['tableComment'];
        }

        if (isset($map['tableId'])) {
            $model->tableId = $map['tableId'];
        }

        if (isset($map['tableModTime'])) {
            $model->tableModTime = $map['tableModTime'];
        }

        if (isset($map['tableName'])) {
            $model->tableName = $map['tableName'];
        }

        if (isset($map['tableType'])) {
            $model->tableType = $map['tableType'];
        }

        return $model;
    }
}
