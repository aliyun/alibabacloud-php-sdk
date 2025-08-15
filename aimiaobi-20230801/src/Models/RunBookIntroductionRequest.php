<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class RunBookIntroductionRequest extends Model
{
    /**
     * @var string
     */
    public $docId;

    /**
     * @var string
     */
    public $keyPointPrompt;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $summaryPrompt;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'docId' => 'DocId',
        'keyPointPrompt' => 'KeyPointPrompt',
        'sessionId' => 'SessionId',
        'summaryPrompt' => 'SummaryPrompt',
        'workspaceId' => 'WorkspaceId',
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

        if (null !== $this->keyPointPrompt) {
            $res['KeyPointPrompt'] = $this->keyPointPrompt;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->summaryPrompt) {
            $res['SummaryPrompt'] = $this->summaryPrompt;
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

        if (isset($map['KeyPointPrompt'])) {
            $model->keyPointPrompt = $map['KeyPointPrompt'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['SummaryPrompt'])) {
            $model->summaryPrompt = $map['SummaryPrompt'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
