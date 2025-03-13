<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class CreateTrainTaskRequest extends Model
{
    /**
     * @example 13168123111
     *
     * @var string
     */
    public $aliyunMainId;

    /**
     * @example BASIC_MODEL
     *
     * @var string
     */
    public $resSpecType;

    /**
     * @example CopyAnchorAndVoice
     *
     * @var string
     */
    public $taskType;

    /**
     * @example realTimeInteractivity
     *
     * @var string
     */
    public $useScene;

    /**
     * @example M
     *
     * @var string
     */
    public $voiceGender;

    /**
     * @example zh
     *
     * @var string
     */
    public $voiceLanguage;

    /**
     * @var string
     */
    public $voiceName;

    /**
     * @example https://yic-pre/video/test-0513.mp3
     *
     * @var string
     */
    public $voicePath;
    protected $_name = [
        'aliyunMainId'  => 'aliyunMainId',
        'resSpecType'   => 'resSpecType',
        'taskType'      => 'taskType',
        'useScene'      => 'useScene',
        'voiceGender'   => 'voiceGender',
        'voiceLanguage' => 'voiceLanguage',
        'voiceName'     => 'voiceName',
        'voicePath'     => 'voicePath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunMainId) {
            $res['aliyunMainId'] = $this->aliyunMainId;
        }
        if (null !== $this->resSpecType) {
            $res['resSpecType'] = $this->resSpecType;
        }
        if (null !== $this->taskType) {
            $res['taskType'] = $this->taskType;
        }
        if (null !== $this->useScene) {
            $res['useScene'] = $this->useScene;
        }
        if (null !== $this->voiceGender) {
            $res['voiceGender'] = $this->voiceGender;
        }
        if (null !== $this->voiceLanguage) {
            $res['voiceLanguage'] = $this->voiceLanguage;
        }
        if (null !== $this->voiceName) {
            $res['voiceName'] = $this->voiceName;
        }
        if (null !== $this->voicePath) {
            $res['voicePath'] = $this->voicePath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTrainTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aliyunMainId'])) {
            $model->aliyunMainId = $map['aliyunMainId'];
        }
        if (isset($map['resSpecType'])) {
            $model->resSpecType = $map['resSpecType'];
        }
        if (isset($map['taskType'])) {
            $model->taskType = $map['taskType'];
        }
        if (isset($map['useScene'])) {
            $model->useScene = $map['useScene'];
        }
        if (isset($map['voiceGender'])) {
            $model->voiceGender = $map['voiceGender'];
        }
        if (isset($map['voiceLanguage'])) {
            $model->voiceLanguage = $map['voiceLanguage'];
        }
        if (isset($map['voiceName'])) {
            $model->voiceName = $map['voiceName'];
        }
        if (isset($map['voicePath'])) {
            $model->voicePath = $map['voicePath'];
        }

        return $model;
    }
}
