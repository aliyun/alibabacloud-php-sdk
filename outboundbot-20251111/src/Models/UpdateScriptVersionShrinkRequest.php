<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20251111\Models;

use AlibabaCloud\Dara\Model;

class UpdateScriptVersionShrinkRequest extends Model
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
    public $labelConfigsShrink;

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
    public $synthesizerConfigShrink;

    /**
     * @var string
     */
    public $transcriberConfigShrink;

    /**
     * @var string
     */
    public $versionId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'interactionConfigShrink' => 'InteractionConfig',
        'labelConfigsShrink' => 'LabelConfigs',
        'scriptId' => 'ScriptId',
        'scriptProfileShrink' => 'ScriptProfile',
        'synthesizerConfigShrink' => 'SynthesizerConfig',
        'transcriberConfigShrink' => 'TranscriberConfig',
        'versionId' => 'VersionId',
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

        if (null !== $this->labelConfigsShrink) {
            $res['LabelConfigs'] = $this->labelConfigsShrink;
        }

        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }

        if (null !== $this->scriptProfileShrink) {
            $res['ScriptProfile'] = $this->scriptProfileShrink;
        }

        if (null !== $this->synthesizerConfigShrink) {
            $res['SynthesizerConfig'] = $this->synthesizerConfigShrink;
        }

        if (null !== $this->transcriberConfigShrink) {
            $res['TranscriberConfig'] = $this->transcriberConfigShrink;
        }

        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
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

        if (isset($map['LabelConfigs'])) {
            $model->labelConfigsShrink = $map['LabelConfigs'];
        }

        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }

        if (isset($map['ScriptProfile'])) {
            $model->scriptProfileShrink = $map['ScriptProfile'];
        }

        if (isset($map['SynthesizerConfig'])) {
            $model->synthesizerConfigShrink = $map['SynthesizerConfig'];
        }

        if (isset($map['TranscriberConfig'])) {
            $model->transcriberConfigShrink = $map['TranscriberConfig'];
        }

        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
