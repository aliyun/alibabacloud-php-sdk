<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Dara\Model;

class UpdateRepoBuildRuleRequest extends Model
{
    /**
     * @var string[]
     */
    public $buildArgs;

    /**
     * @var string
     */
    public $buildRuleId;

    /**
     * @var string
     */
    public $dockerfileLocation;

    /**
     * @var string
     */
    public $dockerfileName;

    /**
     * @var string
     */
    public $imageTag;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $platforms;

    /**
     * @var string
     */
    public $pushName;

    /**
     * @var string
     */
    public $pushType;

    /**
     * @var string
     */
    public $repoId;
    protected $_name = [
        'buildArgs' => 'BuildArgs',
        'buildRuleId' => 'BuildRuleId',
        'dockerfileLocation' => 'DockerfileLocation',
        'dockerfileName' => 'DockerfileName',
        'imageTag' => 'ImageTag',
        'instanceId' => 'InstanceId',
        'platforms' => 'Platforms',
        'pushName' => 'PushName',
        'pushType' => 'PushType',
        'repoId' => 'RepoId',
    ];

    public function validate()
    {
        if (\is_array($this->buildArgs)) {
            Model::validateArray($this->buildArgs);
        }
        if (\is_array($this->platforms)) {
            Model::validateArray($this->platforms);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buildArgs) {
            if (\is_array($this->buildArgs)) {
                $res['BuildArgs'] = [];
                $n1 = 0;
                foreach ($this->buildArgs as $item1) {
                    $res['BuildArgs'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->buildRuleId) {
            $res['BuildRuleId'] = $this->buildRuleId;
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
            if (\is_array($this->platforms)) {
                $res['Platforms'] = [];
                $n1 = 0;
                foreach ($this->platforms as $item1) {
                    $res['Platforms'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuildArgs'])) {
            if (!empty($map['BuildArgs'])) {
                $model->buildArgs = [];
                $n1 = 0;
                foreach ($map['BuildArgs'] as $item1) {
                    $model->buildArgs[$n1++] = $item1;
                }
            }
        }

        if (isset($map['BuildRuleId'])) {
            $model->buildRuleId = $map['BuildRuleId'];
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
                $model->platforms = [];
                $n1 = 0;
                foreach ($map['Platforms'] as $item1) {
                    $model->platforms[$n1++] = $item1;
                }
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
