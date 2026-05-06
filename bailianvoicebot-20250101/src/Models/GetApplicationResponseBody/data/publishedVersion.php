<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\GetApplicationResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\GetApplicationResponseBody\data\publishedVersion\interactionConfig;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\GetApplicationResponseBody\data\publishedVersion\ragConfig;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\GetApplicationResponseBody\data\publishedVersion\scriptProfile;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\GetApplicationResponseBody\data\publishedVersion\synthesizerConfig;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\GetApplicationResponseBody\data\publishedVersion\transcriberConfig;

class publishedVersion extends Model
{
    /**
     * @var interactionConfig
     */
    public $interactionConfig;

    /**
     * @var ragConfig
     */
    public $ragConfig;

    /**
     * @var scriptProfile
     */
    public $scriptProfile;

    /**
     * @var synthesizerConfig
     */
    public $synthesizerConfig;

    /**
     * @var transcriberConfig
     */
    public $transcriberConfig;

    /**
     * @var string
     */
    public $versionId;
    protected $_name = [
        'interactionConfig' => 'InteractionConfig',
        'ragConfig' => 'RagConfig',
        'scriptProfile' => 'ScriptProfile',
        'synthesizerConfig' => 'SynthesizerConfig',
        'transcriberConfig' => 'TranscriberConfig',
        'versionId' => 'VersionId',
    ];

    public function validate()
    {
        if (null !== $this->interactionConfig) {
            $this->interactionConfig->validate();
        }
        if (null !== $this->ragConfig) {
            $this->ragConfig->validate();
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
        if (null !== $this->interactionConfig) {
            $res['InteractionConfig'] = null !== $this->interactionConfig ? $this->interactionConfig->toArray($noStream) : $this->interactionConfig;
        }

        if (null !== $this->ragConfig) {
            $res['RagConfig'] = null !== $this->ragConfig ? $this->ragConfig->toArray($noStream) : $this->ragConfig;
        }

        if (null !== $this->scriptProfile) {
            $res['ScriptProfile'] = null !== $this->scriptProfile ? $this->scriptProfile->toArray($noStream) : $this->scriptProfile;
        }

        if (null !== $this->synthesizerConfig) {
            $res['SynthesizerConfig'] = null !== $this->synthesizerConfig ? $this->synthesizerConfig->toArray($noStream) : $this->synthesizerConfig;
        }

        if (null !== $this->transcriberConfig) {
            $res['TranscriberConfig'] = null !== $this->transcriberConfig ? $this->transcriberConfig->toArray($noStream) : $this->transcriberConfig;
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
        if (isset($map['InteractionConfig'])) {
            $model->interactionConfig = interactionConfig::fromMap($map['InteractionConfig']);
        }

        if (isset($map['RagConfig'])) {
            $model->ragConfig = ragConfig::fromMap($map['RagConfig']);
        }

        if (isset($map['ScriptProfile'])) {
            $model->scriptProfile = scriptProfile::fromMap($map['ScriptProfile']);
        }

        if (isset($map['SynthesizerConfig'])) {
            $model->synthesizerConfig = synthesizerConfig::fromMap($map['SynthesizerConfig']);
        }

        if (isset($map['TranscriberConfig'])) {
            $model->transcriberConfig = transcriberConfig::fromMap($map['TranscriberConfig']);
        }

        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
