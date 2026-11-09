<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260707\Models;

use AlibabaCloud\Dara\Model;

class SubmitVideoCreativeGenerationJobRequest extends Model
{
    /**
     * @var string
     */
    public $aspectRatio;

    /**
     * @var string
     */
    public $avatarData;

    /**
     * @var string
     */
    public $jobParams;

    /**
     * @var string
     */
    public $outputLanguages;

    /**
     * @var string
     */
    public $resolution;

    /**
     * @var string
     */
    public $sceneType;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $userMaterials;

    /**
     * @var bool
     */
    public $withSubtitles;
    protected $_name = [
        'aspectRatio' => 'AspectRatio',
        'avatarData' => 'AvatarData',
        'jobParams' => 'JobParams',
        'outputLanguages' => 'OutputLanguages',
        'resolution' => 'Resolution',
        'sceneType' => 'SceneType',
        'userData' => 'UserData',
        'userMaterials' => 'UserMaterials',
        'withSubtitles' => 'WithSubtitles',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aspectRatio) {
            $res['AspectRatio'] = $this->aspectRatio;
        }

        if (null !== $this->avatarData) {
            $res['AvatarData'] = $this->avatarData;
        }

        if (null !== $this->jobParams) {
            $res['JobParams'] = $this->jobParams;
        }

        if (null !== $this->outputLanguages) {
            $res['OutputLanguages'] = $this->outputLanguages;
        }

        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
        }

        if (null !== $this->sceneType) {
            $res['SceneType'] = $this->sceneType;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        if (null !== $this->userMaterials) {
            $res['UserMaterials'] = $this->userMaterials;
        }

        if (null !== $this->withSubtitles) {
            $res['WithSubtitles'] = $this->withSubtitles;
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
        if (isset($map['AspectRatio'])) {
            $model->aspectRatio = $map['AspectRatio'];
        }

        if (isset($map['AvatarData'])) {
            $model->avatarData = $map['AvatarData'];
        }

        if (isset($map['JobParams'])) {
            $model->jobParams = $map['JobParams'];
        }

        if (isset($map['OutputLanguages'])) {
            $model->outputLanguages = $map['OutputLanguages'];
        }

        if (isset($map['Resolution'])) {
            $model->resolution = $map['Resolution'];
        }

        if (isset($map['SceneType'])) {
            $model->sceneType = $map['SceneType'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        if (isset($map['UserMaterials'])) {
            $model->userMaterials = $map['UserMaterials'];
        }

        if (isset($map['WithSubtitles'])) {
            $model->withSubtitles = $map['WithSubtitles'];
        }

        return $model;
    }
}
