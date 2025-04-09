<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class ModifyDialogueFlowRequest extends Model
{
    /**
     * @var string
     */
    public $dialogueFlowDefinition;

    /**
     * @var string
     */
    public $dialogueFlowId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $isDrafted;

    /**
     * @var string
     */
    public $scriptId;
    protected $_name = [
        'dialogueFlowDefinition' => 'DialogueFlowDefinition',
        'dialogueFlowId' => 'DialogueFlowId',
        'instanceId' => 'InstanceId',
        'isDrafted' => 'IsDrafted',
        'scriptId' => 'ScriptId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
