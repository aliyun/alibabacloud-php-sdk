<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class RunHotwordRequest extends Model
{
    /**
     * @var string
     */
    public $docId;
    /**
     * @var string
     */
    public $prompt;
    /**
     * @var string
     */
    public $referenceContent;
    /**
     * @var string
     */
    public $sessionId;
    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'docId'            => 'DocId',
        'prompt'           => 'Prompt',
        'referenceContent' => 'ReferenceContent',
        'sessionId'        => 'SessionId',
        'workspaceId'      => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->docId) {
            $res['DocId'] = $this->docId;
        }

        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }

        if (null !== $this->referenceContent) {
            $res['ReferenceContent'] = $this->referenceContent;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['DocId'])) {
            $model->docId = $map['DocId'];
        }

        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }

        if (isset($map['ReferenceContent'])) {
            $model->referenceContent = $map['ReferenceContent'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
