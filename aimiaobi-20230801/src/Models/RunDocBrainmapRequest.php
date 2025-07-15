<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class RunDocBrainmapRequest extends Model
{
    /**
     * @var bool
     */
    public $cleanCache;

    /**
     * @description This parameter is required.
     *
     * @example 12345
     *
     * @var string
     */
    public $docId;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var int
     */
    public $nodeNumber;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @description This parameter is required.
     *
     * @example 3f7045e099474ba28ceca1b4eb6d6e21
     *
     * @var string
     */
    public $sessionId;

    /**
     * @var int
     */
    public $wordNumber;

    /**
     * @description This parameter is required.
     *
     * @example llm-xxx
     *
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
        'modelName' => 'ModelName',
        'nodeNumber' => 'NodeNumber',
        'prompt' => 'Prompt',
        'sessionId' => 'SessionId',
        'wordNumber' => 'WordNumber',
        'workspaceId' => 'WorkspaceId',
        'referenceContent' => 'referenceContent',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cleanCache) {
            $res['CleanCache'] = $this->cleanCache;
        }
        if (null !== $this->docId) {
            $res['DocId'] = $this->docId;
        }
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
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

    /**
     * @param array $map
     *
     * @return RunDocBrainmapRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CleanCache'])) {
            $model->cleanCache = $map['CleanCache'];
        }
        if (isset($map['DocId'])) {
            $model->docId = $map['DocId'];
        }
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
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
