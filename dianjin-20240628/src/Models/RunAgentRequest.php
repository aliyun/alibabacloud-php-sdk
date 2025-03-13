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

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Tea\Model;

class RunAgentRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example d6zxykawk9
     *
     * @var string
     */
    public $botId;

    /**
     * @example qwen-plus
     *
     * @var string
     */
    public $modelId;

    /**
     * @example true
     *
     * @var bool
     */
    public $stream;

    /**
     * @example 4vlag5ken3
     *
     * @var string
     */
    public $threadId;

    /**
     * @example false
     *
     * @var bool
     */
    public $useDraft;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $userContent;

    /**
     * @example w4paqoezm2
     *
     * @var string
     */
    public $versionId;
    protected $_name = [
        'botId' => 'botId',
        'modelId' => 'modelId',
        'stream' => 'stream',
        'threadId' => 'threadId',
        'useDraft' => 'useDraft',
        'userContent' => 'userContent',
        'versionId' => 'versionId',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->botId) {
            $res['botId'] = $this->botId;
        }
        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }
        if (null !== $this->stream) {
            $res['stream'] = $this->stream;
        }
        if (null !== $this->threadId) {
            $res['threadId'] = $this->threadId;
        }
        if (null !== $this->useDraft) {
            $res['useDraft'] = $this->useDraft;
        }
        if (null !== $this->userContent) {
            $res['userContent'] = $this->userContent;
        }
        if (null !== $this->versionId) {
            $res['versionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunAgentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['botId'])) {
            $model->botId = $map['botId'];
        }
        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }
        if (isset($map['stream'])) {
            $model->stream = $map['stream'];
        }
        if (isset($map['threadId'])) {
            $model->threadId = $map['threadId'];
        }
        if (isset($map['useDraft'])) {
            $model->useDraft = $map['useDraft'];
        }
        if (isset($map['userContent'])) {
            $model->userContent = $map['userContent'];
        }
        if (isset($map['versionId'])) {
            $model->versionId = $map['versionId'];
        }

        return $model;
    }
}
