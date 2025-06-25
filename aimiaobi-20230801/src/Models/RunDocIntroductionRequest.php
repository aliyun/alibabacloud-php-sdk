<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class RunDocIntroductionRequest extends Model
{
    /**
     * @var bool
     */
    public $cleanCache;

    /**
     * @var string
     */
    public $docId;

    /**
     * @var string
     */
    public $introductionPrompt;

    /**
     * @var string
     */
    public $keyPointPrompt;

    /**
     * @var string
     */
    public $modelName;

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

    /**
     * @var string
     */
    public $referenceContent;
    protected $_name = [
        'cleanCache' => 'CleanCache',
        'docId' => 'DocId',
        'introductionPrompt' => 'IntroductionPrompt',
        'keyPointPrompt' => 'KeyPointPrompt',
        'modelName' => 'ModelName',
        'sessionId' => 'SessionId',
        'summaryPrompt' => 'SummaryPrompt',
        'workspaceId' => 'WorkspaceId',
        'referenceContent' => 'referenceContent',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cleanCache) {
            $res['CleanCache'] = $this->cleanCache;
        }

        if (null !== $this->docId) {
            $res['DocId'] = $this->docId;
        }

        if (null !== $this->introductionPrompt) {
            $res['IntroductionPrompt'] = $this->introductionPrompt;
        }

        if (null !== $this->keyPointPrompt) {
            $res['KeyPointPrompt'] = $this->keyPointPrompt;
        }

        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
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

        if (null !== $this->referenceContent) {
            $res['referenceContent'] = $this->referenceContent;
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
        if (isset($map['CleanCache'])) {
            $model->cleanCache = $map['CleanCache'];
        }

        if (isset($map['DocId'])) {
            $model->docId = $map['DocId'];
        }

        if (isset($map['IntroductionPrompt'])) {
            $model->introductionPrompt = $map['IntroductionPrompt'];
        }

        if (isset($map['KeyPointPrompt'])) {
            $model->keyPointPrompt = $map['KeyPointPrompt'];
        }

        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
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

        if (isset($map['referenceContent'])) {
            $model->referenceContent = $map['referenceContent'];
        }

        return $model;
    }
}
