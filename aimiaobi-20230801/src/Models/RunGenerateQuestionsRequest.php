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

class RunGenerateQuestionsRequest extends Model
{
    /**
     * @example oOgIwodFANW1u5MnqxysOh1rtld3xn
     *
     * @var string
     */
    public $docId;

    /**
     * @var string
     */
    public $referenceContent;

    /**
     * @example f486c4e2-b773-4d65-88f8-2ba540610456
     *
     * @var string
     */
    public $sessionId;

    /**
     * @description This parameter is required.
     *
     * @example llm-w335gauzlbba2vze
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'docId' => 'DocId',
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
     * @return RunGenerateQuestionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DocId'])) {
            $model->docId = $map['DocId'];
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
