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

use AlibabaCloud\SDK\DianJin\V20240628\Models\RunLibraryChatGenerationRequest\queryCriteria;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RunLibraryChatGenerationRequest\textSearchParameter;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RunLibraryChatGenerationRequest\vectorSearchParameter;
use AlibabaCloud\Tea\Model;

class RunLibraryChatGenerationRequest extends Model
{
    /**
     * @var string[]
     */
    public $docIdList;

    /**
     * @example false
     *
     * @var bool
     */
    public $enableFollowUp;

    /**
     * @example false
     *
     * @var bool
     */
    public $enableMultiQuery;

    /**
     * @example false
     *
     * @var bool
     */
    public $enableOpenQa;

    /**
     * @example qwen-max
     *
     * @var string
     */
    public $followUpLlm;

    /**
     * @description This parameter is required.
     *
     * @example 3akzl28vap
     *
     * @var string
     */
    public $libraryId;

    /**
     * @description This parameter is required.
     *
     * @example qwen-max
     *
     * @var string
     */
    public $llmType;

    /**
     * @example qwen-max
     *
     * @var string
     */
    public $multiQueryLlm;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $query;

    /**
     * @var queryCriteria
     */
    public $queryCriteria;

    /**
     * @example linear
     *
     * @var string
     */
    public $rerankType;

    /**
     * @description sessionId
     *
     * @example null
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example false
     *
     * @var bool
     */
    public $stream;

    /**
     * @var string[]
     */
    public $subQueryList;

    /**
     * @var textSearchParameter
     */
    public $textSearchParameter;

    /**
     * @example 1
     *
     * @var int
     */
    public $topK;

    /**
     * @var vectorSearchParameter
     */
    public $vectorSearchParameter;

    /**
     * @example false
     *
     * @var bool
     */
    public $withDocumentReference;
    protected $_name = [
        'docIdList' => 'docIdList',
        'enableFollowUp' => 'enableFollowUp',
        'enableMultiQuery' => 'enableMultiQuery',
        'enableOpenQa' => 'enableOpenQa',
        'followUpLlm' => 'followUpLlm',
        'libraryId' => 'libraryId',
        'llmType' => 'llmType',
        'multiQueryLlm' => 'multiQueryLlm',
        'query' => 'query',
        'queryCriteria' => 'queryCriteria',
        'rerankType' => 'rerankType',
        'sessionId' => 'sessionId',
        'stream' => 'stream',
        'subQueryList' => 'subQueryList',
        'textSearchParameter' => 'textSearchParameter',
        'topK' => 'topK',
        'vectorSearchParameter' => 'vectorSearchParameter',
        'withDocumentReference' => 'withDocumentReference',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->docIdList) {
            $res['docIdList'] = $this->docIdList;
        }
        if (null !== $this->enableFollowUp) {
            $res['enableFollowUp'] = $this->enableFollowUp;
        }
        if (null !== $this->enableMultiQuery) {
            $res['enableMultiQuery'] = $this->enableMultiQuery;
        }
        if (null !== $this->enableOpenQa) {
            $res['enableOpenQa'] = $this->enableOpenQa;
        }
        if (null !== $this->followUpLlm) {
            $res['followUpLlm'] = $this->followUpLlm;
        }
        if (null !== $this->libraryId) {
            $res['libraryId'] = $this->libraryId;
        }
        if (null !== $this->llmType) {
            $res['llmType'] = $this->llmType;
        }
        if (null !== $this->multiQueryLlm) {
            $res['multiQueryLlm'] = $this->multiQueryLlm;
        }
        if (null !== $this->query) {
            $res['query'] = $this->query;
        }
        if (null !== $this->queryCriteria) {
            $res['queryCriteria'] = null !== $this->queryCriteria ? $this->queryCriteria->toMap() : null;
        }
        if (null !== $this->rerankType) {
            $res['rerankType'] = $this->rerankType;
        }
        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }
        if (null !== $this->stream) {
            $res['stream'] = $this->stream;
        }
        if (null !== $this->subQueryList) {
            $res['subQueryList'] = $this->subQueryList;
        }
        if (null !== $this->textSearchParameter) {
            $res['textSearchParameter'] = null !== $this->textSearchParameter ? $this->textSearchParameter->toMap() : null;
        }
        if (null !== $this->topK) {
            $res['topK'] = $this->topK;
        }
        if (null !== $this->vectorSearchParameter) {
            $res['vectorSearchParameter'] = null !== $this->vectorSearchParameter ? $this->vectorSearchParameter->toMap() : null;
        }
        if (null !== $this->withDocumentReference) {
            $res['withDocumentReference'] = $this->withDocumentReference;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunLibraryChatGenerationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['docIdList'])) {
            if (!empty($map['docIdList'])) {
                $model->docIdList = $map['docIdList'];
            }
        }
        if (isset($map['enableFollowUp'])) {
            $model->enableFollowUp = $map['enableFollowUp'];
        }
        if (isset($map['enableMultiQuery'])) {
            $model->enableMultiQuery = $map['enableMultiQuery'];
        }
        if (isset($map['enableOpenQa'])) {
            $model->enableOpenQa = $map['enableOpenQa'];
        }
        if (isset($map['followUpLlm'])) {
            $model->followUpLlm = $map['followUpLlm'];
        }
        if (isset($map['libraryId'])) {
            $model->libraryId = $map['libraryId'];
        }
        if (isset($map['llmType'])) {
            $model->llmType = $map['llmType'];
        }
        if (isset($map['multiQueryLlm'])) {
            $model->multiQueryLlm = $map['multiQueryLlm'];
        }
        if (isset($map['query'])) {
            $model->query = $map['query'];
        }
        if (isset($map['queryCriteria'])) {
            $model->queryCriteria = queryCriteria::fromMap($map['queryCriteria']);
        }
        if (isset($map['rerankType'])) {
            $model->rerankType = $map['rerankType'];
        }
        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }
        if (isset($map['stream'])) {
            $model->stream = $map['stream'];
        }
        if (isset($map['subQueryList'])) {
            if (!empty($map['subQueryList'])) {
                $model->subQueryList = $map['subQueryList'];
            }
        }
        if (isset($map['textSearchParameter'])) {
            $model->textSearchParameter = textSearchParameter::fromMap($map['textSearchParameter']);
        }
        if (isset($map['topK'])) {
            $model->topK = $map['topK'];
        }
        if (isset($map['vectorSearchParameter'])) {
            $model->vectorSearchParameter = vectorSearchParameter::fromMap($map['vectorSearchParameter']);
        }
        if (isset($map['withDocumentReference'])) {
            $model->withDocumentReference = $map['withDocumentReference'];
        }

        return $model;
    }
}
