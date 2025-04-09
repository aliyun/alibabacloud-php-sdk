<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class ModifyScriptVoiceConfigRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $scriptId;

    /**
     * @var string
     */
    public $scriptVoiceConfigId;

    /**
     * @var string
     */
    public $scriptWaveformRelation;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'scriptId' => 'ScriptId',
        'scriptVoiceConfigId' => 'ScriptVoiceConfigId',
        'scriptWaveformRelation' => 'ScriptWaveformRelation',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
