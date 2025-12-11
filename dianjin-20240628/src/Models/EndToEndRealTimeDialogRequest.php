<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Dara\Model;

class EndToEndRealTimeDialogRequest extends Model
{
    /**
     * @var string
     */
    public $asrModelId;

    /**
     * @var string
     */
    public $inputFormat;

    /**
     * @var string
     */
    public $outputFormat;

    /**
     * @var int
     */
    public $pitchRate;

    /**
     * @var string
     */
    public $sampleRate;

    /**
     * @var int
     */
    public $speechRate;

    /**
     * @var string
     */
    public $ttsModelId;

    /**
     * @var string
     */
    public $voiceCode;

    /**
     * @var int
     */
    public $volume;
    protected $_name = [
        'asrModelId' => 'asrModelId',
        'inputFormat' => 'inputFormat',
        'outputFormat' => 'outputFormat',
        'pitchRate' => 'pitchRate',
        'sampleRate' => 'sampleRate',
        'speechRate' => 'speechRate',
        'ttsModelId' => 'ttsModelId',
        'voiceCode' => 'voiceCode',
        'volume' => 'volume',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asrModelId) {
            $res['asrModelId'] = $this->asrModelId;
        }

        if (null !== $this->inputFormat) {
            $res['inputFormat'] = $this->inputFormat;
        }

        if (null !== $this->outputFormat) {
            $res['outputFormat'] = $this->outputFormat;
        }

        if (null !== $this->pitchRate) {
            $res['pitchRate'] = $this->pitchRate;
        }

        if (null !== $this->sampleRate) {
            $res['sampleRate'] = $this->sampleRate;
        }

        if (null !== $this->speechRate) {
            $res['speechRate'] = $this->speechRate;
        }

        if (null !== $this->ttsModelId) {
            $res['ttsModelId'] = $this->ttsModelId;
        }

        if (null !== $this->voiceCode) {
            $res['voiceCode'] = $this->voiceCode;
        }

        if (null !== $this->volume) {
            $res['volume'] = $this->volume;
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
        if (isset($map['asrModelId'])) {
            $model->asrModelId = $map['asrModelId'];
        }

        if (isset($map['inputFormat'])) {
            $model->inputFormat = $map['inputFormat'];
        }

        if (isset($map['outputFormat'])) {
            $model->outputFormat = $map['outputFormat'];
        }

        if (isset($map['pitchRate'])) {
            $model->pitchRate = $map['pitchRate'];
        }

        if (isset($map['sampleRate'])) {
            $model->sampleRate = $map['sampleRate'];
        }

        if (isset($map['speechRate'])) {
            $model->speechRate = $map['speechRate'];
        }

        if (isset($map['ttsModelId'])) {
            $model->ttsModelId = $map['ttsModelId'];
        }

        if (isset($map['voiceCode'])) {
            $model->voiceCode = $map['voiceCode'];
        }

        if (isset($map['volume'])) {
            $model->volume = $map['volume'];
        }

        return $model;
    }
}
