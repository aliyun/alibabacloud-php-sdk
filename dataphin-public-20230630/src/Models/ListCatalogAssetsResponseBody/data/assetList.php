<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListCatalogAssetsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListCatalogAssetsResponseBody\data\assetList\directories;

class assetList extends Model
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
    public $granularity;

    /**
     * @var string
     */
    public $guid;

    /**
     * @var bool
     */
    public $isDeleted;

    /**
     * @var string
     */
    public $maxSecurityLevel;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectName;

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
    protected $_name = [
        'apiCallMode' => 'ApiCallMode',
        'apiGroupName' => 'ApiGroupName',
        'apiId' => 'ApiId',
        'apiRequestMethod' => 'ApiRequestMethod',
        'assetDescription' => 'AssetDescription',
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
        'dataCellId' => 'DataCellId',
        'dataCellName' => 'DataCellName',
        'dataSourceName' => 'DataSourceName',
        'datasourceId' => 'DatasourceId',
        'directories' => 'Directories',
        'granularity' => 'Granularity',
        'guid' => 'Guid',
        'isDeleted' => 'IsDeleted',
        'maxSecurityLevel' => 'MaxSecurityLevel',
        'projectId' => 'ProjectId',
        'projectName' => 'ProjectName',
        'subType' => 'SubType',
        'sumTableGuid' => 'SumTableGuid',
        'sumTableName' => 'SumTableName',
    ];

    public function validate()
    {
        if (\is_array($this->assetTags)) {
            Model::validateArray($this->assetTags);
        }
        if (\is_array($this->directories)) {
            Model::validateArray($this->directories);
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

        if (null !== $this->granularity) {
            $res['Granularity'] = $this->granularity;
        }

        if (null !== $this->guid) {
            $res['Guid'] = $this->guid;
        }

        if (null !== $this->isDeleted) {
            $res['IsDeleted'] = $this->isDeleted;
        }

        if (null !== $this->maxSecurityLevel) {
            $res['MaxSecurityLevel'] = $this->maxSecurityLevel;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
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

        if (isset($map['Granularity'])) {
            $model->granularity = $map['Granularity'];
        }

        if (isset($map['Guid'])) {
            $model->guid = $map['Guid'];
        }

        if (isset($map['IsDeleted'])) {
            $model->isDeleted = $map['IsDeleted'];
        }

        if (isset($map['MaxSecurityLevel'])) {
            $model->maxSecurityLevel = $map['MaxSecurityLevel'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
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

        return $model;
    }
}
