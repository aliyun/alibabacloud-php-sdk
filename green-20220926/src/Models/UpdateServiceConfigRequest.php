<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;

class UpdateServiceConfigRequest extends Model
{
    /**
     * @var string
     */
    public $fileConfig;

    /**
     * @var string
     */
    public $keywordFilterLibs;

    /**
     * @var string
     */
    public $keywordHitLibs;

    /**
     * @var string
     */
    public $manualMachineConfig;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $sceneConfig;

    /**
     * @var string
     */
    public $serviceCode;

    /**
     * @var string
     */
    public $serviceConfig;

    /**
     * @var string
     */
    public $videoConfig;
    protected $_name = [
        'fileConfig' => 'FileConfig',
        'keywordFilterLibs' => 'KeywordFilterLibs',
        'keywordHitLibs' => 'KeywordHitLibs',
        'manualMachineConfig' => 'ManualMachineConfig',
        'regionId' => 'RegionId',
        'resourceType' => 'ResourceType',
        'scene' => 'Scene',
        'sceneConfig' => 'SceneConfig',
        'serviceCode' => 'ServiceCode',
        'serviceConfig' => 'ServiceConfig',
        'videoConfig' => 'VideoConfig',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->manualMachineConfig) {
            $res['ManualMachineConfig'] = $this->manualMachineConfig;
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

        if (null !== $this->serviceConfig) {
            $res['ServiceConfig'] = $this->serviceConfig;
        }

        if (null !== $this->videoConfig) {
            $res['VideoConfig'] = $this->videoConfig;
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
        if (isset($map['FileConfig'])) {
            $model->fileConfig = $map['FileConfig'];
        }

        if (isset($map['KeywordFilterLibs'])) {
            $model->keywordFilterLibs = $map['KeywordFilterLibs'];
        }

        if (isset($map['KeywordHitLibs'])) {
            $model->keywordHitLibs = $map['KeywordHitLibs'];
        }

        if (isset($map['ManualMachineConfig'])) {
            $model->manualMachineConfig = $map['ManualMachineConfig'];
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

        if (isset($map['ServiceConfig'])) {
            $model->serviceConfig = $map['ServiceConfig'];
        }

        if (isset($map['VideoConfig'])) {
            $model->videoConfig = $map['VideoConfig'];
        }

        return $model;
    }
}
