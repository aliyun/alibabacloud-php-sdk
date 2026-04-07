<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\CreateScriptVersionRequest\interactionConfig;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\CreateScriptVersionRequest\labelConfig;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\CreateScriptVersionRequest\scriptProfile;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\CreateScriptVersionRequest\synthesizerConfig;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\CreateScriptVersionRequest\transcriberConfig;

class CreateScriptVersionRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var interactionConfig
     */
    public $interactionConfig;

    /**
     * @var labelConfig[]
     */
    public $labelConfig;

    /**
     * @var string
     */
    public $scriptId;

    /**
     * @var scriptProfile
     */
    public $scriptProfile;

    /**
     * @var string
     */
    public $sourceVersionId;

    /**
     * @var synthesizerConfig
     */
    public $synthesizerConfig;

    /**
     * @var transcriberConfig
     */
    public $transcriberConfig;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'interactionConfig' => 'InteractionConfig',
        'labelConfig' => 'LabelConfig',
        'scriptId' => 'ScriptId',
        'scriptProfile' => 'ScriptProfile',
        'sourceVersionId' => 'SourceVersionId',
        'synthesizerConfig' => 'SynthesizerConfig',
        'transcriberConfig' => 'TranscriberConfig',
    ];

    public function validate()
    {
        if (null !== $this->interactionConfig) {
            $this->interactionConfig->validate();
        }
        if (\is_array($this->labelConfig)) {
            Model::validateArray($this->labelConfig);
        }
        if (null !== $this->scriptProfile) {
            $this->scriptProfile->validate();
        }
        if (null !== $this->synthesizerConfig) {
            $this->synthesizerConfig->validate();
        }
        if (null !== $this->transcriberConfig) {
            $this->transcriberConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->interactionConfig) {
            $res['InteractionConfig'] = null !== $this->interactionConfig ? $this->interactionConfig->toArray($noStream) : $this->interactionConfig;
        }

        if (null !== $this->labelConfig) {
            if (\is_array($this->labelConfig)) {
                $res['LabelConfig'] = [];
                $n1 = 0;
                foreach ($this->labelConfig as $item1) {
                    $res['LabelConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }

        if (null !== $this->scriptProfile) {
            $res['ScriptProfile'] = null !== $this->scriptProfile ? $this->scriptProfile->toArray($noStream) : $this->scriptProfile;
        }

        if (null !== $this->sourceVersionId) {
            $res['SourceVersionId'] = $this->sourceVersionId;
        }

        if (null !== $this->synthesizerConfig) {
            $res['SynthesizerConfig'] = null !== $this->synthesizerConfig ? $this->synthesizerConfig->toArray($noStream) : $this->synthesizerConfig;
        }

        if (null !== $this->transcriberConfig) {
            $res['TranscriberConfig'] = null !== $this->transcriberConfig ? $this->transcriberConfig->toArray($noStream) : $this->transcriberConfig;
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
            $model->interactionConfig = interactionConfig::fromMap($map['InteractionConfig']);
        }

        if (isset($map['LabelConfig'])) {
            if (!empty($map['LabelConfig'])) {
                $model->labelConfig = [];
                $n1 = 0;
                foreach ($map['LabelConfig'] as $item1) {
                    $model->labelConfig[$n1] = labelConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }

        if (isset($map['ScriptProfile'])) {
            $model->scriptProfile = scriptProfile::fromMap($map['ScriptProfile']);
        }

        if (isset($map['SourceVersionId'])) {
            $model->sourceVersionId = $map['SourceVersionId'];
        }

        if (isset($map['SynthesizerConfig'])) {
            $model->synthesizerConfig = synthesizerConfig::fromMap($map['SynthesizerConfig']);
        }

        if (isset($map['TranscriberConfig'])) {
            $model->transcriberConfig = transcriberConfig::fromMap($map['TranscriberConfig']);
        }

        return $model;
    }
}
