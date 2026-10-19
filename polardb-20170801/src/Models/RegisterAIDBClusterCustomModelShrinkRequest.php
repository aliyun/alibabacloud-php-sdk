<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class RegisterAIDBClusterCustomModelShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $containerEnvShrink;

    /**
     * @var string
     */
    public $customOssBucketName;

    /**
     * @var string
     */
    public $customOssBucketPath;

    /**
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @var string
     */
    public $directCommand;

    /**
     * @var string
     */
    public $displayModelName;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var string
     */
    public $inferenceEngine;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $modelParamsShrink;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $registryPassword;

    /**
     * @var string
     */
    public $registryUsername;
    protected $_name = [
        'containerEnvShrink' => 'ContainerEnv',
        'customOssBucketName' => 'CustomOssBucketName',
        'customOssBucketPath' => 'CustomOssBucketPath',
        'DBInstanceClass' => 'DBInstanceClass',
        'directCommand' => 'DirectCommand',
        'displayModelName' => 'DisplayModelName',
        'imageName' => 'ImageName',
        'inferenceEngine' => 'InferenceEngine',
        'modelName' => 'ModelName',
        'modelParamsShrink' => 'ModelParams',
        'regionId' => 'RegionId',
        'registryPassword' => 'RegistryPassword',
        'registryUsername' => 'RegistryUsername',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->containerEnvShrink) {
            $res['ContainerEnv'] = $this->containerEnvShrink;
        }

        if (null !== $this->customOssBucketName) {
            $res['CustomOssBucketName'] = $this->customOssBucketName;
        }

        if (null !== $this->customOssBucketPath) {
            $res['CustomOssBucketPath'] = $this->customOssBucketPath;
        }

        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }

        if (null !== $this->directCommand) {
            $res['DirectCommand'] = $this->directCommand;
        }

        if (null !== $this->displayModelName) {
            $res['DisplayModelName'] = $this->displayModelName;
        }

        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }

        if (null !== $this->inferenceEngine) {
            $res['InferenceEngine'] = $this->inferenceEngine;
        }

        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }

        if (null !== $this->modelParamsShrink) {
            $res['ModelParams'] = $this->modelParamsShrink;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->registryPassword) {
            $res['RegistryPassword'] = $this->registryPassword;
        }

        if (null !== $this->registryUsername) {
            $res['RegistryUsername'] = $this->registryUsername;
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
        if (isset($map['ContainerEnv'])) {
            $model->containerEnvShrink = $map['ContainerEnv'];
        }

        if (isset($map['CustomOssBucketName'])) {
            $model->customOssBucketName = $map['CustomOssBucketName'];
        }

        if (isset($map['CustomOssBucketPath'])) {
            $model->customOssBucketPath = $map['CustomOssBucketPath'];
        }

        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }

        if (isset($map['DirectCommand'])) {
            $model->directCommand = $map['DirectCommand'];
        }

        if (isset($map['DisplayModelName'])) {
            $model->displayModelName = $map['DisplayModelName'];
        }

        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }

        if (isset($map['InferenceEngine'])) {
            $model->inferenceEngine = $map['InferenceEngine'];
        }

        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }

        if (isset($map['ModelParams'])) {
            $model->modelParamsShrink = $map['ModelParams'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RegistryPassword'])) {
            $model->registryPassword = $map['RegistryPassword'];
        }

        if (isset($map['RegistryUsername'])) {
            $model->registryUsername = $map['RegistryUsername'];
        }

        return $model;
    }
}
