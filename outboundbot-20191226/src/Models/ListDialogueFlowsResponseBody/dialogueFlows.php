<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListDialogueFlowsResponseBody;

use AlibabaCloud\Dara\Model;

class dialogueFlows extends Model
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
    public $dialogueFlowName;

    /**
     * @var string
     */
    public $dialogueFlowType;

    /**
     * @var string
     */
    public $scriptId;

    /**
     * @var string
     */
    public $scriptVersion;
    protected $_name = [
        'dialogueFlowDefinition' => 'DialogueFlowDefinition',
        'dialogueFlowId' => 'DialogueFlowId',
        'dialogueFlowName' => 'DialogueFlowName',
        'dialogueFlowType' => 'DialogueFlowType',
        'scriptId' => 'ScriptId',
        'scriptVersion' => 'ScriptVersion',
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
