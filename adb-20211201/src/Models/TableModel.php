<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

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
        'archiveType'          => 'ArchiveType',
        'blockSize'            => 'BlockSize',
        'bucket'               => 'Bucket',
        'bucketCount'          => 'BucketCount',
        'cols'                 => 'Cols',
        'comment'              => 'Comment',
        'compression'          => 'Compression',
        'createTime'           => 'CreateTime',
        'currentVersion'       => 'CurrentVersion',
        'dbName'               => 'DbName',
        'dictEncode'           => 'DictEncode',
        'distributeColumns'    => 'DistributeColumns',
        'distributeType'       => 'DistributeType',
        'enableDfs'            => 'EnableDfs',
        'hotPartitionCount'    => 'HotPartitionCount',
        'indexes'              => 'Indexes',
        'isAllIndex'           => 'IsAllIndex',
        'isFulltextDict'       => 'IsFulltextDict',
        'maxColumnId'          => 'MaxColumnId',
        'parameters'           => 'Parameters',
        'partitionColumn'      => 'PartitionColumn',
        'partitionCount'       => 'PartitionCount',
        'partitionKeys'        => 'PartitionKeys',
        'partitionType'        => 'PartitionType',
        'physicalDatabaseName' => 'PhysicalDatabaseName',
        'physicalTableName'    => 'PhysicalTableName',
        'previousVersion'      => 'PreviousVersion',
        'rawTableName'         => 'RawTableName',
        'routeColumns'         => 'RouteColumns',
        'routeEffectiveColumn' => 'RouteEffectiveColumn',
        'routeType'            => 'RouteType',
        'rtEngineType'         => 'RtEngineType',
        'rtIndexAll'           => 'RtIndexAll',
        'rtModeType'           => 'RtModeType',
        'sd'                   => 'Sd',
        'storagePolicy'        => 'StoragePolicy',
        'subpartitionColumn'   => 'SubpartitionColumn',
        'subpartitionCount'    => 'SubpartitionCount',
        'subpartitionType'     => 'SubpartitionType',
        'tableEngineName'      => 'TableEngineName',
        'tableName'            => 'TableName',
        'tableType'            => 'TableType',
        'tblId'                => 'TblId',
        'temporary'            => 'Temporary',
        'updateTime'           => 'UpdateTime',
        'viewExpandedText'     => 'ViewExpandedText',
        'viewOriginalText'     => 'ViewOriginalText',
        'viewSecurityMode'     => 'ViewSecurityMode',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Cols'] = [];
            if (null !== $this->cols && \is_array($this->cols)) {
                $n = 0;
                foreach ($this->cols as $item) {
                    $res['Cols'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['DistributeColumns'] = [];
            if (null !== $this->distributeColumns && \is_array($this->distributeColumns)) {
                $n = 0;
                foreach ($this->distributeColumns as $item) {
                    $res['DistributeColumns'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['Indexes'] = [];
            if (null !== $this->indexes && \is_array($this->indexes)) {
                $n = 0;
                foreach ($this->indexes as $item) {
                    $res['Indexes'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->partitionColumn) {
            $res['PartitionColumn'] = $this->partitionColumn;
        }
        if (null !== $this->partitionCount) {
            $res['PartitionCount'] = $this->partitionCount;
        }
        if (null !== $this->partitionKeys) {
            $res['PartitionKeys'] = [];
            if (null !== $this->partitionKeys && \is_array($this->partitionKeys)) {
                $n = 0;
                foreach ($this->partitionKeys as $item) {
                    $res['PartitionKeys'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['RouteColumns'] = [];
            if (null !== $this->routeColumns && \is_array($this->routeColumns)) {
                $n = 0;
                foreach ($this->routeColumns as $item) {
                    $res['RouteColumns'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->routeEffectiveColumn) {
            $res['RouteEffectiveColumn'] = null !== $this->routeEffectiveColumn ? $this->routeEffectiveColumn->toMap() : null;
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
            $res['Sd'] = null !== $this->sd ? $this->sd->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return TableModel
     */
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
                $n           = 0;
                foreach ($map['Cols'] as $item) {
                    $model->cols[$n++] = null !== $item ? FieldSchemaModel::fromMap($item) : $item;
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
                $n                        = 0;
                foreach ($map['DistributeColumns'] as $item) {
                    $model->distributeColumns[$n++] = null !== $item ? FieldSchemaModel::fromMap($item) : $item;
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
                $n              = 0;
                foreach ($map['Indexes'] as $item) {
                    $model->indexes[$n++] = null !== $item ? CstoreIndexModel::fromMap($item) : $item;
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
            $model->parameters = $map['Parameters'];
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
                $n                    = 0;
                foreach ($map['PartitionKeys'] as $item) {
                    $model->partitionKeys[$n++] = null !== $item ? FieldSchemaModel::fromMap($item) : $item;
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
                $n                   = 0;
                foreach ($map['RouteColumns'] as $item) {
                    $model->routeColumns[$n++] = null !== $item ? FieldSchemaModel::fromMap($item) : $item;
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
