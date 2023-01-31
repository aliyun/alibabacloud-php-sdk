<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListScriptVoiceConfigsResponseBody\scriptVoiceConfigs;

use AlibabaCloud\Tea\Model;

class list_ extends Model
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
     * @example a7441a05-43bb-4a2d-acb0-365f245d7a5b
     *
     * @var string
     */
    public $scriptId;

    /**
     * @example 2c8fa91f-9856-4145-90f2-08252f09bc18
     *
     * @var string
     */
    public $scriptVoiceConfigId;

    /**
     * @example ""
     *
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
     * @example TTS
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
     * @return list_
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
