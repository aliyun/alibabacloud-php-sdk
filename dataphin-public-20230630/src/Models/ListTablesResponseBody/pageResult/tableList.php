<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListTablesResponseBody\pageResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListTablesResponseBody\pageResult\tableList\streamTableConfig;

class tableList extends Model
{
    /**
     * @var string[]
     */
    public $assetTagList;

    /**
     * @var int
     */
    public $bizUnitId;

    /**
     * @var string
     */
    public $bizUnitName;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var int
     */
    public $dataDomainId;

    /**
     * @var string
     */
    public $dataDomainName;

    /**
     * @var int
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $env;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $guid;

    /**
     * @var bool
     */
    public $isBasicMode;

    /**
     * @var bool
     */
    public $isPartitionTable;

    /**
     * @var string
     */
    public $lastDdlTime;

    /**
     * @var string
     */
    public $lastDmlTime;

    /**
     * @var string
     */
    public $lastQueryTime;

    /**
     * @var int
     */
    public $lifeCycle;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $parentModelId;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var int
     */
    public $securityLevel;

    /**
     * @var string
     */
    public $securityLevelAbbreviation;

    /**
     * @var string
     */
    public $securityLevelName;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var streamTableConfig[]
     */
    public $streamTableConfig;

    /**
     * @var int
     */
    public $tableSizeInBytes;

    /**
     * @var int
     */
    public $visitCount30d;
    protected $_name = [
        'assetTagList' => 'AssetTagList',
        'bizUnitId' => 'BizUnitId',
        'bizUnitName' => 'BizUnitName',
        'comment' => 'Comment',
        'createTime' => 'CreateTime',
        'creator' => 'Creator',
        'dataDomainId' => 'DataDomainId',
        'dataDomainName' => 'DataDomainName',
        'dataSourceId' => 'DataSourceId',
        'displayName' => 'DisplayName',
        'env' => 'Env',
        'fileId' => 'FileId',
        'guid' => 'Guid',
        'isBasicMode' => 'IsBasicMode',
        'isPartitionTable' => 'IsPartitionTable',
        'lastDdlTime' => 'LastDdlTime',
        'lastDmlTime' => 'LastDmlTime',
        'lastQueryTime' => 'LastQueryTime',
        'lifeCycle' => 'LifeCycle',
        'name' => 'Name',
        'owner' => 'Owner',
        'parentModelId' => 'ParentModelId',
        'projectId' => 'ProjectId',
        'projectName' => 'ProjectName',
        'securityLevel' => 'SecurityLevel',
        'securityLevelAbbreviation' => 'SecurityLevelAbbreviation',
        'securityLevelName' => 'SecurityLevelName',
        'storageType' => 'StorageType',
        'streamTableConfig' => 'StreamTableConfig',
        'tableSizeInBytes' => 'TableSizeInBytes',
        'visitCount30d' => 'VisitCount30d',
    ];

    public function validate()
    {
        if (\is_array($this->assetTagList)) {
            Model::validateArray($this->assetTagList);
        }
        if (\is_array($this->streamTableConfig)) {
            Model::validateArray($this->streamTableConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetTagList) {
            if (\is_array($this->assetTagList)) {
                $res['AssetTagList'] = [];
                $n1 = 0;
                foreach ($this->assetTagList as $item1) {
                    $res['AssetTagList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->bizUnitId) {
            $res['BizUnitId'] = $this->bizUnitId;
        }

        if (null !== $this->bizUnitName) {
            $res['BizUnitName'] = $this->bizUnitName;
        }

        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->dataDomainId) {
            $res['DataDomainId'] = $this->dataDomainId;
        }

        if (null !== $this->dataDomainName) {
            $res['DataDomainName'] = $this->dataDomainName;
        }

        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }

        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->guid) {
            $res['Guid'] = $this->guid;
        }

        if (null !== $this->isBasicMode) {
            $res['IsBasicMode'] = $this->isBasicMode;
        }

        if (null !== $this->isPartitionTable) {
            $res['IsPartitionTable'] = $this->isPartitionTable;
        }

        if (null !== $this->lastDdlTime) {
            $res['LastDdlTime'] = $this->lastDdlTime;
        }

        if (null !== $this->lastDmlTime) {
            $res['LastDmlTime'] = $this->lastDmlTime;
        }

        if (null !== $this->lastQueryTime) {
            $res['LastQueryTime'] = $this->lastQueryTime;
        }

        if (null !== $this->lifeCycle) {
            $res['LifeCycle'] = $this->lifeCycle;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->parentModelId) {
            $res['ParentModelId'] = $this->parentModelId;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->securityLevel) {
            $res['SecurityLevel'] = $this->securityLevel;
        }

        if (null !== $this->securityLevelAbbreviation) {
            $res['SecurityLevelAbbreviation'] = $this->securityLevelAbbreviation;
        }

        if (null !== $this->securityLevelName) {
            $res['SecurityLevelName'] = $this->securityLevelName;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        if (null !== $this->streamTableConfig) {
            if (\is_array($this->streamTableConfig)) {
                $res['StreamTableConfig'] = [];
                $n1 = 0;
                foreach ($this->streamTableConfig as $item1) {
                    $res['StreamTableConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tableSizeInBytes) {
            $res['TableSizeInBytes'] = $this->tableSizeInBytes;
        }

        if (null !== $this->visitCount30d) {
            $res['VisitCount30d'] = $this->visitCount30d;
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
        if (isset($map['AssetTagList'])) {
            if (!empty($map['AssetTagList'])) {
                $model->assetTagList = [];
                $n1 = 0;
                foreach ($map['AssetTagList'] as $item1) {
                    $model->assetTagList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['BizUnitId'])) {
            $model->bizUnitId = $map['BizUnitId'];
        }

        if (isset($map['BizUnitName'])) {
            $model->bizUnitName = $map['BizUnitName'];
        }

        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['DataDomainId'])) {
            $model->dataDomainId = $map['DataDomainId'];
        }

        if (isset($map['DataDomainName'])) {
            $model->dataDomainName = $map['DataDomainName'];
        }

        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }

        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['Guid'])) {
            $model->guid = $map['Guid'];
        }

        if (isset($map['IsBasicMode'])) {
            $model->isBasicMode = $map['IsBasicMode'];
        }

        if (isset($map['IsPartitionTable'])) {
            $model->isPartitionTable = $map['IsPartitionTable'];
        }

        if (isset($map['LastDdlTime'])) {
            $model->lastDdlTime = $map['LastDdlTime'];
        }

        if (isset($map['LastDmlTime'])) {
            $model->lastDmlTime = $map['LastDmlTime'];
        }

        if (isset($map['LastQueryTime'])) {
            $model->lastQueryTime = $map['LastQueryTime'];
        }

        if (isset($map['LifeCycle'])) {
            $model->lifeCycle = $map['LifeCycle'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['ParentModelId'])) {
            $model->parentModelId = $map['ParentModelId'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['SecurityLevel'])) {
            $model->securityLevel = $map['SecurityLevel'];
        }

        if (isset($map['SecurityLevelAbbreviation'])) {
            $model->securityLevelAbbreviation = $map['SecurityLevelAbbreviation'];
        }

        if (isset($map['SecurityLevelName'])) {
            $model->securityLevelName = $map['SecurityLevelName'];
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        if (isset($map['StreamTableConfig'])) {
            if (!empty($map['StreamTableConfig'])) {
                $model->streamTableConfig = [];
                $n1 = 0;
                foreach ($map['StreamTableConfig'] as $item1) {
                    $model->streamTableConfig[$n1] = streamTableConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TableSizeInBytes'])) {
            $model->tableSizeInBytes = $map['TableSizeInBytes'];
        }

        if (isset($map['VisitCount30d'])) {
            $model->visitCount30d = $map['VisitCount30d'];
        }

        return $model;
    }
}
