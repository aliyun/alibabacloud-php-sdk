<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Tea\Model;

class UpdateServiceConfigRequest extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $fileConfig;

    /**
     * @example []
     *
     * @var string
     */
    public $keywordFilterLibs;

    /**
     * @example []
     *
     * @var string
     */
    public $keywordHitLibs;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @example image
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example pornographic
     *
     * @var string
     */
    public $scene;

    /**
     * @example {}
     *
     * @var string
     */
    public $sceneConfig;

    /**
     * @example baselineCheck
     *
     * @var string
     */
    public $serviceCode;

    /**
     * @example {}
     *
     * @var string
     */
    public $videoConfig;
    protected $_name = [
        'fileConfig' => 'FileConfig',
        'keywordFilterLibs' => 'KeywordFilterLibs',
        'keywordHitLibs' => 'KeywordHitLibs',
        'regionId' => 'RegionId',
        'resourceType' => 'ResourceType',
        'scene' => 'Scene',
        'sceneConfig' => 'SceneConfig',
        'serviceCode' => 'ServiceCode',
        'videoConfig' => 'VideoConfig',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileConfig) {
            $res['FileConfig'] = $this->fileConfig;
        }
        if (null !== $this->keywordFilterLibs) {
            $res['KeywordFilterLibs'] = $this->keywordFilterLibs;
        }
        if (null !== $this->keywordHitLibs) {
            $res['KeywordHitLibs'] = $this->keywordHitLibs;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->sceneConfig) {
            $res['SceneConfig'] = $this->sceneConfig;
        }
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }
        if (null !== $this->videoConfig) {
            $res['VideoConfig'] = $this->videoConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateServiceConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileConfig'])) {
            $model->fileConfig = $map['FileConfig'];
        }
        if (isset($map['KeywordFilterLibs'])) {
            $model->keywordFilterLibs = $map['KeywordFilterLibs'];
        }
        if (isset($map['KeywordHitLibs'])) {
            $model->keywordHitLibs = $map['KeywordHitLibs'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['SceneConfig'])) {
            $model->sceneConfig = $map['SceneConfig'];
        }
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }
        if (isset($map['VideoConfig'])) {
            $model->videoConfig = $map['VideoConfig'];
        }

        return $model;
    }
}
