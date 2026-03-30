<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models;

use AlibabaCloud\Dara\Model;

class PreviewVoiceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $nlsAccessType;

    /**
     * @var string
     */
    public $nlsEngine;

    /**
     * @var string
     */
    public $paramsShrink;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $voice;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'model' => 'Model',
        'nlsAccessType' => 'NlsAccessType',
        'nlsEngine' => 'NlsEngine',
        'paramsShrink' => 'Params',
        'text' => 'Text',
        'voice' => 'Voice',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->nlsAccessType) {
            $res['NlsAccessType'] = $this->nlsAccessType;
        }

        if (null !== $this->nlsEngine) {
            $res['NlsEngine'] = $this->nlsEngine;
        }

        if (null !== $this->paramsShrink) {
            $res['Params'] = $this->paramsShrink;
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        if (null !== $this->voice) {
            $res['Voice'] = $this->voice;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['NlsAccessType'])) {
            $model->nlsAccessType = $map['NlsAccessType'];
        }

        if (isset($map['NlsEngine'])) {
            $model->nlsEngine = $map['NlsEngine'];
        }

        if (isset($map['Params'])) {
            $model->paramsShrink = $map['Params'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        if (isset($map['Voice'])) {
            $model->voice = $map['Voice'];
        }

        return $model;
    }
}
