<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class RunDocBrainmapRequest extends Model
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
     * @var int
     */
    public $nodeNumber;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var int
     */
    public $wordNumber;

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
        'nodeNumber' => 'NodeNumber',
        'prompt' => 'Prompt',
        'sessionId' => 'SessionId',
        'wordNumber' => 'WordNumber',
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

        if (null !== $this->nodeNumber) {
            $res['NodeNumber'] = $this->nodeNumber;
        }

        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->wordNumber) {
            $res['WordNumber'] = $this->wordNumber;
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

        if (isset($map['NodeNumber'])) {
            $model->nodeNumber = $map['NodeNumber'];
        }

        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['WordNumber'])) {
            $model->wordNumber = $map['WordNumber'];
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
