<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class ModifyScriptVoiceConfigRequest extends Model
{
    /**
     * @example bdd49242-114c-4045-b1d1-25ccc1756c75
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1d7a26e0-628b-4c3c-9918-7f2e23273f54
     *
     * @var string
     */
    public $scriptId;

    /**
     * @example e15cc646-50e5-4bc0-87ec-e4f2d1063b90
     *
     * @var string
     */
    public $scriptVoiceConfigId;

    /**
     * @var string
     */
    public $scriptWaveformRelation;

    /**
     * @example WAVEFORM
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'instanceId'             => 'InstanceId',
        'scriptId'               => 'ScriptId',
        'scriptVoiceConfigId'    => 'ScriptVoiceConfigId',
        'scriptWaveformRelation' => 'ScriptWaveformRelation',
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
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }
        if (null !== $this->scriptVoiceConfigId) {
            $res['ScriptVoiceConfigId'] = $this->scriptVoiceConfigId;
        }
        if (null !== $this->scriptWaveformRelation) {
            $res['ScriptWaveformRelation'] = $this->scriptWaveformRelation;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyScriptVoiceConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
