<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class AnswerKnowledgeBaseRequest extends Model
{
    /**
     * @var string
     */
    public $knowledgeBaseId;

    /**
     * @var int
     */
    public $maxContextChars;

    /**
     * @var string
     */
    public $queryText;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $rerankEnabled;

    /**
     * @var bool
     */
    public $returnSources;

    /**
     * @var float
     */
    public $scoreThreshold;

    /**
     * @var string
     */
    public $searchMode;

    /**
     * @var string
     */
    public $systemPrompt;

    /**
     * @var int
     */
    public $topK;

    /**
     * @var string
     */
    public $userInstructions;
    protected $_name = [
        'knowledgeBaseId' => 'KnowledgeBaseId',
        'maxContextChars' => 'MaxContextChars',
        'queryText' => 'QueryText',
        'regionId' => 'RegionId',
        'rerankEnabled' => 'RerankEnabled',
        'returnSources' => 'ReturnSources',
        'scoreThreshold' => 'ScoreThreshold',
        'searchMode' => 'SearchMode',
        'systemPrompt' => 'SystemPrompt',
        'topK' => 'TopK',
        'userInstructions' => 'UserInstructions',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->knowledgeBaseId) {
            $res['KnowledgeBaseId'] = $this->knowledgeBaseId;
        }

        if (null !== $this->maxContextChars) {
            $res['MaxContextChars'] = $this->maxContextChars;
        }

        if (null !== $this->queryText) {
            $res['QueryText'] = $this->queryText;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->rerankEnabled) {
            $res['RerankEnabled'] = $this->rerankEnabled;
        }

        if (null !== $this->returnSources) {
            $res['ReturnSources'] = $this->returnSources;
        }

        if (null !== $this->scoreThreshold) {
            $res['ScoreThreshold'] = $this->scoreThreshold;
        }

        if (null !== $this->searchMode) {
            $res['SearchMode'] = $this->searchMode;
        }

        if (null !== $this->systemPrompt) {
            $res['SystemPrompt'] = $this->systemPrompt;
        }

        if (null !== $this->topK) {
            $res['TopK'] = $this->topK;
        }

        if (null !== $this->userInstructions) {
            $res['UserInstructions'] = $this->userInstructions;
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
        if (isset($map['KnowledgeBaseId'])) {
            $model->knowledgeBaseId = $map['KnowledgeBaseId'];
        }

        if (isset($map['MaxContextChars'])) {
            $model->maxContextChars = $map['MaxContextChars'];
        }

        if (isset($map['QueryText'])) {
            $model->queryText = $map['QueryText'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RerankEnabled'])) {
            $model->rerankEnabled = $map['RerankEnabled'];
        }

        if (isset($map['ReturnSources'])) {
            $model->returnSources = $map['ReturnSources'];
        }

        if (isset($map['ScoreThreshold'])) {
            $model->scoreThreshold = $map['ScoreThreshold'];
        }

        if (isset($map['SearchMode'])) {
            $model->searchMode = $map['SearchMode'];
        }

        if (isset($map['SystemPrompt'])) {
            $model->systemPrompt = $map['SystemPrompt'];
        }

        if (isset($map['TopK'])) {
            $model->topK = $map['TopK'];
        }

        if (isset($map['UserInstructions'])) {
            $model->userInstructions = $map['UserInstructions'];
        }

        return $model;
    }
}
