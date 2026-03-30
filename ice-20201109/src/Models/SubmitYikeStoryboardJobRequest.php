<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class SubmitYikeStoryboardJobRequest extends Model
{
    /**
     * @var string
     */
    public $aspectRatio;

    /**
     * @var string
     */
    public $execMode;

    /**
     * @var string
     */
    public $fileURL;

    /**
     * @var string
     */
    public $modelParams;

    /**
     * @var string
     */
    public $narrationVoiceId;

    /**
     * @var string
     */
    public $resolution;

    /**
     * @var string
     */
    public $shotPromptMode;

    /**
     * @var string
     */
    public $shotSplitMode;

    /**
     * @var bool
     */
    public $skipFailureShot;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $styleId;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $videoModel;
    protected $_name = [
        'aspectRatio' => 'AspectRatio',
        'execMode' => 'ExecMode',
        'fileURL' => 'FileURL',
        'modelParams' => 'ModelParams',
        'narrationVoiceId' => 'NarrationVoiceId',
        'resolution' => 'Resolution',
        'shotPromptMode' => 'ShotPromptMode',
        'shotSplitMode' => 'ShotSplitMode',
        'skipFailureShot' => 'SkipFailureShot',
        'sourceType' => 'SourceType',
        'styleId' => 'StyleId',
        'title' => 'Title',
        'userData' => 'UserData',
        'videoModel' => 'VideoModel',
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

        if (null !== $this->execMode) {
            $res['ExecMode'] = $this->execMode;
        }

        if (null !== $this->fileURL) {
            $res['FileURL'] = $this->fileURL;
        }

        if (null !== $this->modelParams) {
            $res['ModelParams'] = $this->modelParams;
        }

        if (null !== $this->narrationVoiceId) {
            $res['NarrationVoiceId'] = $this->narrationVoiceId;
        }

        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
        }

        if (null !== $this->shotPromptMode) {
            $res['ShotPromptMode'] = $this->shotPromptMode;
        }

        if (null !== $this->shotSplitMode) {
            $res['ShotSplitMode'] = $this->shotSplitMode;
        }

        if (null !== $this->skipFailureShot) {
            $res['SkipFailureShot'] = $this->skipFailureShot;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->styleId) {
            $res['StyleId'] = $this->styleId;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        if (null !== $this->videoModel) {
            $res['VideoModel'] = $this->videoModel;
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

        if (isset($map['ExecMode'])) {
            $model->execMode = $map['ExecMode'];
        }

        if (isset($map['FileURL'])) {
            $model->fileURL = $map['FileURL'];
        }

        if (isset($map['ModelParams'])) {
            $model->modelParams = $map['ModelParams'];
        }

        if (isset($map['NarrationVoiceId'])) {
            $model->narrationVoiceId = $map['NarrationVoiceId'];
        }

        if (isset($map['Resolution'])) {
            $model->resolution = $map['Resolution'];
        }

        if (isset($map['ShotPromptMode'])) {
            $model->shotPromptMode = $map['ShotPromptMode'];
        }

        if (isset($map['ShotSplitMode'])) {
            $model->shotSplitMode = $map['ShotSplitMode'];
        }

        if (isset($map['SkipFailureShot'])) {
            $model->skipFailureShot = $map['SkipFailureShot'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['StyleId'])) {
            $model->styleId = $map['StyleId'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        if (isset($map['VideoModel'])) {
            $model->videoModel = $map['VideoModel'];
        }

        return $model;
    }
}
