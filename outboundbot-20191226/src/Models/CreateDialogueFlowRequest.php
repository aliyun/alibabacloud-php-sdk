<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class CreateDialogueFlowRequest extends Model
{
    /**
     * @var string
     */
    public $dialogueFlowType;

    /**
     * @var string
     */
    public $dialogueName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $scriptId;
    protected $_name = [
        'dialogueFlowType' => 'DialogueFlowType',
        'dialogueName' => 'DialogueName',
        'instanceId' => 'InstanceId',
        'scriptId' => 'ScriptId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dialogueFlowType) {
            $res['DialogueFlowType'] = $this->dialogueFlowType;
        }

        if (null !== $this->dialogueName) {
            $res['DialogueName'] = $this->dialogueName;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['DialogueFlowType'])) {
            $model->dialogueFlowType = $map['DialogueFlowType'];
        }

        if (isset($map['DialogueName'])) {
            $model->dialogueName = $map['DialogueName'];
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
