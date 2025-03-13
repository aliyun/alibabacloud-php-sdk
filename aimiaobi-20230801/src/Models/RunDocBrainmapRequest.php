<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

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
    protected $_name = [
        'cleanCache' => 'CleanCache',
        'docId' => 'DocId',
        'nodeNumber' => 'NodeNumber',
        'prompt' => 'Prompt',
        'sessionId' => 'SessionId',
        'wordNumber' => 'WordNumber',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate(): void {}

    public function toMap()
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

        return $model;
    }
}
