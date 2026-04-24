<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListImagesResponseBody\pagingInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListImagesResponseBody\pagingInfo\imageList\buildConfig;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListImagesResponseBody\pagingInfo\imageList\supported;

class imageList extends Model
{
    /**
     * @var string
     */
    public $accessibility;

    /**
     * @var string
     */
    public $acrAssociatedVpcId;

    /**
     * @var string
     */
    public $acrEndpoint;

    /**
     * @var string
     */
    public $acrInstanceId;

    /**
     * @var buildConfig
     */
    public $buildConfig;

    /**
     * @var int
     */
    public $createdTime;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enableSyncMaxCompute;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $imageTag;

    /**
     * @var string
     */
    public $imageUri;

    /**
     * @var string
     */
    public $imageVpcUri;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var int
     */
    public $lastModifiedTime;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var bool
     */
    public $official;

    /**
     * @var string
     */
    public $providerImageId;

    /**
     * @var string
     */
    public $providerType;

    /**
     * @var string
     */
    public $publishStage;

    /**
     * @var string
     */
    public $repositoryName;

    /**
     * @var string
     */
    public $size;

    /**
     * @var string
     */
    public $status;

    /**
     * @var supported
     */
    public $supported;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'accessibility' => 'Accessibility',
        'acrAssociatedVpcId' => 'AcrAssociatedVpcId',
        'acrEndpoint' => 'AcrEndpoint',
        'acrInstanceId' => 'AcrInstanceId',
        'buildConfig' => 'BuildConfig',
        'createdTime' => 'CreatedTime',
        'creator' => 'Creator',
        'description' => 'Description',
        'enableSyncMaxCompute' => 'EnableSyncMaxCompute',
        'id' => 'Id',
        'imageTag' => 'ImageTag',
        'imageUri' => 'ImageUri',
        'imageVpcUri' => 'ImageVpcUri',
        'isDefault' => 'IsDefault',
        'lastModifiedTime' => 'LastModifiedTime',
        'modifier' => 'Modifier',
        'name' => 'Name',
        'namespace' => 'Namespace',
        'official' => 'Official',
        'providerImageId' => 'ProviderImageId',
        'providerType' => 'ProviderType',
        'publishStage' => 'PublishStage',
        'repositoryName' => 'RepositoryName',
        'size' => 'Size',
        'status' => 'Status',
        'supported' => 'Supported',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (null !== $this->buildConfig) {
            $this->buildConfig->validate();
        }
        if (null !== $this->supported) {
            $this->supported->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }

        if (null !== $this->acrAssociatedVpcId) {
            $res['AcrAssociatedVpcId'] = $this->acrAssociatedVpcId;
        }

        if (null !== $this->acrEndpoint) {
            $res['AcrEndpoint'] = $this->acrEndpoint;
        }

        if (null !== $this->acrInstanceId) {
            $res['AcrInstanceId'] = $this->acrInstanceId;
        }

        if (null !== $this->buildConfig) {
            $res['BuildConfig'] = null !== $this->buildConfig ? $this->buildConfig->toArray($noStream) : $this->buildConfig;
        }

        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enableSyncMaxCompute) {
            $res['EnableSyncMaxCompute'] = $this->enableSyncMaxCompute;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->imageTag) {
            $res['ImageTag'] = $this->imageTag;
        }

        if (null !== $this->imageUri) {
            $res['ImageUri'] = $this->imageUri;
        }

        if (null !== $this->imageVpcUri) {
            $res['ImageVpcUri'] = $this->imageVpcUri;
        }

        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }

        if (null !== $this->lastModifiedTime) {
            $res['LastModifiedTime'] = $this->lastModifiedTime;
        }

        if (null !== $this->modifier) {
            $res['Modifier'] = $this->modifier;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->official) {
            $res['Official'] = $this->official;
        }

        if (null !== $this->providerImageId) {
            $res['ProviderImageId'] = $this->providerImageId;
        }

        if (null !== $this->providerType) {
            $res['ProviderType'] = $this->providerType;
        }

        if (null !== $this->publishStage) {
            $res['PublishStage'] = $this->publishStage;
        }

        if (null !== $this->repositoryName) {
            $res['RepositoryName'] = $this->repositoryName;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->supported) {
            $res['Supported'] = null !== $this->supported ? $this->supported->toArray($noStream) : $this->supported;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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

        if (isset($map['AcrAssociatedVpcId'])) {
            $model->acrAssociatedVpcId = $map['AcrAssociatedVpcId'];
        }

        if (isset($map['AcrEndpoint'])) {
            $model->acrEndpoint = $map['AcrEndpoint'];
        }

        if (isset($map['AcrInstanceId'])) {
            $model->acrInstanceId = $map['AcrInstanceId'];
        }

        if (isset($map['BuildConfig'])) {
            $model->buildConfig = buildConfig::fromMap($map['BuildConfig']);
        }

        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnableSyncMaxCompute'])) {
            $model->enableSyncMaxCompute = $map['EnableSyncMaxCompute'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['ImageTag'])) {
            $model->imageTag = $map['ImageTag'];
        }

        if (isset($map['ImageUri'])) {
            $model->imageUri = $map['ImageUri'];
        }

        if (isset($map['ImageVpcUri'])) {
            $model->imageVpcUri = $map['ImageVpcUri'];
        }

        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }

        if (isset($map['LastModifiedTime'])) {
            $model->lastModifiedTime = $map['LastModifiedTime'];
        }

        if (isset($map['Modifier'])) {
            $model->modifier = $map['Modifier'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['Official'])) {
            $model->official = $map['Official'];
        }

        if (isset($map['ProviderImageId'])) {
            $model->providerImageId = $map['ProviderImageId'];
        }

        if (isset($map['ProviderType'])) {
            $model->providerType = $map['ProviderType'];
        }

        if (isset($map['PublishStage'])) {
            $model->publishStage = $map['PublishStage'];
        }

        if (isset($map['RepositoryName'])) {
            $model->repositoryName = $map['RepositoryName'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Supported'])) {
            $model->supported = supported::fromMap($map['Supported']);
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
