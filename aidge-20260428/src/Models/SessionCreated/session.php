<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\SessionCreated;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\SessionCreated\session\translation;
use AlibabaCloud\SDK\Aidge\V20260428\Models\SessionCreated\session\turnDetection;

class session extends Model
{
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
     * @var turnDetection
     */
    public $turnDetection;

    /**
     * @var translation
     */
    public $translation;
    protected $_name = [
        'id' => 'id',
        'object' => 'object',
        'modalities' => 'modalities',
        'voice' => 'voice',
        'inputAudioFormat' => 'input_audio_format',
        'sampleRate' => 'sample_rate',
        'outputAudioFormat' => 'output_audio_format',
        'turnDetection' => 'turn_detection',
        'translation' => 'translation',
    ];

    public function validate()
    {
        if (\is_array($this->modalities)) {
            Model::validateArray($this->modalities);
        }
        if (null !== $this->turnDetection) {
            $this->turnDetection->validate();
        }
        if (null !== $this->translation) {
            $this->translation->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->turnDetection) {
            $res['turn_detection'] = null !== $this->turnDetection ? $this->turnDetection->toArray($noStream) : $this->turnDetection;
        }

        if (null !== $this->translation) {
            $res['translation'] = null !== $this->translation ? $this->translation->toArray($noStream) : $this->translation;
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

        if (isset($map['turn_detection'])) {
            $model->turnDetection = turnDetection::fromMap($map['turn_detection']);
        }

        if (isset($map['translation'])) {
            $model->translation = translation::fromMap($map['translation']);
        }

        return $model;
    }
}
