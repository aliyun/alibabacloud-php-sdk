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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationRequest\agentContext\bizContext;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationRequest\agentContext\bizContext\multimodalMediaSelection\textSearchResult;
use AlibabaCloud\Tea\Model;

class multimodalMediaSelection extends Model
{
    /**
     * @example 原始会话唯一标识：搜索结果取这个会话中的全量，目前仅媒资搜索场景需要
     *
     * @var string
     */
    public $originalSessionId;

    /**
     * @example TextGenerate
     *
     * @var string
     */
    public $searchModel;

    /**
     * @example 分类1
     *
     * @var string
     */
    public $searchModelDataValue;

    /**
     * @example all
     *
     * @var string
     */
    public $selectionType;

    /**
     * @example 3f7045e099474ba28ceca1b4eb6d6e21
     *
     * @var string
     */
    public $sessionId;

    /**
     * @var textSearchResult
     */
    public $textSearchResult;
    protected $_name = [
        'originalSessionId' => 'OriginalSessionId',
        'searchModel' => 'SearchModel',
        'searchModelDataValue' => 'SearchModelDataValue',
        'selectionType' => 'SelectionType',
        'sessionId' => 'SessionId',
        'textSearchResult' => 'TextSearchResult',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->originalSessionId) {
            $res['OriginalSessionId'] = $this->originalSessionId;
        }
        if (null !== $this->searchModel) {
            $res['SearchModel'] = $this->searchModel;
        }
        if (null !== $this->searchModelDataValue) {
            $res['SearchModelDataValue'] = $this->searchModelDataValue;
        }
        if (null !== $this->selectionType) {
            $res['SelectionType'] = $this->selectionType;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->textSearchResult) {
            $res['TextSearchResult'] = null !== $this->textSearchResult ? $this->textSearchResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return multimodalMediaSelection
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OriginalSessionId'])) {
            $model->originalSessionId = $map['OriginalSessionId'];
        }
        if (isset($map['SearchModel'])) {
            $model->searchModel = $map['SearchModel'];
        }
        if (isset($map['SearchModelDataValue'])) {
            $model->searchModelDataValue = $map['SearchModelDataValue'];
        }
        if (isset($map['SelectionType'])) {
            $model->selectionType = $map['SelectionType'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['TextSearchResult'])) {
            $model->textSearchResult = textSearchResult::fromMap($map['TextSearchResult']);
        }

        return $model;
    }
}
