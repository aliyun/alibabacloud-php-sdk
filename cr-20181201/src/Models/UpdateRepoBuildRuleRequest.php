<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class UpdateRepoBuildRuleRequest extends Model
{
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
    public $regionId;

    /**
     * @var string
     */
    public $repoId;
    protected $_name = [
        'buildRuleId'        => 'BuildRuleId',
        'dockerfileLocation' => 'DockerfileLocation',
        'dockerfileName'     => 'DockerfileName',
        'imageTag'           => 'ImageTag',
        'instanceId'         => 'InstanceId',
        'platforms'          => 'Platforms',
        'pushName'           => 'PushName',
        'pushType'           => 'PushType',
        'regionId'           => 'RegionId',
        'repoId'             => 'RepoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
            $res['Platforms'] = $this->platforms;
        }
        if (null !== $this->pushName) {
            $res['PushName'] = $this->pushName;
        }
        if (null !== $this->pushType) {
            $res['PushType'] = $this->pushType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRepoBuildRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
                $model->platforms = $map['Platforms'];
            }
        }
        if (isset($map['PushName'])) {
            $model->pushName = $map['PushName'];
        }
        if (isset($map['PushType'])) {
            $model->pushType = $map['PushType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }

        return $model;
    }
}
