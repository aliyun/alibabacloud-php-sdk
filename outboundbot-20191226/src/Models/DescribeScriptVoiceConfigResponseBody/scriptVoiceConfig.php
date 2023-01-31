<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeScriptVoiceConfigResponseBody;

use AlibabaCloud\Tea\Model;

class scriptVoiceConfig extends Model
{
    /**
     * @example 291cfc6a-8703-4bdd-a99d-9cba32d5288a
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $scriptContent;

    /**
     * @example 947e0875-b5d4-4b33-b18c-7b2cf85bcb4f
     *
     * @var string
     */
    public $scriptId;

    /**
     * @example 2a07b634-e15d-445f-bbcb-fc4ea2df7b87
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
