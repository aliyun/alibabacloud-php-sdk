<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class TableModel extends Model
{
    /**
     * @var string
     */
    public $archiveType;

    /**
     * @var int
     */
    public $blockSize;

    /**
     * @var int
     */
    public $bucket;

    /**
     * @var int
     */
    public $bucketCount;

    /**
     * @var FieldSchemaModel[]
     */
    public $cols;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $compression;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $createdBySource;

    /**
     * @var string
     */
    public $createdByUser;

    /**
     * @var int
     */
    public $currentVersion;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var bool
     */
    public $dictEncode;

    /**
     * @var FieldSchemaModel[]
     */
    public $distributeColumns;

    /**
     * @var string
     */
    public $distributeType;

    /**
     * @var bool
     */
    public $enableDfs;

    /**
     * @var int
     */
    public $hotPartitionCount;

    /**
     * @var CstoreIndexModel[]
     */
    public $indexes;

    /**
     * @var bool
     */
    public $isAllIndex;

    /**
     * @var bool
     */
    public $isFulltextDict;

    /**
     * @var int
     */
    public $maxColumnId;

    /**
     * @var string[]
     */
    public $parameters;

    /**
     * @var string
     */
    public $partitionColumn;

    /**
     * @var int
     */
    public $partitionCount;

    /**
     * @var FieldSchemaModel[]
     */
    public $partitionKeys;

    /**
     * @var string
     */
    public $partitionType;

    /**
     * @var string
     */
    public $physicalDatabaseName;

    /**
     * @var string
     */
    public $physicalTableName;

    /**
     * @var int
     */
    public $previousVersion;

    /**
     * @var string
     */
    public $rawTableName;

    /**
     * @var FieldSchemaModel[]
     */
    public $routeColumns;

    /**
     * @var FieldSchemaModel
     */
    public $routeEffectiveColumn;

    /**
     * @var string
     */
    public $routeType;

    /**
     * @var string
     */
    public $rtEngineType;

    /**
     * @var bool
     */
    public $rtIndexAll;

    /**
     * @var string
     */
    public $rtModeType;

    /**
     * @var StorageDescriptorModel
     */
    public $sd;

    /**
     * @var string
     */
    public $storagePolicy;

    /**
     * @var string
     */
    public $subpartitionColumn;

    /**
     * @var int
     */
    public $subpartitionCount;

    /**
     * @var string
     */
    public $subpartitionType;

    /**
     * @var string
     */
    public $tableEngineName;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $tableType;

    /**
     * @var int
     */
    public $tblId;

    /**
     * @var bool
     */
    public $temporary;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $viewExpandedText;

    /**
     * @var string
     */
    public $viewOriginalText;

    /**
     * @var string
     */
    public $viewSecurityMode;
    protected $_name = [
        'archiveType' => 'ArchiveType',
        'blockSize' => 'BlockSize',
        'bucket' => 'Bucket',
        'bucketCount' => 'BucketCount',
        'cols' => 'Cols',
        'comment' => 'Comment',
        'compression' => 'Compression',
        'createTime' => 'CreateTime',
        'createdBySource' => 'CreatedBySource',
        'createdByUser' => 'CreatedByUser',
        'currentVersion' => 'CurrentVersion',
        'dbName' => 'DbName',
        'dictEncode' => 'DictEncode',
        'distributeColumns' => 'DistributeColumns',
        'distributeType' => 'DistributeType',
        'enableDfs' => 'EnableDfs',
        'hotPartitionCount' => 'HotPartitionCount',
        'indexes' => 'Indexes',
        'isAllIndex' => 'IsAllIndex',
        'isFulltextDict' => 'IsFulltextDict',
        'maxColumnId' => 'MaxColumnId',
        'parameters' => 'Parameters',
        'partitionColumn' => 'PartitionColumn',
        'partitionCount' => 'PartitionCount',
        'partitionKeys' => 'PartitionKeys',
        'partitionType' => 'PartitionType',
        'physicalDatabaseName' => 'PhysicalDatabaseName',
        'physicalTableName' => 'PhysicalTableName',
        'previousVersion' => 'PreviousVersion',
        'rawTableName' => 'RawTableName',
        'routeColumns' => 'RouteColumns',
        'routeEffectiveColumn' => 'RouteEffectiveColumn',
        'routeType' => 'RouteType',
        'rtEngineType' => 'RtEngineType',
        'rtIndexAll' => 'RtIndexAll',
        'rtModeType' => 'RtModeType',
        'sd' => 'Sd',
        'storagePolicy' => 'StoragePolicy',
        'subpartitionColumn' => 'SubpartitionColumn',
        'subpartitionCount' => 'SubpartitionCount',
        'subpartitionType' => 'SubpartitionType',
        'tableEngineName' => 'TableEngineName',
        'tableName' => 'TableName',
        'tableType' => 'TableType',
        'tblId' => 'TblId',
        'temporary' => 'Temporary',
        'updateTime' => 'UpdateTime',
        'viewExpandedText' => 'ViewExpandedText',
        'viewOriginalText' => 'ViewOriginalText',
        'viewSecurityMode' => 'ViewSecurityMode',
    ];

    public function validate()
    {
        if (\is_array($this->cols)) {
            Model::validateArray($this->cols);
        }
        if (\is_array($this->distributeColumns)) {
            Model::validateArray($this->distributeColumns);
        }
        if (\is_array($this->indexes)) {
            Model::validateArray($this->indexes);
        }
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        if (\is_array($this->partitionKeys)) {
            Model::validateArray($this->partitionKeys);
        }
        if (\is_array($this->routeColumns)) {
            Model::validateArray($this->routeColumns);
        }
        if (null !== $this->routeEffectiveColumn) {
            $this->routeEffectiveColumn->validate();
        }
        if (null !== $this->sd) {
            $this->sd->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->archiveType) {
            $res['ArchiveType'] = $this->archiveType;
        }

        if (null !== $this->blockSize) {
            $res['BlockSize'] = $this->blockSize;
        }

        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }

        if (null !== $this->bucketCount) {
            $res['BucketCount'] = $this->bucketCount;
        }

        if (null !== $this->cols) {
            if (\is_array($this->cols)) {
                $res['Cols'] = [];
                $n1 = 0;
                foreach ($this->cols as $item1) {
                    $res['Cols'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->compression) {
            $res['Compression'] = $this->compression;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->createdBySource) {
            $res['CreatedBySource'] = $this->createdBySource;
        }

        if (null !== $this->createdByUser) {
            $res['CreatedByUser'] = $this->createdByUser;
        }

        if (null !== $this->currentVersion) {
            $res['CurrentVersion'] = $this->currentVersion;
        }

        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->dictEncode) {
            $res['DictEncode'] = $this->dictEncode;
        }

        if (null !== $this->distributeColumns) {
            if (\is_array($this->distributeColumns)) {
                $res['DistributeColumns'] = [];
                $n1 = 0;
                foreach ($this->distributeColumns as $item1) {
                    $res['DistributeColumns'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->distributeType) {
            $res['DistributeType'] = $this->distributeType;
        }

        if (null !== $this->enableDfs) {
            $res['EnableDfs'] = $this->enableDfs;
        }

        if (null !== $this->hotPartitionCount) {
            $res['HotPartitionCount'] = $this->hotPartitionCount;
        }

        if (null !== $this->indexes) {
            if (\is_array($this->indexes)) {
                $res['Indexes'] = [];
                $n1 = 0;
                foreach ($this->indexes as $item1) {
                    $res['Indexes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->isAllIndex) {
            $res['IsAllIndex'] = $this->isAllIndex;
        }

        if (null !== $this->isFulltextDict) {
            $res['IsFulltextDict'] = $this->isFulltextDict;
        }

        if (null !== $this->maxColumnId) {
            $res['MaxColumnId'] = $this->maxColumnId;
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['Parameters'] = [];
                foreach ($this->parameters as $key1 => $value1) {
                    $res['Parameters'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->partitionColumn) {
            $res['PartitionColumn'] = $this->partitionColumn;
        }

        if (null !== $this->partitionCount) {
            $res['PartitionCount'] = $this->partitionCount;
        }

        if (null !== $this->partitionKeys) {
            if (\is_array($this->partitionKeys)) {
                $res['PartitionKeys'] = [];
                $n1 = 0;
                foreach ($this->partitionKeys as $item1) {
                    $res['PartitionKeys'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->partitionType) {
            $res['PartitionType'] = $this->partitionType;
        }

        if (null !== $this->physicalDatabaseName) {
            $res['PhysicalDatabaseName'] = $this->physicalDatabaseName;
        }

        if (null !== $this->physicalTableName) {
            $res['PhysicalTableName'] = $this->physicalTableName;
        }

        if (null !== $this->previousVersion) {
            $res['PreviousVersion'] = $this->previousVersion;
        }

        if (null !== $this->rawTableName) {
            $res['RawTableName'] = $this->rawTableName;
        }

        if (null !== $this->routeColumns) {
            if (\is_array($this->routeColumns)) {
                $res['RouteColumns'] = [];
                $n1 = 0;
                foreach ($this->routeColumns as $item1) {
                    $res['RouteColumns'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->routeEffectiveColumn) {
            $res['RouteEffectiveColumn'] = null !== $this->routeEffectiveColumn ? $this->routeEffectiveColumn->toArray($noStream) : $this->routeEffectiveColumn;
        }

        if (null !== $this->routeType) {
            $res['RouteType'] = $this->routeType;
        }

        if (null !== $this->rtEngineType) {
            $res['RtEngineType'] = $this->rtEngineType;
        }

        if (null !== $this->rtIndexAll) {
            $res['RtIndexAll'] = $this->rtIndexAll;
        }

        if (null !== $this->rtModeType) {
            $res['RtModeType'] = $this->rtModeType;
        }

        if (null !== $this->sd) {
            $res['Sd'] = null !== $this->sd ? $this->sd->toArray($noStream) : $this->sd;
        }

        if (null !== $this->storagePolicy) {
            $res['StoragePolicy'] = $this->storagePolicy;
        }

        if (null !== $this->subpartitionColumn) {
            $res['SubpartitionColumn'] = $this->subpartitionColumn;
        }

        if (null !== $this->subpartitionCount) {
            $res['SubpartitionCount'] = $this->subpartitionCount;
        }

        if (null !== $this->subpartitionType) {
            $res['SubpartitionType'] = $this->subpartitionType;
        }

        if (null !== $this->tableEngineName) {
            $res['TableEngineName'] = $this->tableEngineName;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        if (null !== $this->tableType) {
            $res['TableType'] = $this->tableType;
        }

        if (null !== $this->tblId) {
            $res['TblId'] = $this->tblId;
        }

        if (null !== $this->temporary) {
            $res['Temporary'] = $this->temporary;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->viewExpandedText) {
            $res['ViewExpandedText'] = $this->viewExpandedText;
        }

        if (null !== $this->viewOriginalText) {
            $res['ViewOriginalText'] = $this->viewOriginalText;
        }

        if (null !== $this->viewSecurityMode) {
            $res['ViewSecurityMode'] = $this->viewSecurityMode;
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
        if (isset($map['ArchiveType'])) {
            $model->archiveType = $map['ArchiveType'];
        }

        if (isset($map['BlockSize'])) {
            $model->blockSize = $map['BlockSize'];
        }

        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }

        if (isset($map['BucketCount'])) {
            $model->bucketCount = $map['BucketCount'];
        }

        if (isset($map['Cols'])) {
            if (!empty($map['Cols'])) {
                $model->cols = [];
                $n1 = 0;
                foreach ($map['Cols'] as $item1) {
                    $model->cols[$n1] = FieldSchemaModel::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['Compression'])) {
            $model->compression = $map['Compression'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreatedBySource'])) {
            $model->createdBySource = $map['CreatedBySource'];
        }

        if (isset($map['CreatedByUser'])) {
            $model->createdByUser = $map['CreatedByUser'];
        }

        if (isset($map['CurrentVersion'])) {
            $model->currentVersion = $map['CurrentVersion'];
        }

        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        if (isset($map['DictEncode'])) {
            $model->dictEncode = $map['DictEncode'];
        }

        if (isset($map['DistributeColumns'])) {
            if (!empty($map['DistributeColumns'])) {
                $model->distributeColumns = [];
                $n1 = 0;
                foreach ($map['DistributeColumns'] as $item1) {
                    $model->distributeColumns[$n1] = FieldSchemaModel::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DistributeType'])) {
            $model->distributeType = $map['DistributeType'];
        }

        if (isset($map['EnableDfs'])) {
            $model->enableDfs = $map['EnableDfs'];
        }

        if (isset($map['HotPartitionCount'])) {
            $model->hotPartitionCount = $map['HotPartitionCount'];
        }

        if (isset($map['Indexes'])) {
            if (!empty($map['Indexes'])) {
                $model->indexes = [];
                $n1 = 0;
                foreach ($map['Indexes'] as $item1) {
                    $model->indexes[$n1] = CstoreIndexModel::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['IsAllIndex'])) {
            $model->isAllIndex = $map['IsAllIndex'];
        }

        if (isset($map['IsFulltextDict'])) {
            $model->isFulltextDict = $map['IsFulltextDict'];
        }

        if (isset($map['MaxColumnId'])) {
            $model->maxColumnId = $map['MaxColumnId'];
        }

        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                foreach ($map['Parameters'] as $key1 => $value1) {
                    $model->parameters[$key1] = $value1;
                }
            }
        }

        if (isset($map['PartitionColumn'])) {
            $model->partitionColumn = $map['PartitionColumn'];
        }

        if (isset($map['PartitionCount'])) {
            $model->partitionCount = $map['PartitionCount'];
        }

        if (isset($map['PartitionKeys'])) {
            if (!empty($map['PartitionKeys'])) {
                $model->partitionKeys = [];
                $n1 = 0;
                foreach ($map['PartitionKeys'] as $item1) {
                    $model->partitionKeys[$n1] = FieldSchemaModel::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PartitionType'])) {
            $model->partitionType = $map['PartitionType'];
        }

        if (isset($map['PhysicalDatabaseName'])) {
            $model->physicalDatabaseName = $map['PhysicalDatabaseName'];
        }

        if (isset($map['PhysicalTableName'])) {
            $model->physicalTableName = $map['PhysicalTableName'];
        }

        if (isset($map['PreviousVersion'])) {
            $model->previousVersion = $map['PreviousVersion'];
        }

        if (isset($map['RawTableName'])) {
            $model->rawTableName = $map['RawTableName'];
        }

        if (isset($map['RouteColumns'])) {
            if (!empty($map['RouteColumns'])) {
                $model->routeColumns = [];
                $n1 = 0;
                foreach ($map['RouteColumns'] as $item1) {
                    $model->routeColumns[$n1] = FieldSchemaModel::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RouteEffectiveColumn'])) {
            $model->routeEffectiveColumn = FieldSchemaModel::fromMap($map['RouteEffectiveColumn']);
        }

        if (isset($map['RouteType'])) {
            $model->routeType = $map['RouteType'];
        }

        if (isset($map['RtEngineType'])) {
            $model->rtEngineType = $map['RtEngineType'];
        }

        if (isset($map['RtIndexAll'])) {
            $model->rtIndexAll = $map['RtIndexAll'];
        }

        if (isset($map['RtModeType'])) {
            $model->rtModeType = $map['RtModeType'];
        }

        if (isset($map['Sd'])) {
            $model->sd = StorageDescriptorModel::fromMap($map['Sd']);
        }

        if (isset($map['StoragePolicy'])) {
            $model->storagePolicy = $map['StoragePolicy'];
        }

        if (isset($map['SubpartitionColumn'])) {
            $model->subpartitionColumn = $map['SubpartitionColumn'];
        }

        if (isset($map['SubpartitionCount'])) {
            $model->subpartitionCount = $map['SubpartitionCount'];
        }

        if (isset($map['SubpartitionType'])) {
            $model->subpartitionType = $map['SubpartitionType'];
        }

        if (isset($map['TableEngineName'])) {
            $model->tableEngineName = $map['TableEngineName'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        if (isset($map['TableType'])) {
            $model->tableType = $map['TableType'];
        }

        if (isset($map['TblId'])) {
            $model->tblId = $map['TblId'];
        }

        if (isset($map['Temporary'])) {
            $model->temporary = $map['Temporary'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['ViewExpandedText'])) {
            $model->viewExpandedText = $map['ViewExpandedText'];
        }

        if (isset($map['ViewOriginalText'])) {
            $model->viewOriginalText = $map['ViewOriginalText'];
        }

        if (isset($map['ViewSecurityMode'])) {
            $model->viewSecurityMode = $map['ViewSecurityMode'];
        }

        return $model;
    }
}
