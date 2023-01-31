<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class DescribeScriptVoiceConfigRequest extends Model
{
    /**
     * @example 8fa1953f-4a84-46d8-b80c-8ce9cf684fb3
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 28c4bcaf-5ab1-495e-8966-3206bf9ee733
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
    protected $_name = [
        'instanceId'          => 'InstanceId',
        'scriptId'            => 'ScriptId',
        'scriptVoiceConfigId' => 'ScriptVoiceConfigId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScriptVoiceConfigRequest
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

        return $model;
    }
}
