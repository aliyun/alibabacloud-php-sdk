<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetDatasetResponseBody\sharingConfig;

class GetDatasetResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessibility;

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
    public $datasetId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $edition;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var string
     */
    public $importInfo;

    /**
     * @var bool
     */
    public $isShared;

    /**
     * @var Label[]
     */
    public $labels;

    /**
     * @var DatasetVersion
     */
    public $latestVersion;

    /**
     * @var string
     */
    public $mountAccess;

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
    public $ownerId;

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
    public $requestId;

    /**
     * @var DatasetShareRelationship
     */
    public $sharedFrom;

    /**
     * @var sharingConfig
     */
    public $sharingConfig;

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
    public $tagTemplateType;

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
    public $workspaceId;
    protected $_name = [
        'accessibility' => 'Accessibility',
        'dataSourceType' => 'DataSourceType',
        'dataType' => 'DataType',
        'datasetId' => 'DatasetId',
        'description' => 'Description',
        'edition' => 'Edition',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'importInfo' => 'ImportInfo',
        'isShared' => 'IsShared',
        'labels' => 'Labels',
        'latestVersion' => 'LatestVersion',
        'mountAccess' => 'MountAccess',
        'mountAccessReadWriteRoleIdList' => 'MountAccessReadWriteRoleIdList',
        'name' => 'Name',
        'options' => 'Options',
        'ownerId' => 'OwnerId',
        'property' => 'Property',
        'provider' => 'Provider',
        'providerType' => 'ProviderType',
        'requestId' => 'RequestId',
        'sharedFrom' => 'SharedFrom',
        'sharingConfig' => 'SharingConfig',
        'sourceDatasetId' => 'SourceDatasetId',
        'sourceDatasetVersion' => 'SourceDatasetVersion',
        'sourceId' => 'SourceId',
        'sourceType' => 'SourceType',
        'tagTemplateType' => 'TagTemplateType',
        'uri' => 'Uri',
        'userId' => 'UserId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (null !== $this->latestVersion) {
            $this->latestVersion->validate();
        }
        if (\is_array($this->mountAccessReadWriteRoleIdList)) {
            Model::validateArray($this->mountAccessReadWriteRoleIdList);
        }
        if (null !== $this->sharedFrom) {
            $this->sharedFrom->validate();
        }
        if (null !== $this->sharingConfig) {
            $this->sharingConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }

        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }

        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }

        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->edition) {
            $res['Edition'] = $this->edition;
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }

        if (null !== $this->importInfo) {
            $res['ImportInfo'] = $this->importInfo;
        }

        if (null !== $this->isShared) {
            $res['IsShared'] = $this->isShared;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1 = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->latestVersion) {
            $res['LatestVersion'] = null !== $this->latestVersion ? $this->latestVersion->toArray($noStream) : $this->latestVersion;
        }

        if (null !== $this->mountAccess) {
            $res['MountAccess'] = $this->mountAccess;
        }

        if (null !== $this->mountAccessReadWriteRoleIdList) {
            if (\is_array($this->mountAccessReadWriteRoleIdList)) {
                $res['MountAccessReadWriteRoleIdList'] = [];
                $n1 = 0;
                foreach ($this->mountAccessReadWriteRoleIdList as $item1) {
                    $res['MountAccessReadWriteRoleIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sharedFrom) {
            $res['SharedFrom'] = null !== $this->sharedFrom ? $this->sharedFrom->toArray($noStream) : $this->sharedFrom;
        }

        if (null !== $this->sharingConfig) {
            $res['SharingConfig'] = null !== $this->sharingConfig ? $this->sharingConfig->toArray($noStream) : $this->sharingConfig;
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

        if (null !== $this->tagTemplateType) {
            $res['TagTemplateType'] = $this->tagTemplateType;
        }

        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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

        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }

        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }

        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Edition'])) {
            $model->edition = $map['Edition'];
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }

        if (isset($map['ImportInfo'])) {
            $model->importInfo = $map['ImportInfo'];
        }

        if (isset($map['IsShared'])) {
            $model->isShared = $map['IsShared'];
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n1 = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1] = Label::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['LatestVersion'])) {
            $model->latestVersion = DatasetVersion::fromMap($map['LatestVersion']);
        }

        if (isset($map['MountAccess'])) {
            $model->mountAccess = $map['MountAccess'];
        }

        if (isset($map['MountAccessReadWriteRoleIdList'])) {
            if (!empty($map['MountAccessReadWriteRoleIdList'])) {
                $model->mountAccessReadWriteRoleIdList = [];
                $n1 = 0;
                foreach ($map['MountAccessReadWriteRoleIdList'] as $item1) {
                    $model->mountAccessReadWriteRoleIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SharedFrom'])) {
            $model->sharedFrom = DatasetShareRelationship::fromMap($map['SharedFrom']);
        }

        if (isset($map['SharingConfig'])) {
            $model->sharingConfig = sharingConfig::fromMap($map['SharingConfig']);
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

        if (isset($map['TagTemplateType'])) {
            $model->tagTemplateType = $map['TagTemplateType'];
        }

        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
