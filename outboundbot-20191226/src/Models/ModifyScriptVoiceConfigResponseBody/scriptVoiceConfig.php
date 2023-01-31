<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyScriptVoiceConfigResponseBody;

use AlibabaCloud\Tea\Model;

class scriptVoiceConfig extends Model
{
    /**
     * @example bdd49242-114c-4045-b1d1-25ccc1756c75
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $scriptContent;

    /**
     * @example 1d7a26e0-628b-4c3c-9918-7f2e23273f54
     *
     * @var string
     */
    public $scriptId;

    /**
     * @example 4ddea690-6534-4c88-9cbd-0b5882ec64c0
     *
     * @var string
     */
    public $scriptVoiceConfigId;

    /**
     * @var string
     */
    public $scriptWaveformRelation;

    /**
     * @example DIALOGUE_FLOW
     *
     * @var string
     */
    public $source;

    /**
     * @example WAVEFORM
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'instanceId'             => 'InstanceId',
        'scriptContent'          => 'ScriptContent',
        'scriptId'               => 'ScriptId',
        'scriptVoiceConfigId'    => 'ScriptVoiceConfigId',
        'scriptWaveformRelation' => 'ScriptWaveformRelation',
        'source'                 => 'Source',
        'type'                   => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->scriptContent) {
            $res['ScriptContent'] = $this->scriptContent;
        }
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }
        if (null !== $this->scriptVoiceConfigId) {
            $res['ScriptVoiceConfigId'] = $this->scriptVoiceConfigId;
        }
        if (null !== $this->scriptWaveformRelation) {
            $res['ScriptWaveformRelation'] = $this->scriptWaveformRelation;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scriptVoiceConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ScriptContent'])) {
            $model->scriptContent = $map['ScriptContent'];
        }
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }
        if (isset($map['ScriptVoiceConfigId'])) {
            $model->scriptVoiceConfigId = $map['ScriptVoiceConfigId'];
        }
        if (isset($map['ScriptWaveformRelation'])) {
            $model->scriptWaveformRelation = $map['ScriptWaveformRelation'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
