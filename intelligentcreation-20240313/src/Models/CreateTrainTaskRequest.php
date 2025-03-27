<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class CreateTrainTaskRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunMainId;

    /**
     * @var string
     */
    public $resSpecType;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $useScene;

    /**
     * @var string
     */
    public $voiceGender;

    /**
     * @var string
     */
    public $voiceLanguage;

    /**
     * @var string
     */
    public $voiceName;

    /**
     * @var string
     */
    public $voicePath;
    protected $_name = [
        'aliyunMainId' => 'aliyunMainId',
        'resSpecType' => 'resSpecType',
        'taskType' => 'taskType',
        'useScene' => 'useScene',
        'voiceGender' => 'voiceGender',
        'voiceLanguage' => 'voiceLanguage',
        'voiceName' => 'voiceName',
        'voicePath' => 'voicePath',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
