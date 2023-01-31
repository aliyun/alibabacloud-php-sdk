<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListDialogueFlowsResponseBody;

use AlibabaCloud\Tea\Model;

class dialogueFlows extends Model
{
    /**
     * @var string
     */
    public $dialogueFlowDefinition;

    /**
     * @example dae01529-3c3e-458e-b07a-97643d09ebb9
     *
     * @var string
     */
    public $dialogueFlowId;

    /**
     * @var string
     */
    public $dialogueFlowName;

    /**
     * @example MainFlow
     *
     * @var string
     */
    public $dialogueFlowType;

    /**
     * @example 2d5aa451-661f-4f08-b0c4-28eec78decc4
     *
     * @var string
     */
    public $scriptId;

    /**
     * @example 1569220563549
     *
     * @var string
     */
    public $scriptVersion;
    protected $_name = [
        'dialogueFlowDefinition' => 'DialogueFlowDefinition',
        'dialogueFlowId'         => 'DialogueFlowId',
        'dialogueFlowName'       => 'DialogueFlowName',
        'dialogueFlowType'       => 'DialogueFlowType',
        'scriptId'               => 'ScriptId',
        'scriptVersion'          => 'ScriptVersion',
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
        if (null !== $this->dialogueFlowName) {
            $res['DialogueFlowName'] = $this->dialogueFlowName;
        }
        if (null !== $this->dialogueFlowType) {
            $res['DialogueFlowType'] = $this->dialogueFlowType;
        }
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }
        if (null !== $this->scriptVersion) {
            $res['ScriptVersion'] = $this->scriptVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dialogueFlows
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
        if (isset($map['DialogueFlowName'])) {
            $model->dialogueFlowName = $map['DialogueFlowName'];
        }
        if (isset($map['DialogueFlowType'])) {
            $model->dialogueFlowType = $map['DialogueFlowType'];
        }
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }
        if (isset($map['ScriptVersion'])) {
            $model->scriptVersion = $map['ScriptVersion'];
        }

        return $model;
    }
}
