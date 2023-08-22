<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class CreateRepoBuildRuleRequest extends Model
{
    /**
     * @description Building arguments.
     *
     * @var string[]
     */
    public $buildArgs;

    /**
     * @description The path of the Dockerfile.
     *
     * @example /
     *
     * @var string
     */
    public $dockerfileLocation;

    /**
     * @description The name of the Dockerfile.
     *
     * @example Dockerfile
     *
     * @var string
     */
    public $dockerfileName;

    /**
     * @description The tag of the image.
     *
     * @example v0.9.5
     *
     * @var string
     */
    public $imageTag;

    /**
     * @description The ID of the instance.
     *
     * @example cri-xkx6vujuhay0****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Architecture for image building. Valid values:
     *
     *   `linux/amd64`
     *   `linux/arm64`
     *   `linux/386`
     *   `linux/arm/v7`
     *   `inux/arm/v6`
     *
     * Default value: `linux/amd64`
     * @var string[]
     */
    public $platforms;

    /**
     * @description The name of the push that triggers the building rule.
     *
     * @example master
     *
     * @var string
     */
    public $pushName;

    /**
     * @description The type of the push that triggers the building rule. Valid values:
     *
     *   `GIT_TAG`: tag push
     *   `GIT_BRANCH`: branch push
     *
     * @example GIT_BRANCH
     *
     * @var string
     */
    public $pushType;

    /**
     * @description The ID of the image repository.
     *
     * @example crr-8dz3aedjqlmk****
     *
     * @var string
     */
    public $repoId;
    protected $_name = [
        'buildArgs'          => 'BuildArgs',
        'dockerfileLocation' => 'DockerfileLocation',
        'dockerfileName'     => 'DockerfileName',
        'imageTag'           => 'ImageTag',
        'instanceId'         => 'InstanceId',
        'platforms'          => 'Platforms',
        'pushName'           => 'PushName',
        'pushType'           => 'PushType',
        'repoId'             => 'RepoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buildArgs) {
            $res['BuildArgs'] = $this->buildArgs;
        }
        if (null !== $this->dockerfileLocation) {
            $res['DockerfileLocation'] = $this->dockerfileLocation;
        }
        if (null !== $this->dockerfileName) {
            $res['DockerfileName'] = $this->dockerfileName;
        }
        if (null !== $this->imageTag) {
            $res['ImageTag'] = $this->imageTag;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->platforms) {
            $res['Platforms'] = $this->platforms;
        }
        if (null !== $this->pushName) {
            $res['PushName'] = $this->pushName;
        }
        if (null !== $this->pushType) {
            $res['PushType'] = $this->pushType;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRepoBuildRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuildArgs'])) {
            if (!empty($map['BuildArgs'])) {
                $model->buildArgs = $map['BuildArgs'];
            }
        }
        if (isset($map['DockerfileLocation'])) {
            $model->dockerfileLocation = $map['DockerfileLocation'];
        }
        if (isset($map['DockerfileName'])) {
            $model->dockerfileName = $map['DockerfileName'];
        }
        if (isset($map['ImageTag'])) {
            $model->imageTag = $map['ImageTag'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Platforms'])) {
            if (!empty($map['Platforms'])) {
                $model->platforms = $map['Platforms'];
            }
        }
        if (isset($map['PushName'])) {
            $model->pushName = $map['PushName'];
        }
        if (isset($map['PushType'])) {
            $model->pushType = $map['PushType'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }

        return $model;
    }
}
