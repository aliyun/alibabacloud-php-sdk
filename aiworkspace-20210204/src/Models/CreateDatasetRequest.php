<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Tea\Model;

class CreateDatasetRequest extends Model
{
    /**
     * @example PRIVATE
     *
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
     * @description This parameter is required.
     *
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
     * @var string
     */
    public $description;

    /**
     * @var Label[]
     */
    public $labels;

    /**
     * @description This parameter is required.
     *
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
     * @description This parameter is required.
     *
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
     * @example Ecs
     *
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
     * @description This parameter is required.
     *
     * @example nas://09f****f2.cn-hangzhou/
     *
     * @var string
     */
    public $uri;

    /**
     * @example 29884000000186970
     *
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
     * @example 478**
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility'        => 'Accessibility',
        'dataCount'            => 'DataCount',
        'dataSize'             => 'DataSize',
        'dataSourceType'       => 'DataSourceType',
        'dataType'             => 'DataType',
        'description'          => 'Description',
        'labels'               => 'Labels',
        'name'                 => 'Name',
        'options'              => 'Options',
        'property'             => 'Property',
        'provider'             => 'Provider',
        'providerType'         => 'ProviderType',
        'sourceDatasetId'      => 'SourceDatasetId',
        'sourceDatasetVersion' => 'SourceDatasetVersion',
        'sourceId'             => 'SourceId',
        'sourceType'           => 'SourceType',
        'uri'                  => 'Uri',
        'userId'               => 'UserId',
        'versionDescription'   => 'VersionDescription',
        'versionLabels'        => 'VersionLabels',
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
        if (null !== $this->labels) {
            $res['Labels'] = [];
            if (null !== $this->labels && \is_array($this->labels)) {
                $n = 0;
                foreach ($this->labels as $item) {
                    $res['Labels'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['VersionLabels'] = [];
            if (null !== $this->versionLabels && \is_array($this->versionLabels)) {
                $n = 0;
                foreach ($this->versionLabels as $item) {
                    $res['VersionLabels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDatasetRequest
     */
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
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n             = 0;
                foreach ($map['Labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? Label::fromMap($item) : $item;
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
                $n                    = 0;
                foreach ($map['VersionLabels'] as $item) {
                    $model->versionLabels[$n++] = null !== $item ? Label::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
