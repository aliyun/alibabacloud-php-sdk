<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RunLibraryChatGenerationRequest\queryCriteria;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RunLibraryChatGenerationRequest\textSearchParameter;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RunLibraryChatGenerationRequest\vectorSearchParameter;

class RunLibraryChatGenerationRequest extends Model
{
    /**
     * @var string[]
     */
    public $docIdList;

    /**
     * @var bool
     */
    public $enableFollowUp;

    /**
     * @var bool
     */
    public $enableMultiQuery;

    /**
     * @var bool
     */
    public $enableOpenQa;

    /**
     * @var string
     */
    public $followUpLlm;

    /**
     * @var string
     */
    public $libraryId;

    /**
     * @var string
     */
    public $llmType;

    /**
     * @var string
     */
    public $multiQueryLlm;

    /**
     * @var string
     */
    public $query;

    /**
     * @var queryCriteria
     */
    public $queryCriteria;

    /**
     * @var string
     */
    public $rerankType;

    /**
     * @var string
     */
    public $sessionId;

    /**
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
     * @var int
     */
    public $topK;

    /**
     * @var vectorSearchParameter
     */
    public $vectorSearchParameter;

    /**
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

    public function validate()
    {
        if (\is_array($this->docIdList)) {
            Model::validateArray($this->docIdList);
        }
        if (null !== $this->queryCriteria) {
            $this->queryCriteria->validate();
        }
        if (\is_array($this->subQueryList)) {
            Model::validateArray($this->subQueryList);
        }
        if (null !== $this->textSearchParameter) {
            $this->textSearchParameter->validate();
        }
        if (null !== $this->vectorSearchParameter) {
            $this->vectorSearchParameter->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->docIdList) {
            if (\is_array($this->docIdList)) {
                $res['docIdList'] = [];
                $n1 = 0;
                foreach ($this->docIdList as $item1) {
                    $res['docIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            $res['queryCriteria'] = null !== $this->queryCriteria ? $this->queryCriteria->toArray($noStream) : $this->queryCriteria;
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
            if (\is_array($this->subQueryList)) {
                $res['subQueryList'] = [];
                $n1 = 0;
                foreach ($this->subQueryList as $item1) {
                    $res['subQueryList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->textSearchParameter) {
            $res['textSearchParameter'] = null !== $this->textSearchParameter ? $this->textSearchParameter->toArray($noStream) : $this->textSearchParameter;
        }

        if (null !== $this->topK) {
            $res['topK'] = $this->topK;
        }

        if (null !== $this->vectorSearchParameter) {
            $res['vectorSearchParameter'] = null !== $this->vectorSearchParameter ? $this->vectorSearchParameter->toArray($noStream) : $this->vectorSearchParameter;
        }

        if (null !== $this->withDocumentReference) {
            $res['withDocumentReference'] = $this->withDocumentReference;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['docIdList'])) {
            if (!empty($map['docIdList'])) {
                $model->docIdList = [];
                $n1 = 0;
                foreach ($map['docIdList'] as $item1) {
                    $model->docIdList[$n1] = $item1;
                    ++$n1;
                }
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
                $model->subQueryList = [];
                $n1 = 0;
                foreach ($map['subQueryList'] as $item1) {
                    $model->subQueryList[$n1] = $item1;
                    ++$n1;
                }
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
