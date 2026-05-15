<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailNewResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailNewResponseBody\data\agentCallConfig\eventConfig;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailNewResponseBody\data\agentCallConfig\transferConfig;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailNewResponseBody\data\agentCallConfig\ttsConfig;

class agentCallConfig extends Model
{
    /**
     * @var eventConfig
     */
    public $eventConfig;

    /**
     * @var string
     */
    public $prologue;

    /**
     * @var string
     */
    public $recordingFile;

    /**
     * @var int
     */
    public $startWordType;

    /**
     * @var transferConfig
     */
    public $transferConfig;

    /**
     * @var ttsConfig
     */
    public $ttsConfig;

    /**
     * @var string
     */
    public $vocabId;
    protected $_name = [
        'eventConfig' => 'EventConfig',
        'prologue' => 'Prologue',
        'recordingFile' => 'RecordingFile',
        'startWordType' => 'StartWordType',
        'transferConfig' => 'TransferConfig',
        'ttsConfig' => 'TtsConfig',
        'vocabId' => 'VocabId',
    ];

    public function validate()
    {
        if (null !== $this->eventConfig) {
            $this->eventConfig->validate();
        }
        if (null !== $this->transferConfig) {
            $this->transferConfig->validate();
        }
        if (null !== $this->ttsConfig) {
            $this->ttsConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventConfig) {
            $res['EventConfig'] = null !== $this->eventConfig ? $this->eventConfig->toArray($noStream) : $this->eventConfig;
        }

        if (null !== $this->prologue) {
            $res['Prologue'] = $this->prologue;
        }

        if (null !== $this->recordingFile) {
            $res['RecordingFile'] = $this->recordingFile;
        }

        if (null !== $this->startWordType) {
            $res['StartWordType'] = $this->startWordType;
        }

        if (null !== $this->transferConfig) {
            $res['TransferConfig'] = null !== $this->transferConfig ? $this->transferConfig->toArray($noStream) : $this->transferConfig;
        }

        if (null !== $this->ttsConfig) {
            $res['TtsConfig'] = null !== $this->ttsConfig ? $this->ttsConfig->toArray($noStream) : $this->ttsConfig;
        }

        if (null !== $this->vocabId) {
            $res['VocabId'] = $this->vocabId;
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
        if (isset($map['EventConfig'])) {
            $model->eventConfig = eventConfig::fromMap($map['EventConfig']);
        }

        if (isset($map['Prologue'])) {
            $model->prologue = $map['Prologue'];
        }

        if (isset($map['RecordingFile'])) {
            $model->recordingFile = $map['RecordingFile'];
        }

        if (isset($map['StartWordType'])) {
            $model->startWordType = $map['StartWordType'];
        }

        if (isset($map['TransferConfig'])) {
            $model->transferConfig = transferConfig::fromMap($map['TransferConfig']);
        }

        if (isset($map['TtsConfig'])) {
            $model->ttsConfig = ttsConfig::fromMap($map['TtsConfig']);
        }

        if (isset($map['VocabId'])) {
            $model->vocabId = $map['VocabId'];
        }

        return $model;
    }
}
