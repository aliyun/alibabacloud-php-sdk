<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoBuildRuleResponseBody;

use AlibabaCloud\Tea\Model;

class buildRules extends Model
{
    /**
     * @var string
     */
    public $dockerfileLocation;

    /**
     * @var string
     */
    public $buildRuleId;

    /**
     * @var string
     */
    public $pushType;

    /**
     * @var string
     */
    public $pushName;

    /**
     * @var string
     */
    public $imageTag;

    /**
     * @var string
     */
    public $dockerfileName;

    /**
     * @var string[]
     */
    public $platforms;

    /**
     * @var string[]
     */
    public $buildArgs;
    protected $_name = [
        'dockerfileLocation' => 'DockerfileLocation',
        'buildRuleId'        => 'BuildRuleId',
        'pushType'           => 'PushType',
        'pushName'           => 'PushName',
        'imageTag'           => 'ImageTag',
        'dockerfileName'     => 'DockerfileName',
        'platforms'          => 'Platforms',
        'buildArgs'          => 'BuildArgs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dockerfileLocation) {
            $res['DockerfileLocation'] = $this->dockerfileLocation;
        }
        if (null !== $this->buildRuleId) {
            $res['BuildRuleId'] = $this->buildRuleId;
        }
        if (null !== $this->pushType) {
            $res['PushType'] = $this->pushType;
        }
        if (null !== $this->pushName) {
            $res['PushName'] = $this->pushName;
        }
        if (null !== $this->imageTag) {
            $res['ImageTag'] = $this->imageTag;
        }
        if (null !== $this->dockerfileName) {
            $res['DockerfileName'] = $this->dockerfileName;
        }
        if (null !== $this->platforms) {
            $res['Platforms'] = $this->platforms;
        }
        if (null !== $this->buildArgs) {
            $res['BuildArgs'] = $this->buildArgs;
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
        if (isset($map['DockerfileLocation'])) {
            $model->dockerfileLocation = $map['DockerfileLocation'];
        }
        if (isset($map['BuildRuleId'])) {
            $model->buildRuleId = $map['BuildRuleId'];
        }
        if (isset($map['PushType'])) {
            $model->pushType = $map['PushType'];
        }
        if (isset($map['PushName'])) {
            $model->pushName = $map['PushName'];
        }
        if (isset($map['ImageTag'])) {
            $model->imageTag = $map['ImageTag'];
        }
        if (isset($map['DockerfileName'])) {
            $model->dockerfileName = $map['DockerfileName'];
        }
        if (isset($map['Platforms'])) {
            if (!empty($map['Platforms'])) {
                $model->platforms = $map['Platforms'];
            }
        }
        if (isset($map['BuildArgs'])) {
            if (!empty($map['BuildArgs'])) {
                $model->buildArgs = $map['BuildArgs'];
            }
        }

        return $model;
    }
}
