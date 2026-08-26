<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateImageRequest\buildConfig;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateImageRequest\supported;

class UpdateImageRequest extends Model
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
    public $acrInstanceId;

    /**
     * @var buildConfig
     */
    public $buildConfig;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $imageUri;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $providerImageId;

    /**
     * @var string
     */
    public $repositoryName;

    /**
     * @var supported
     */
    public $supported;
    protected $_name = [
        'accessibility' => 'Accessibility',
        'acrAssociatedVpcId' => 'AcrAssociatedVpcId',
        'acrInstanceId' => 'AcrInstanceId',
        'buildConfig' => 'BuildConfig',
        'description' => 'Description',
        'id' => 'Id',
        'imageUri' => 'ImageUri',
        'name' => 'Name',
        'namespace' => 'Namespace',
        'providerImageId' => 'ProviderImageId',
        'repositoryName' => 'RepositoryName',
        'supported' => 'Supported',
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

        if (null !== $this->acrInstanceId) {
            $res['AcrInstanceId'] = $this->acrInstanceId;
        }

        if (null !== $this->buildConfig) {
            $res['BuildConfig'] = null !== $this->buildConfig ? $this->buildConfig->toArray($noStream) : $this->buildConfig;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->imageUri) {
            $res['ImageUri'] = $this->imageUri;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->providerImageId) {
            $res['ProviderImageId'] = $this->providerImageId;
        }

        if (null !== $this->repositoryName) {
            $res['RepositoryName'] = $this->repositoryName;
        }

        if (null !== $this->supported) {
            $res['Supported'] = null !== $this->supported ? $this->supported->toArray($noStream) : $this->supported;
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

        if (isset($map['AcrInstanceId'])) {
            $model->acrInstanceId = $map['AcrInstanceId'];
        }

        if (isset($map['BuildConfig'])) {
            $model->buildConfig = buildConfig::fromMap($map['BuildConfig']);
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['ImageUri'])) {
            $model->imageUri = $map['ImageUri'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['ProviderImageId'])) {
            $model->providerImageId = $map['ProviderImageId'];
        }

        if (isset($map['RepositoryName'])) {
            $model->repositoryName = $map['RepositoryName'];
        }

        if (isset($map['Supported'])) {
            $model->supported = supported::fromMap($map['Supported']);
        }

        return $model;
    }
}
