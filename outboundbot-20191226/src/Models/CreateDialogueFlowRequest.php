<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class CreateDialogueFlowRequest extends Model
{
    /**
     * @example MainFlow
     *
     * @var string
     */
    public $dialogueFlowType;

    /**
     * @var string
     */
    public $dialogueName;

    /**
     * @example 174952ab-9825-4cc9-a5e2-de82d7fa4cdd
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example d0bf93dd-1a54-4f00-819e-c75502d38681
     *
     * @var string
     */
    public $scriptId;
    protected $_name = [
        'dialogueFlowType' => 'DialogueFlowType',
        'dialogueName'     => 'DialogueName',
        'instanceId'       => 'InstanceId',
        'scriptId'         => 'ScriptId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateDialogueFlowRequest
     */
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
