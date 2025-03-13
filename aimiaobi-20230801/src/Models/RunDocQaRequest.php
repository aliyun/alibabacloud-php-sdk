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

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocQaRequest\conversationContexts;
use AlibabaCloud\Tea\Model;

class RunDocQaRequest extends Model
{
    /**
     * @var string[]
     */
    public $categoryIds;

    /**
     * @var conversationContexts[]
     */
    public $conversationContexts;

    /**
     * @var string[]
     */
    public $docIds;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $referenceContent;

    /**
     * @description This parameter is required.
     *
     * @example fromWeb
     *
     * @var string
     */
    public $searchSource;

    /**
     * @description This parameter is required.
     *
     * @example f486c4e2-b773-4d65-88f8-2ba540610456
     *
     * @var string
     */
    public $sessionId;

    /**
     * @description This parameter is required.
     *
     * @example llm-dswd4003ny4gh9rw
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'categoryIds' => 'CategoryIds',
        'conversationContexts' => 'ConversationContexts',
        'docIds' => 'DocIds',
        'query' => 'Query',
        'referenceContent' => 'ReferenceContent',
        'searchSource' => 'SearchSource',
        'sessionId' => 'SessionId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryIds) {
            $res['CategoryIds'] = $this->categoryIds;
        }
        if (null !== $this->conversationContexts) {
            $res['ConversationContexts'] = [];
            if (null !== $this->conversationContexts && \is_array($this->conversationContexts)) {
                $n = 0;
                foreach ($this->conversationContexts as $item) {
                    $res['ConversationContexts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->docIds) {
            $res['DocIds'] = $this->docIds;
        }
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }
        if (null !== $this->referenceContent) {
            $res['ReferenceContent'] = $this->referenceContent;
        }
        if (null !== $this->searchSource) {
            $res['SearchSource'] = $this->searchSource;
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
     * @return RunDocQaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryIds'])) {
            if (!empty($map['CategoryIds'])) {
                $model->categoryIds = $map['CategoryIds'];
            }
        }
        if (isset($map['ConversationContexts'])) {
            if (!empty($map['ConversationContexts'])) {
                $model->conversationContexts = [];
                $n = 0;
                foreach ($map['ConversationContexts'] as $item) {
                    $model->conversationContexts[$n++] = null !== $item ? conversationContexts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DocIds'])) {
            if (!empty($map['DocIds'])) {
                $model->docIds = $map['DocIds'];
            }
        }
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }
        if (isset($map['ReferenceContent'])) {
            $model->referenceContent = $map['ReferenceContent'];
        }
        if (isset($map['SearchSource'])) {
            $model->searchSource = $map['SearchSource'];
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
