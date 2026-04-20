<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\DescribeMmAppResponseBody\bindingConfig;

use AlibabaCloud\Dara\Model;

class ragConfig extends Model
{
    /**
     * @var string
     */
    public $enableSearch;

    /**
     * @var string[]
     */
    public $knowledgeBaseCodeList;

    /**
     * @var string
     */
    public $promptStrategy;

    /**
     * @var float[]
     */
    public $rankWeights;

    /**
     * @var int
     */
    public $retrieveMaxLength;

    /**
     * @var int
     */
    public $topK;
    protected $_name = [
        'enableSearch' => 'EnableSearch',
        'knowledgeBaseCodeList' => 'KnowledgeBaseCodeList',
        'promptStrategy' => 'PromptStrategy',
        'rankWeights' => 'RankWeights',
        'retrieveMaxLength' => 'RetrieveMaxLength',
        'topK' => 'TopK',
    ];

    public function validate()
    {
        if (\is_array($this->knowledgeBaseCodeList)) {
            Model::validateArray($this->knowledgeBaseCodeList);
        }
        if (\is_array($this->rankWeights)) {
            Model::validateArray($this->rankWeights);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableSearch) {
            $res['EnableSearch'] = $this->enableSearch;
        }

        if (null !== $this->knowledgeBaseCodeList) {
            if (\is_array($this->knowledgeBaseCodeList)) {
                $res['KnowledgeBaseCodeList'] = [];
                $n1 = 0;
                foreach ($this->knowledgeBaseCodeList as $item1) {
                    $res['KnowledgeBaseCodeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->promptStrategy) {
            $res['PromptStrategy'] = $this->promptStrategy;
        }

        if (null !== $this->rankWeights) {
            if (\is_array($this->rankWeights)) {
                $res['RankWeights'] = [];
                foreach ($this->rankWeights as $key1 => $value1) {
                    $res['RankWeights'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->retrieveMaxLength) {
            $res['RetrieveMaxLength'] = $this->retrieveMaxLength;
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
        if (isset($map['EnableSearch'])) {
            $model->enableSearch = $map['EnableSearch'];
        }

        if (isset($map['KnowledgeBaseCodeList'])) {
            if (!empty($map['KnowledgeBaseCodeList'])) {
                $model->knowledgeBaseCodeList = [];
                $n1 = 0;
                foreach ($map['KnowledgeBaseCodeList'] as $item1) {
                    $model->knowledgeBaseCodeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PromptStrategy'])) {
            $model->promptStrategy = $map['PromptStrategy'];
        }

        if (isset($map['RankWeights'])) {
            if (!empty($map['RankWeights'])) {
                $model->rankWeights = [];
                foreach ($map['RankWeights'] as $key1 => $value1) {
                    $model->rankWeights[$key1] = $value1;
                }
            }
        }

        if (isset($map['RetrieveMaxLength'])) {
            $model->retrieveMaxLength = $map['RetrieveMaxLength'];
        }

        if (isset($map['TopK'])) {
            $model->topK = $map['TopK'];
        }

        return $model;
    }
}
