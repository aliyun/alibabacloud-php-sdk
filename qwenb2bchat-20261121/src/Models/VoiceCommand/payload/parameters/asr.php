<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenB2BChat\V20261121\Models\VoiceCommand\payload\parameters;

use AlibabaCloud\Dara\Model;

class asr extends Model
{
    /**
     * @var string
     */
    public $format;

    /**
     * @var int
     */
    public $sampleRate;

    /**
     * @var string[]
     */
    public $languageHints;
    protected $_name = [
        'format' => 'format',
        'sampleRate' => 'sampleRate',
        'languageHints' => 'languageHints',
    ];

    public function validate()
    {
        if (\is_array($this->languageHints)) {
            Model::validateArray($this->languageHints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->format) {
            $res['format'] = $this->format;
        }

        if (null !== $this->sampleRate) {
            $res['sampleRate'] = $this->sampleRate;
        }

        if (null !== $this->languageHints) {
            if (\is_array($this->languageHints)) {
                $res['languageHints'] = [];
                $n1 = 0;
                foreach ($this->languageHints as $item1) {
                    $res['languageHints'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['format'])) {
            $model->format = $map['format'];
        }

        if (isset($map['sampleRate'])) {
            $model->sampleRate = $map['sampleRate'];
        }

        if (isset($map['languageHints'])) {
            if (!empty($map['languageHints'])) {
                $model->languageHints = [];
                $n1 = 0;
                foreach ($map['languageHints'] as $item1) {
                    $model->languageHints[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
