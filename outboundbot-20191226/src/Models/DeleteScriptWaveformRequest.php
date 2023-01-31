<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class DeleteScriptWaveformRequest extends Model
{
    /**
     * @example ed954e8a-a4df-4a3c-89ba-0afeca1def5a
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 0fe7f71c-8771-42ef-9bb1-19aa16ae7120
     *
     * @var string
     */
    public $scriptId;

    /**
     * @example df8216aa-d8f6-4501-864f-f8334d946561
     *
     * @var string
     */
    public $scriptWaveformId;
    protected $_name = [
        'instanceId'       => 'InstanceId',
        'scriptId'         => 'ScriptId',
        'scriptWaveformId' => 'ScriptWaveformId',
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
        if (null !== $this->scriptWaveformId) {
            $res['ScriptWaveformId'] = $this->scriptWaveformId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteScriptWaveformRequest
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
        if (isset($map['ScriptWaveformId'])) {
            $model->scriptWaveformId = $map['ScriptWaveformId'];
        }

        return $model;
    }
}
