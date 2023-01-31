<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class ModifyDialogueFlowRequest extends Model
{
    /**
     * @var string
     */
    public $dialogueFlowDefinition;

    /**
     * @example 390515b5-6115-4ccf-83e2-52d5bfaf2ddf
     *
     * @var string
     */
    public $dialogueFlowId;

    /**
     * @example da37319b-6c83-4268-9f19-814aed62e401
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example true
     *
     * @var bool
     */
    public $isDrafted;

    /**
     * @example b0f35dd1-0337-402e-9c4f-3a6c2426950a
     *
     * @var string
     */
    public $scriptId;
    protected $_name = [
        'dialogueFlowDefinition' => 'DialogueFlowDefinition',
        'dialogueFlowId'         => 'DialogueFlowId',
        'instanceId'             => 'InstanceId',
        'isDrafted'              => 'IsDrafted',
        'scriptId'               => 'ScriptId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dialogueFlowDefinition) {
            $res['DialogueFlowDefinition'] = $this->dialogueFlowDefinition;
        }
        if (null !== $this->dialogueFlowId) {
            $res['DialogueFlowId'] = $this->dialogueFlowId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->isDrafted) {
            $res['IsDrafted'] = $this->isDrafted;
        }
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDialogueFlowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DialogueFlowDefinition'])) {
            $model->dialogueFlowDefinition = $map['DialogueFlowDefinition'];
        }
        if (isset($map['DialogueFlowId'])) {
            $model->dialogueFlowId = $map['DialogueFlowId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IsDrafted'])) {
            $model->isDrafted = $map['IsDrafted'];
        }
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }

        return $model;
    }
}
