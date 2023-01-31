<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class DeleteDialogueFlowRequest extends Model
{
    /**
     * @example 40a1457a-d2f3-43cf-ac81-c9e14cf07d88
     *
     * @var string
     */
    public $dialogueFlowId;

    /**
     * @example 361c8a53-0e29-42f3-8aa7-c7752d010399
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example d7c28efb-47f7-4a85-a522-5038e30a0b98
     *
     * @var string
     */
    public $scriptId;
    protected $_name = [
        'dialogueFlowId' => 'DialogueFlowId',
        'instanceId'     => 'InstanceId',
        'scriptId'       => 'ScriptId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dialogueFlowId) {
            $res['DialogueFlowId'] = $this->dialogueFlowId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDialogueFlowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DialogueFlowId'])) {
            $model->dialogueFlowId = $map['DialogueFlowId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }

        return $model;
    }
}
