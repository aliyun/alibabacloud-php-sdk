<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\SessionUpdated;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\SessionUpdated\session\inputAudio;
use AlibabaCloud\SDK\Aidge\V20260428\Models\SessionUpdated\session\inputAudioTranscription;
use AlibabaCloud\SDK\Aidge\V20260428\Models\SessionUpdated\session\output;
use AlibabaCloud\SDK\Aidge\V20260428\Models\SessionUpdated\session\transcription;
use AlibabaCloud\SDK\Aidge\V20260428\Models\SessionUpdated\session\translation;
use AlibabaCloud\SDK\Aidge\V20260428\Models\SessionUpdated\session\turnDetection;
use AlibabaCloud\SDK\Aidge\V20260428\Models\SessionUpdated\session\voiceCloneOptions;

class session extends Model
{
    /**
     * @var string
     */
    public $mode;

    /**
     * @var string[]
     */
    public $languagePair;

    /**
     * @var inputAudio
     */
    public $inputAudio;

    /**
     * @var output
     */
    public $output;

    /**
     * @var transcription
     */
    public $transcription;

    /**
     * @var turnDetection
     */
    public $turnDetection;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $object;

    /**
     * @var string[]
     */
    public $modalities;

    /**
     * @var string
     */
    public $voice;

    /**
     * @var string
     */
    public $inputAudioFormat;

    /**
     * @var int
     */
    public $sampleRate;

    /**
     * @var string
     */
    public $outputAudioFormat;

    /**
     * @var translation
     */
    public $translation;

    /**
     * @var bool
     */
    public $enableVoiceClone;

    /**
     * @var voiceCloneOptions
     */
    public $voiceCloneOptions;

    /**
     * @var inputAudioTranscription
     */
    public $inputAudioTranscription;
    protected $_name = [
        'mode' => 'mode',
        'languagePair' => 'language_pair',
        'inputAudio' => 'input_audio',
        'output' => 'output',
        'transcription' => 'transcription',
        'turnDetection' => 'turn_detection',
        'id' => 'id',
        'object' => 'object',
        'modalities' => 'modalities',
        'voice' => 'voice',
        'inputAudioFormat' => 'input_audio_format',
        'sampleRate' => 'sample_rate',
        'outputAudioFormat' => 'output_audio_format',
        'translation' => 'translation',
        'enableVoiceClone' => 'enable_voice_clone',
        'voiceCloneOptions' => 'voice_clone_options',
        'inputAudioTranscription' => 'input_audio_transcription',
    ];

    public function validate()
    {
        if (\is_array($this->languagePair)) {
            Model::validateArray($this->languagePair);
        }
        if (null !== $this->inputAudio) {
            $this->inputAudio->validate();
        }
        if (null !== $this->output) {
            $this->output->validate();
        }
        if (null !== $this->transcription) {
            $this->transcription->validate();
        }
        if (null !== $this->turnDetection) {
            $this->turnDetection->validate();
        }
        if (\is_array($this->modalities)) {
            Model::validateArray($this->modalities);
        }
        if (null !== $this->translation) {
            $this->translation->validate();
        }
        if (null !== $this->voiceCloneOptions) {
            $this->voiceCloneOptions->validate();
        }
        if (null !== $this->inputAudioTranscription) {
            $this->inputAudioTranscription->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }

        if (null !== $this->languagePair) {
            if (\is_array($this->languagePair)) {
                $res['language_pair'] = [];
                $n1 = 0;
                foreach ($this->languagePair as $item1) {
                    $res['language_pair'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->inputAudio) {
            $res['input_audio'] = null !== $this->inputAudio ? $this->inputAudio->toArray($noStream) : $this->inputAudio;
        }

        if (null !== $this->output) {
            $res['output'] = null !== $this->output ? $this->output->toArray($noStream) : $this->output;
        }

        if (null !== $this->transcription) {
            $res['transcription'] = null !== $this->transcription ? $this->transcription->toArray($noStream) : $this->transcription;
        }

        if (null !== $this->turnDetection) {
            $res['turn_detection'] = null !== $this->turnDetection ? $this->turnDetection->toArray($noStream) : $this->turnDetection;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->object) {
            $res['object'] = $this->object;
        }

        if (null !== $this->modalities) {
            if (\is_array($this->modalities)) {
                $res['modalities'] = [];
                $n1 = 0;
                foreach ($this->modalities as $item1) {
                    $res['modalities'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->voice) {
            $res['voice'] = $this->voice;
        }

        if (null !== $this->inputAudioFormat) {
            $res['input_audio_format'] = $this->inputAudioFormat;
        }

        if (null !== $this->sampleRate) {
            $res['sample_rate'] = $this->sampleRate;
        }

        if (null !== $this->outputAudioFormat) {
            $res['output_audio_format'] = $this->outputAudioFormat;
        }

        if (null !== $this->translation) {
            $res['translation'] = null !== $this->translation ? $this->translation->toArray($noStream) : $this->translation;
        }

        if (null !== $this->enableVoiceClone) {
            $res['enable_voice_clone'] = $this->enableVoiceClone;
        }

        if (null !== $this->voiceCloneOptions) {
            $res['voice_clone_options'] = null !== $this->voiceCloneOptions ? $this->voiceCloneOptions->toArray($noStream) : $this->voiceCloneOptions;
        }

        if (null !== $this->inputAudioTranscription) {
            $res['input_audio_transcription'] = null !== $this->inputAudioTranscription ? $this->inputAudioTranscription->toArray($noStream) : $this->inputAudioTranscription;
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
        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }

        if (isset($map['language_pair'])) {
            if (!empty($map['language_pair'])) {
                $model->languagePair = [];
                $n1 = 0;
                foreach ($map['language_pair'] as $item1) {
                    $model->languagePair[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['input_audio'])) {
            $model->inputAudio = inputAudio::fromMap($map['input_audio']);
        }

        if (isset($map['output'])) {
            $model->output = output::fromMap($map['output']);
        }

        if (isset($map['transcription'])) {
            $model->transcription = transcription::fromMap($map['transcription']);
        }

        if (isset($map['turn_detection'])) {
            $model->turnDetection = turnDetection::fromMap($map['turn_detection']);
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['object'])) {
            $model->object = $map['object'];
        }

        if (isset($map['modalities'])) {
            if (!empty($map['modalities'])) {
                $model->modalities = [];
                $n1 = 0;
                foreach ($map['modalities'] as $item1) {
                    $model->modalities[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['voice'])) {
            $model->voice = $map['voice'];
        }

        if (isset($map['input_audio_format'])) {
            $model->inputAudioFormat = $map['input_audio_format'];
        }

        if (isset($map['sample_rate'])) {
            $model->sampleRate = $map['sample_rate'];
        }

        if (isset($map['output_audio_format'])) {
            $model->outputAudioFormat = $map['output_audio_format'];
        }

        if (isset($map['translation'])) {
            $model->translation = translation::fromMap($map['translation']);
        }

        if (isset($map['enable_voice_clone'])) {
            $model->enableVoiceClone = $map['enable_voice_clone'];
        }

        if (isset($map['voice_clone_options'])) {
            $model->voiceCloneOptions = voiceCloneOptions::fromMap($map['voice_clone_options']);
        }

        if (isset($map['input_audio_transcription'])) {
            $model->inputAudioTranscription = inputAudioTranscription::fromMap($map['input_audio_transcription']);
        }

        return $model;
    }
}
