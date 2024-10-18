<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Tea\Model;

class GetDatasetResponseBody extends Model
{
    /**
     * @example PRIVATE
     *
     * @var string
     */
    public $accessibility;

    /**
     * @example NAS
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @example COMMON
     *
     * @var string
     */
    public $dataType;

    /**
     * @example d-rbvg5wz****c9ks92
     *
     * @var string
     */
    public $datasetId;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 2021-01-30T12:51:33.028Z
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2021-01-30T12:51:33.028Z
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var Label[]
     */
    public $labels;

    /**
     * @var DatasetVersion
     */
    public $latestVersion;

    /**
     * @example myName
     *
     * @var string
     */
    public $name;

    /**
     * @example {
     * }
     * @var string
     */
    public $options;

    /**
     * @example 1631044****3440
     *
     * @var string
     */
    public $ownerId;

    /**
     * @example DIRECTORY
     *
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
     * @example 5A14FA81-DD4E-******-6343FE44B941
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sourceDatasetId;

    /**
     * @var string
     */
    public $sourceDatasetVersion;

    /**
     * @example jdnhf***fnrimv
     *
     * @var string
     */
    public $sourceId;

    /**
     * @example USER
     *
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $tagTemplateType;

    /**
     * @example nas://09f****f2.cn-hangzhou/
     *
     * @var string
     */
    public $uri;

    /**
     * @example 2485765****023475
     *
     * @var string
     */
    public $userId;

    /**
     * @example 478**
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility'        => 'Accessibility',
        'dataSourceType'       => 'DataSourceType',
        'dataType'             => 'DataType',
        'datasetId'            => 'DatasetId',
        'description'          => 'Description',
        'gmtCreateTime'        => 'GmtCreateTime',
        'gmtModifiedTime'      => 'GmtModifiedTime',
        'labels'               => 'Labels',
        'latestVersion'        => 'LatestVersion',
        'name'                 => 'Name',
        'options'              => 'Options',
        'ownerId'              => 'OwnerId',
        'property'             => 'Property',
        'provider'             => 'Provider',
        'providerType'         => 'ProviderType',
        'requestId'            => 'RequestId',
        'sourceDatasetId'      => 'SourceDatasetId',
        'sourceDatasetVersion' => 'SourceDatasetVersion',
        'sourceId'             => 'SourceId',
        'sourceType'           => 'SourceType',
        'tagTemplateType'      => 'TagTemplateType',
        'uri'                  => 'Uri',
        'userId'               => 'UserId',
        'workspaceId'          => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->labels) {
            $res['Labels'] = [];
            if (null !== $this->labels && \is_array($this->labels)) {
                $n = 0;
                foreach ($this->labels as $item) {
                    $res['Labels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->latestVersion) {
            $res['LatestVersion'] = null !== $this->latestVersion ? $this->latestVersion->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return GetDatasetResponseBody
     */
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
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n             = 0;
                foreach ($map['Labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? Label::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LatestVersion'])) {
            $model->latestVersion = DatasetVersion::fromMap($map['LatestVersion']);
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
