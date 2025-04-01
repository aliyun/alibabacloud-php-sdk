<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class CreateDatasetRequest extends Model
{
    /**
     * @var string
     */
    public $accessibility;

    /**
     * @var int
     */
    public $dataCount;

    /**
     * @var int
     */
    public $dataSize;

    /**
     * @var string
     */
    public $dataSourceType;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $importInfo;

    /**
     * @var Label[]
     */
    public $labels;

    /**
     * @var string[]
     */
    public $mountAccessReadWriteRoleIdList;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $options;

    /**
     * @var string
     */
    public $property;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var string
     */
    public $providerType;

    /**
     * @var string
     */
    public $sourceDatasetId;

    /**
     * @var string
     */
    public $sourceDatasetVersion;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $uri;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $versionDescription;

    /**
     * @var Label[]
     */
    public $versionLabels;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility' => 'Accessibility',
        'dataCount' => 'DataCount',
        'dataSize' => 'DataSize',
        'dataSourceType' => 'DataSourceType',
        'dataType' => 'DataType',
        'description' => 'Description',
        'importInfo' => 'ImportInfo',
        'labels' => 'Labels',
        'mountAccessReadWriteRoleIdList' => 'MountAccessReadWriteRoleIdList',
        'name' => 'Name',
        'options' => 'Options',
        'property' => 'Property',
        'provider' => 'Provider',
        'providerType' => 'ProviderType',
        'sourceDatasetId' => 'SourceDatasetId',
        'sourceDatasetVersion' => 'SourceDatasetVersion',
        'sourceId' => 'SourceId',
        'sourceType' => 'SourceType',
        'uri' => 'Uri',
        'userId' => 'UserId',
        'versionDescription' => 'VersionDescription',
        'versionLabels' => 'VersionLabels',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (\is_array($this->mountAccessReadWriteRoleIdList)) {
            Model::validateArray($this->mountAccessReadWriteRoleIdList);
        }
        if (\is_array($this->versionLabels)) {
            Model::validateArray($this->versionLabels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }

        if (null !== $this->dataCount) {
            $res['DataCount'] = $this->dataCount;
        }

        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }

        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }

        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->importInfo) {
            $res['ImportInfo'] = $this->importInfo;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1 = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->mountAccessReadWriteRoleIdList) {
            if (\is_array($this->mountAccessReadWriteRoleIdList)) {
                $res['MountAccessReadWriteRoleIdList'] = [];
                $n1 = 0;
                foreach ($this->mountAccessReadWriteRoleIdList as $item1) {
                    $res['MountAccessReadWriteRoleIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }

        if (null !== $this->property) {
            $res['Property'] = $this->property;
        }

        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
        }

        if (null !== $this->providerType) {
            $res['ProviderType'] = $this->providerType;
        }

        if (null !== $this->sourceDatasetId) {
            $res['SourceDatasetId'] = $this->sourceDatasetId;
        }

        if (null !== $this->sourceDatasetVersion) {
            $res['SourceDatasetVersion'] = $this->sourceDatasetVersion;
        }

        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->versionDescription) {
            $res['VersionDescription'] = $this->versionDescription;
        }

        if (null !== $this->versionLabels) {
            if (\is_array($this->versionLabels)) {
                $res['VersionLabels'] = [];
                $n1 = 0;
                foreach ($this->versionLabels as $item1) {
                    $res['VersionLabels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }

        if (isset($map['DataCount'])) {
            $model->dataCount = $map['DataCount'];
        }

        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }

        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }

        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ImportInfo'])) {
            $model->importInfo = $map['ImportInfo'];
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n1 = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1++] = Label::fromMap($item1);
                }
            }
        }

        if (isset($map['MountAccessReadWriteRoleIdList'])) {
            if (!empty($map['MountAccessReadWriteRoleIdList'])) {
                $model->mountAccessReadWriteRoleIdList = [];
                $n1 = 0;
                foreach ($map['MountAccessReadWriteRoleIdList'] as $item1) {
                    $model->mountAccessReadWriteRoleIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }

        if (isset($map['Property'])) {
            $model->property = $map['Property'];
        }

        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }

        if (isset($map['ProviderType'])) {
            $model->providerType = $map['ProviderType'];
        }

        if (isset($map['SourceDatasetId'])) {
            $model->sourceDatasetId = $map['SourceDatasetId'];
        }

        if (isset($map['SourceDatasetVersion'])) {
            $model->sourceDatasetVersion = $map['SourceDatasetVersion'];
        }

        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['VersionDescription'])) {
            $model->versionDescription = $map['VersionDescription'];
        }

        if (isset($map['VersionLabels'])) {
            if (!empty($map['VersionLabels'])) {
                $model->versionLabels = [];
                $n1 = 0;
                foreach ($map['VersionLabels'] as $item1) {
                    $model->versionLabels[$n1++] = Label::fromMap($item1);
                }
            }
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
