<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetCatalogAssetDetailsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetCatalogAssetDetailsResponseBody\data\columns;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetCatalogAssetDetailsResponseBody\data\customAttributes;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetCatalogAssetDetailsResponseBody\data\directories;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetCatalogAssetDetailsResponseBody\data\firstOnShelveUser;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetCatalogAssetDetailsResponseBody\data\lastOnShelveUser;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetCatalogAssetDetailsResponseBody\data\owner;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetCatalogAssetDetailsResponseBody\data\simpleNodeInfos;

class data extends Model
{
    /**
     * @var string
     */
    public $apiCallMode;

    /**
     * @var string
     */
    public $apiGroupName;

    /**
     * @var int
     */
    public $apiId;

    /**
     * @var string
     */
    public $apiRequestMethod;

    /**
     * @var string
     */
    public $assetDescription;

    /**
     * @var string
     */
    public $assetDetailUrl;

    /**
     * @var string
     */
    public $assetDisplayName;

    /**
     * @var string
     */
    public $assetFrom;

    /**
     * @var string
     */
    public $assetFullName;

    /**
     * @var string
     */
    public $assetName;

    /**
     * @var string[]
     */
    public $assetTags;

    /**
     * @var string
     */
    public $assetType;

    /**
     * @var string
     */
    public $biCatalog;

    /**
     * @var int
     */
    public $bizUnitId;

    /**
     * @var string
     */
    public $bizUnitName;

    /**
     * @var int
     */
    public $chartCount;

    /**
     * @var int
     */
    public $collectionCount;

    /**
     * @var columns[]
     */
    public $columns;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var customAttributes[]
     */
    public $customAttributes;

    /**
     * @var string
     */
    public $dataCellId;

    /**
     * @var string
     */
    public $dataCellName;

    /**
     * @var string
     */
    public $dataSourceName;

    /**
     * @var int
     */
    public $datasourceId;

    /**
     * @var directories[]
     */
    public $directories;

    /**
     * @var string
     */
    public $firstOnShelveTime;

    /**
     * @var firstOnShelveUser
     */
    public $firstOnShelveUser;

    /**
     * @var string
     */
    public $granularity;

    /**
     * @var string
     */
    public $guid;

    /**
     * @var string
     */
    public $instruction;

    /**
     * @var bool
     */
    public $isDeleted;

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
    public $lastOnShelveTime;

    /**
     * @var lastOnShelveUser
     */
    public $lastOnShelveUser;

    /**
     * @var string[]
     */
    public $maintainUserGroups;

    /**
     * @var string[]
     */
    public $maintainUserIds;

    /**
     * @var string
     */
    public $maxSecurityLevel;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var owner
     */
    public $owner;

    /**
     * @var string
     */
    public $partitionKey;

    /**
     * @var string
     */
    public $primaryKey;

    /**
     * @var string
     */
    public $profilingReportViewScopeType;

    /**
     * @var string[]
     */
    public $profilingReportViewScopeUserGroups;

    /**
     * @var string[]
     */
    public $profilingReportViewScopeUserIds;

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
    public $readCount;

    /**
     * @var string
     */
    public $shelveViewScopeType;

    /**
     * @var string[]
     */
    public $shelveViewScopeUserGroups;

    /**
     * @var string[]
     */
    public $shelveViewScopeUserIds;

    /**
     * @var simpleNodeInfos[]
     */
    public $simpleNodeInfos;

    /**
     * @var string
     */
    public $subType;

    /**
     * @var string
     */
    public $sumTableGuid;

    /**
     * @var string
     */
    public $sumTableName;

    /**
     * @var string
     */
    public $tableLifeCycle;

    /**
     * @var int
     */
    public $tableSizeInBytes;
    protected $_name = [
        'apiCallMode' => 'ApiCallMode',
        'apiGroupName' => 'ApiGroupName',
        'apiId' => 'ApiId',
        'apiRequestMethod' => 'ApiRequestMethod',
        'assetDescription' => 'AssetDescription',
        'assetDetailUrl' => 'AssetDetailUrl',
        'assetDisplayName' => 'AssetDisplayName',
        'assetFrom' => 'AssetFrom',
        'assetFullName' => 'AssetFullName',
        'assetName' => 'AssetName',
        'assetTags' => 'AssetTags',
        'assetType' => 'AssetType',
        'biCatalog' => 'BiCatalog',
        'bizUnitId' => 'BizUnitId',
        'bizUnitName' => 'BizUnitName',
        'chartCount' => 'ChartCount',
        'collectionCount' => 'CollectionCount',
        'columns' => 'Columns',
        'createTime' => 'CreateTime',
        'customAttributes' => 'CustomAttributes',
        'dataCellId' => 'DataCellId',
        'dataCellName' => 'DataCellName',
        'dataSourceName' => 'DataSourceName',
        'datasourceId' => 'DatasourceId',
        'directories' => 'Directories',
        'firstOnShelveTime' => 'FirstOnShelveTime',
        'firstOnShelveUser' => 'FirstOnShelveUser',
        'granularity' => 'Granularity',
        'guid' => 'Guid',
        'instruction' => 'Instruction',
        'isDeleted' => 'IsDeleted',
        'isPartitionTable' => 'IsPartitionTable',
        'lastDdlTime' => 'LastDdlTime',
        'lastDmlTime' => 'LastDmlTime',
        'lastOnShelveTime' => 'LastOnShelveTime',
        'lastOnShelveUser' => 'LastOnShelveUser',
        'maintainUserGroups' => 'MaintainUserGroups',
        'maintainUserIds' => 'MaintainUserIds',
        'maxSecurityLevel' => 'MaxSecurityLevel',
        'modifyTime' => 'ModifyTime',
        'owner' => 'Owner',
        'partitionKey' => 'PartitionKey',
        'primaryKey' => 'PrimaryKey',
        'profilingReportViewScopeType' => 'ProfilingReportViewScopeType',
        'profilingReportViewScopeUserGroups' => 'ProfilingReportViewScopeUserGroups',
        'profilingReportViewScopeUserIds' => 'ProfilingReportViewScopeUserIds',
        'projectId' => 'ProjectId',
        'projectName' => 'ProjectName',
        'readCount' => 'ReadCount',
        'shelveViewScopeType' => 'ShelveViewScopeType',
        'shelveViewScopeUserGroups' => 'ShelveViewScopeUserGroups',
        'shelveViewScopeUserIds' => 'ShelveViewScopeUserIds',
        'simpleNodeInfos' => 'SimpleNodeInfos',
        'subType' => 'SubType',
        'sumTableGuid' => 'SumTableGuid',
        'sumTableName' => 'SumTableName',
        'tableLifeCycle' => 'TableLifeCycle',
        'tableSizeInBytes' => 'TableSizeInBytes',
    ];

    public function validate()
    {
        if (\is_array($this->assetTags)) {
            Model::validateArray($this->assetTags);
        }
        if (\is_array($this->columns)) {
            Model::validateArray($this->columns);
        }
        if (\is_array($this->customAttributes)) {
            Model::validateArray($this->customAttributes);
        }
        if (\is_array($this->directories)) {
            Model::validateArray($this->directories);
        }
        if (null !== $this->firstOnShelveUser) {
            $this->firstOnShelveUser->validate();
        }
        if (null !== $this->lastOnShelveUser) {
            $this->lastOnShelveUser->validate();
        }
        if (\is_array($this->maintainUserGroups)) {
            Model::validateArray($this->maintainUserGroups);
        }
        if (\is_array($this->maintainUserIds)) {
            Model::validateArray($this->maintainUserIds);
        }
        if (null !== $this->owner) {
            $this->owner->validate();
        }
        if (\is_array($this->profilingReportViewScopeUserGroups)) {
            Model::validateArray($this->profilingReportViewScopeUserGroups);
        }
        if (\is_array($this->profilingReportViewScopeUserIds)) {
            Model::validateArray($this->profilingReportViewScopeUserIds);
        }
        if (\is_array($this->shelveViewScopeUserGroups)) {
            Model::validateArray($this->shelveViewScopeUserGroups);
        }
        if (\is_array($this->shelveViewScopeUserIds)) {
            Model::validateArray($this->shelveViewScopeUserIds);
        }
        if (\is_array($this->simpleNodeInfos)) {
            Model::validateArray($this->simpleNodeInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiCallMode) {
            $res['ApiCallMode'] = $this->apiCallMode;
        }

        if (null !== $this->apiGroupName) {
            $res['ApiGroupName'] = $this->apiGroupName;
        }

        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }

        if (null !== $this->apiRequestMethod) {
            $res['ApiRequestMethod'] = $this->apiRequestMethod;
        }

        if (null !== $this->assetDescription) {
            $res['AssetDescription'] = $this->assetDescription;
        }

        if (null !== $this->assetDetailUrl) {
            $res['AssetDetailUrl'] = $this->assetDetailUrl;
        }

        if (null !== $this->assetDisplayName) {
            $res['AssetDisplayName'] = $this->assetDisplayName;
        }

        if (null !== $this->assetFrom) {
            $res['AssetFrom'] = $this->assetFrom;
        }

        if (null !== $this->assetFullName) {
            $res['AssetFullName'] = $this->assetFullName;
        }

        if (null !== $this->assetName) {
            $res['AssetName'] = $this->assetName;
        }

        if (null !== $this->assetTags) {
            if (\is_array($this->assetTags)) {
                $res['AssetTags'] = [];
                $n1 = 0;
                foreach ($this->assetTags as $item1) {
                    $res['AssetTags'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }

        if (null !== $this->biCatalog) {
            $res['BiCatalog'] = $this->biCatalog;
        }

        if (null !== $this->bizUnitId) {
            $res['BizUnitId'] = $this->bizUnitId;
        }

        if (null !== $this->bizUnitName) {
            $res['BizUnitName'] = $this->bizUnitName;
        }

        if (null !== $this->chartCount) {
            $res['ChartCount'] = $this->chartCount;
        }

        if (null !== $this->collectionCount) {
            $res['CollectionCount'] = $this->collectionCount;
        }

        if (null !== $this->columns) {
            if (\is_array($this->columns)) {
                $res['Columns'] = [];
                $n1 = 0;
                foreach ($this->columns as $item1) {
                    $res['Columns'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->customAttributes) {
            if (\is_array($this->customAttributes)) {
                $res['CustomAttributes'] = [];
                $n1 = 0;
                foreach ($this->customAttributes as $item1) {
                    $res['CustomAttributes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dataCellId) {
            $res['DataCellId'] = $this->dataCellId;
        }

        if (null !== $this->dataCellName) {
            $res['DataCellName'] = $this->dataCellName;
        }

        if (null !== $this->dataSourceName) {
            $res['DataSourceName'] = $this->dataSourceName;
        }

        if (null !== $this->datasourceId) {
            $res['DatasourceId'] = $this->datasourceId;
        }

        if (null !== $this->directories) {
            if (\is_array($this->directories)) {
                $res['Directories'] = [];
                $n1 = 0;
                foreach ($this->directories as $item1) {
                    $res['Directories'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->firstOnShelveTime) {
            $res['FirstOnShelveTime'] = $this->firstOnShelveTime;
        }

        if (null !== $this->firstOnShelveUser) {
            $res['FirstOnShelveUser'] = null !== $this->firstOnShelveUser ? $this->firstOnShelveUser->toArray($noStream) : $this->firstOnShelveUser;
        }

        if (null !== $this->granularity) {
            $res['Granularity'] = $this->granularity;
        }

        if (null !== $this->guid) {
            $res['Guid'] = $this->guid;
        }

        if (null !== $this->instruction) {
            $res['Instruction'] = $this->instruction;
        }

        if (null !== $this->isDeleted) {
            $res['IsDeleted'] = $this->isDeleted;
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

        if (null !== $this->lastOnShelveTime) {
            $res['LastOnShelveTime'] = $this->lastOnShelveTime;
        }

        if (null !== $this->lastOnShelveUser) {
            $res['LastOnShelveUser'] = null !== $this->lastOnShelveUser ? $this->lastOnShelveUser->toArray($noStream) : $this->lastOnShelveUser;
        }

        if (null !== $this->maintainUserGroups) {
            if (\is_array($this->maintainUserGroups)) {
                $res['MaintainUserGroups'] = [];
                $n1 = 0;
                foreach ($this->maintainUserGroups as $item1) {
                    $res['MaintainUserGroups'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maintainUserIds) {
            if (\is_array($this->maintainUserIds)) {
                $res['MaintainUserIds'] = [];
                $n1 = 0;
                foreach ($this->maintainUserIds as $item1) {
                    $res['MaintainUserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxSecurityLevel) {
            $res['MaxSecurityLevel'] = $this->maxSecurityLevel;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->owner) {
            $res['Owner'] = null !== $this->owner ? $this->owner->toArray($noStream) : $this->owner;
        }

        if (null !== $this->partitionKey) {
            $res['PartitionKey'] = $this->partitionKey;
        }

        if (null !== $this->primaryKey) {
            $res['PrimaryKey'] = $this->primaryKey;
        }

        if (null !== $this->profilingReportViewScopeType) {
            $res['ProfilingReportViewScopeType'] = $this->profilingReportViewScopeType;
        }

        if (null !== $this->profilingReportViewScopeUserGroups) {
            if (\is_array($this->profilingReportViewScopeUserGroups)) {
                $res['ProfilingReportViewScopeUserGroups'] = [];
                $n1 = 0;
                foreach ($this->profilingReportViewScopeUserGroups as $item1) {
                    $res['ProfilingReportViewScopeUserGroups'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->profilingReportViewScopeUserIds) {
            if (\is_array($this->profilingReportViewScopeUserIds)) {
                $res['ProfilingReportViewScopeUserIds'] = [];
                $n1 = 0;
                foreach ($this->profilingReportViewScopeUserIds as $item1) {
                    $res['ProfilingReportViewScopeUserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->readCount) {
            $res['ReadCount'] = $this->readCount;
        }

        if (null !== $this->shelveViewScopeType) {
            $res['ShelveViewScopeType'] = $this->shelveViewScopeType;
        }

        if (null !== $this->shelveViewScopeUserGroups) {
            if (\is_array($this->shelveViewScopeUserGroups)) {
                $res['ShelveViewScopeUserGroups'] = [];
                $n1 = 0;
                foreach ($this->shelveViewScopeUserGroups as $item1) {
                    $res['ShelveViewScopeUserGroups'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->shelveViewScopeUserIds) {
            if (\is_array($this->shelveViewScopeUserIds)) {
                $res['ShelveViewScopeUserIds'] = [];
                $n1 = 0;
                foreach ($this->shelveViewScopeUserIds as $item1) {
                    $res['ShelveViewScopeUserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->simpleNodeInfos) {
            if (\is_array($this->simpleNodeInfos)) {
                $res['SimpleNodeInfos'] = [];
                $n1 = 0;
                foreach ($this->simpleNodeInfos as $item1) {
                    $res['SimpleNodeInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
        }

        if (null !== $this->sumTableGuid) {
            $res['SumTableGuid'] = $this->sumTableGuid;
        }

        if (null !== $this->sumTableName) {
            $res['SumTableName'] = $this->sumTableName;
        }

        if (null !== $this->tableLifeCycle) {
            $res['TableLifeCycle'] = $this->tableLifeCycle;
        }

        if (null !== $this->tableSizeInBytes) {
            $res['TableSizeInBytes'] = $this->tableSizeInBytes;
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
        if (isset($map['ApiCallMode'])) {
            $model->apiCallMode = $map['ApiCallMode'];
        }

        if (isset($map['ApiGroupName'])) {
            $model->apiGroupName = $map['ApiGroupName'];
        }

        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }

        if (isset($map['ApiRequestMethod'])) {
            $model->apiRequestMethod = $map['ApiRequestMethod'];
        }

        if (isset($map['AssetDescription'])) {
            $model->assetDescription = $map['AssetDescription'];
        }

        if (isset($map['AssetDetailUrl'])) {
            $model->assetDetailUrl = $map['AssetDetailUrl'];
        }

        if (isset($map['AssetDisplayName'])) {
            $model->assetDisplayName = $map['AssetDisplayName'];
        }

        if (isset($map['AssetFrom'])) {
            $model->assetFrom = $map['AssetFrom'];
        }

        if (isset($map['AssetFullName'])) {
            $model->assetFullName = $map['AssetFullName'];
        }

        if (isset($map['AssetName'])) {
            $model->assetName = $map['AssetName'];
        }

        if (isset($map['AssetTags'])) {
            if (!empty($map['AssetTags'])) {
                $model->assetTags = [];
                $n1 = 0;
                foreach ($map['AssetTags'] as $item1) {
                    $model->assetTags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }

        if (isset($map['BiCatalog'])) {
            $model->biCatalog = $map['BiCatalog'];
        }

        if (isset($map['BizUnitId'])) {
            $model->bizUnitId = $map['BizUnitId'];
        }

        if (isset($map['BizUnitName'])) {
            $model->bizUnitName = $map['BizUnitName'];
        }

        if (isset($map['ChartCount'])) {
            $model->chartCount = $map['ChartCount'];
        }

        if (isset($map['CollectionCount'])) {
            $model->collectionCount = $map['CollectionCount'];
        }

        if (isset($map['Columns'])) {
            if (!empty($map['Columns'])) {
                $model->columns = [];
                $n1 = 0;
                foreach ($map['Columns'] as $item1) {
                    $model->columns[$n1] = columns::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CustomAttributes'])) {
            if (!empty($map['CustomAttributes'])) {
                $model->customAttributes = [];
                $n1 = 0;
                foreach ($map['CustomAttributes'] as $item1) {
                    $model->customAttributes[$n1] = customAttributes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DataCellId'])) {
            $model->dataCellId = $map['DataCellId'];
        }

        if (isset($map['DataCellName'])) {
            $model->dataCellName = $map['DataCellName'];
        }

        if (isset($map['DataSourceName'])) {
            $model->dataSourceName = $map['DataSourceName'];
        }

        if (isset($map['DatasourceId'])) {
            $model->datasourceId = $map['DatasourceId'];
        }

        if (isset($map['Directories'])) {
            if (!empty($map['Directories'])) {
                $model->directories = [];
                $n1 = 0;
                foreach ($map['Directories'] as $item1) {
                    $model->directories[$n1] = directories::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['FirstOnShelveTime'])) {
            $model->firstOnShelveTime = $map['FirstOnShelveTime'];
        }

        if (isset($map['FirstOnShelveUser'])) {
            $model->firstOnShelveUser = firstOnShelveUser::fromMap($map['FirstOnShelveUser']);
        }

        if (isset($map['Granularity'])) {
            $model->granularity = $map['Granularity'];
        }

        if (isset($map['Guid'])) {
            $model->guid = $map['Guid'];
        }

        if (isset($map['Instruction'])) {
            $model->instruction = $map['Instruction'];
        }

        if (isset($map['IsDeleted'])) {
            $model->isDeleted = $map['IsDeleted'];
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

        if (isset($map['LastOnShelveTime'])) {
            $model->lastOnShelveTime = $map['LastOnShelveTime'];
        }

        if (isset($map['LastOnShelveUser'])) {
            $model->lastOnShelveUser = lastOnShelveUser::fromMap($map['LastOnShelveUser']);
        }

        if (isset($map['MaintainUserGroups'])) {
            if (!empty($map['MaintainUserGroups'])) {
                $model->maintainUserGroups = [];
                $n1 = 0;
                foreach ($map['MaintainUserGroups'] as $item1) {
                    $model->maintainUserGroups[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaintainUserIds'])) {
            if (!empty($map['MaintainUserIds'])) {
                $model->maintainUserIds = [];
                $n1 = 0;
                foreach ($map['MaintainUserIds'] as $item1) {
                    $model->maintainUserIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxSecurityLevel'])) {
            $model->maxSecurityLevel = $map['MaxSecurityLevel'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['Owner'])) {
            $model->owner = owner::fromMap($map['Owner']);
        }

        if (isset($map['PartitionKey'])) {
            $model->partitionKey = $map['PartitionKey'];
        }

        if (isset($map['PrimaryKey'])) {
            $model->primaryKey = $map['PrimaryKey'];
        }

        if (isset($map['ProfilingReportViewScopeType'])) {
            $model->profilingReportViewScopeType = $map['ProfilingReportViewScopeType'];
        }

        if (isset($map['ProfilingReportViewScopeUserGroups'])) {
            if (!empty($map['ProfilingReportViewScopeUserGroups'])) {
                $model->profilingReportViewScopeUserGroups = [];
                $n1 = 0;
                foreach ($map['ProfilingReportViewScopeUserGroups'] as $item1) {
                    $model->profilingReportViewScopeUserGroups[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ProfilingReportViewScopeUserIds'])) {
            if (!empty($map['ProfilingReportViewScopeUserIds'])) {
                $model->profilingReportViewScopeUserIds = [];
                $n1 = 0;
                foreach ($map['ProfilingReportViewScopeUserIds'] as $item1) {
                    $model->profilingReportViewScopeUserIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['ReadCount'])) {
            $model->readCount = $map['ReadCount'];
        }

        if (isset($map['ShelveViewScopeType'])) {
            $model->shelveViewScopeType = $map['ShelveViewScopeType'];
        }

        if (isset($map['ShelveViewScopeUserGroups'])) {
            if (!empty($map['ShelveViewScopeUserGroups'])) {
                $model->shelveViewScopeUserGroups = [];
                $n1 = 0;
                foreach ($map['ShelveViewScopeUserGroups'] as $item1) {
                    $model->shelveViewScopeUserGroups[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ShelveViewScopeUserIds'])) {
            if (!empty($map['ShelveViewScopeUserIds'])) {
                $model->shelveViewScopeUserIds = [];
                $n1 = 0;
                foreach ($map['ShelveViewScopeUserIds'] as $item1) {
                    $model->shelveViewScopeUserIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SimpleNodeInfos'])) {
            if (!empty($map['SimpleNodeInfos'])) {
                $model->simpleNodeInfos = [];
                $n1 = 0;
                foreach ($map['SimpleNodeInfos'] as $item1) {
                    $model->simpleNodeInfos[$n1] = simpleNodeInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }

        if (isset($map['SumTableGuid'])) {
            $model->sumTableGuid = $map['SumTableGuid'];
        }

        if (isset($map['SumTableName'])) {
            $model->sumTableName = $map['SumTableName'];
        }

        if (isset($map['TableLifeCycle'])) {
            $model->tableLifeCycle = $map['TableLifeCycle'];
        }

        if (isset($map['TableSizeInBytes'])) {
            $model->tableSizeInBytes = $map['TableSizeInBytes'];
        }

        return $model;
    }
}
