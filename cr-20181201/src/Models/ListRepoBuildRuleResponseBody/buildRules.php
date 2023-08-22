<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoBuildRuleResponseBody;

use AlibabaCloud\Tea\Model;

class buildRules extends Model
{
    /**
     * @var string[]
     */
    public $buildArgs;

    /**
     * @description The ID of the image building rule.
     *
     * @example crbr-khys0nd3asbe****
     *
     * @var string
     */
    public $buildRuleId;

    /**
     * @description The directory of the Dockerfile.
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
     * @example v0.1
     *
     * @var string
     */
    public $imageTag;

    /**
     * @var string[]
     */
    public $platforms;

    /**
     * @description The name of the push that triggers the building rule.
     *
     * @example v0.1
     *
     * @var string
     */
    public $pushName;

    /**
     * @description The type of the push that triggers the image building rule. Valid values:
     *
     *   GIT_BRANCH: branch push
     *   GIT_TAG: tag push
     *
     * @example GIT_BRANCH
     *
     * @var string
     */
    public $pushType;
    protected $_name = [
        'buildArgs'          => 'BuildArgs',
        'buildRuleId'        => 'BuildRuleId',
        'dockerfileLocation' => 'DockerfileLocation',
        'dockerfileName'     => 'DockerfileName',
        'imageTag'           => 'ImageTag',
        'platforms'          => 'Platforms',
        'pushName'           => 'PushName',
        'pushType'           => 'PushType',
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
        if (null !== $this->platforms) {
            $res['Platforms'] = $this->platforms;
        }
        if (null !== $this->pushName) {
            $res['PushName'] = $this->pushName;
        }
        if (null !== $this->pushType) {
            $res['PushType'] = $this->pushType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return buildRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuildArgs'])) {
            if (!empty($map['BuildArgs'])) {
                $model->buildArgs = $map['BuildArgs'];
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

        return $model;
    }
}
