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

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunTranslateGenerationRequest\referenceData;
use AlibabaCloud\Tea\Model;

class RunTranslateGenerationRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example toEnglish
     *
     * @var string
     */
    public $prompt;

    /**
     * @description This parameter is required.
     *
     * @var referenceData
     */
    public $referenceData;

    /**
     * @example xxx
     *
     * @var string
     */
    public $taskId;

    /**
     * @description This parameter is required.
     *
     * @example llm-xxx
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'prompt' => 'Prompt',
        'referenceData' => 'ReferenceData',
        'taskId' => 'TaskId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }
        if (null !== $this->referenceData) {
            $res['ReferenceData'] = null !== $this->referenceData ? $this->referenceData->toMap() : null;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunTranslateGenerationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }
        if (isset($map['ReferenceData'])) {
            $model->referenceData = referenceData::fromMap($map['ReferenceData']);
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
