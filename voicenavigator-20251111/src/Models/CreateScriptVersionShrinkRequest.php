<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models;

use AlibabaCloud\Dara\Model;

class CreateScriptVersionShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $interactionConfigShrink;

    /**
     * @var string
     */
    public $labelConfigShrink;

    /**
     * @var string
     */
    public $scriptId;

    /**
     * @var string
     */
    public $scriptProfileShrink;

    /**
     * @var string
     */
    public $sourceVersionId;

    /**
     * @var string
     */
    public $synthesizerConfigShrink;

    /**
     * @var string
     */
    public $transcriberConfigShrink;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'interactionConfigShrink' => 'InteractionConfig',
        'labelConfigShrink' => 'LabelConfig',
        'scriptId' => 'ScriptId',
        'scriptProfileShrink' => 'ScriptProfile',
        'sourceVersionId' => 'SourceVersionId',
        'synthesizerConfigShrink' => 'SynthesizerConfig',
        'transcriberConfigShrink' => 'TranscriberConfig',
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

        if (null !== $this->interactionConfigShrink) {
            $res['InteractionConfig'] = $this->interactionConfigShrink;
        }

        if (null !== $this->labelConfigShrink) {
            $res['LabelConfig'] = $this->labelConfigShrink;
        }

        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }

        if (null !== $this->scriptProfileShrink) {
            $res['ScriptProfile'] = $this->scriptProfileShrink;
        }

        if (null !== $this->sourceVersionId) {
            $res['SourceVersionId'] = $this->sourceVersionId;
        }

        if (null !== $this->synthesizerConfigShrink) {
            $res['SynthesizerConfig'] = $this->synthesizerConfigShrink;
        }

        if (null !== $this->transcriberConfigShrink) {
            $res['TranscriberConfig'] = $this->transcriberConfigShrink;
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

        if (isset($map['InteractionConfig'])) {
            $model->interactionConfigShrink = $map['InteractionConfig'];
        }

        if (isset($map['LabelConfig'])) {
            $model->labelConfigShrink = $map['LabelConfig'];
        }

        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }

        if (isset($map['ScriptProfile'])) {
            $model->scriptProfileShrink = $map['ScriptProfile'];
        }

        if (isset($map['SourceVersionId'])) {
            $model->sourceVersionId = $map['SourceVersionId'];
        }

        if (isset($map['SynthesizerConfig'])) {
            $model->synthesizerConfigShrink = $map['SynthesizerConfig'];
        }

        if (isset($map['TranscriberConfig'])) {
            $model->transcriberConfigShrink = $map['TranscriberConfig'];
        }

        return $model;
    }
}
