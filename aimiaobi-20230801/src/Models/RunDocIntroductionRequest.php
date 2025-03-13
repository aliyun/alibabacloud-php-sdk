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

class RunDocIntroductionRequest extends Model
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
    public $introductionPrompt;

    /**
     * @var string
     */
    public $keyPointPrompt;

    /**
     * @description This parameter is required.
     *
     * @example a3b5eb35-6b28-4cf9-ac09-1dec25ab4df6
     *
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $summaryPrompt;

    /**
     * @description This parameter is required.
     *
     * @example xxxx
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'cleanCache' => 'CleanCache',
        'docId' => 'DocId',
        'introductionPrompt' => 'IntroductionPrompt',
        'keyPointPrompt' => 'KeyPointPrompt',
        'sessionId' => 'SessionId',
        'summaryPrompt' => 'SummaryPrompt',
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
        if (null !== $this->introductionPrompt) {
            $res['IntroductionPrompt'] = $this->introductionPrompt;
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

    /**
     * @param array $map
     *
     * @return RunDocIntroductionRequest
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
        if (isset($map['IntroductionPrompt'])) {
            $model->introductionPrompt = $map['IntroductionPrompt'];
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
