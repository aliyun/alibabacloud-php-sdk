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

class RunHotwordRequest extends Model
{
    /**
     * @example 84ufBYEeLMZOjRFo84HJ7ySL3Efr55
     *
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
     * @example e32a1a3f-1f7e-41dd-b888-ef1d91b96d1e
     *
     * @var string
     */
    public $sessionId;

    /**
     * @description This parameter is required.
     *
     * @example llm-baw8as25ll3wnzjr
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'docId' => 'DocId',
        'prompt' => 'Prompt',
        'referenceContent' => 'ReferenceContent',
        'sessionId' => 'SessionId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate(): void {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return RunHotwordRequest
     */
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
