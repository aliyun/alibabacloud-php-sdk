<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class RetrievalKnowledgeBaseRequest extends Model
{
    /**
     * @var string
     */
    public $knowledgeBaseId;

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
     * @var float
     */
    public $scoreThreshold;

    /**
     * @var int
     */
    public $topK;
    protected $_name = [
        'knowledgeBaseId' => 'KnowledgeBaseId',
        'queryText' => 'QueryText',
        'regionId' => 'RegionId',
        'rerankEnabled' => 'RerankEnabled',
        'scoreThreshold' => 'ScoreThreshold',
        'topK' => 'TopK',
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

        if (null !== $this->queryText) {
            $res['QueryText'] = $this->queryText;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->rerankEnabled) {
            $res['RerankEnabled'] = $this->rerankEnabled;
        }

        if (null !== $this->scoreThreshold) {
            $res['ScoreThreshold'] = $this->scoreThreshold;
        }

        if (null !== $this->topK) {
            $res['TopK'] = $this->topK;
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

        if (isset($map['QueryText'])) {
            $model->queryText = $map['QueryText'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RerankEnabled'])) {
            $model->rerankEnabled = $map['RerankEnabled'];
        }

        if (isset($map['ScoreThreshold'])) {
            $model->scoreThreshold = $map['ScoreThreshold'];
        }

        if (isset($map['TopK'])) {
            $model->topK = $map['TopK'];
        }

        return $model;
    }
}
