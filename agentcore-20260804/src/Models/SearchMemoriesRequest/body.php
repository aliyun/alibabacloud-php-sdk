<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\SearchMemoriesRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\SearchMemoriesRequest\body\scope;

class body extends Model
{
    /**
     * @var bool
     */
    public $enableRerank;

    /**
     * @var string[]
     */
    public $metadata;

    /**
     * @var float
     */
    public $minScore;

    /**
     * @var float
     */
    public $minSimilarity;

    /**
     * @var string
     */
    public $query;

    /**
     * @var scope
     */
    public $scope;

    /**
     * @var int
     */
    public $topK;

    /**
     * @var string[]
     */
    public $types;
    protected $_name = [
        'enableRerank' => 'enableRerank',
        'metadata' => 'metadata',
        'minScore' => 'minScore',
        'minSimilarity' => 'minSimilarity',
        'query' => 'query',
        'scope' => 'scope',
        'topK' => 'topK',
        'types' => 'types',
    ];

    public function validate()
    {
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        if (null !== $this->scope) {
            $this->scope->validate();
        }
        if (\is_array($this->types)) {
            Model::validateArray($this->types);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableRerank) {
            $res['enableRerank'] = $this->enableRerank;
        }

        if (null !== $this->metadata) {
            if (\is_array($this->metadata)) {
                $res['metadata'] = [];
                foreach ($this->metadata as $key1 => $value1) {
                    $res['metadata'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->minScore) {
            $res['minScore'] = $this->minScore;
        }

        if (null !== $this->minSimilarity) {
            $res['minSimilarity'] = $this->minSimilarity;
        }

        if (null !== $this->query) {
            $res['query'] = $this->query;
        }

        if (null !== $this->scope) {
            $res['scope'] = null !== $this->scope ? $this->scope->toArray($noStream) : $this->scope;
        }

        if (null !== $this->topK) {
            $res['topK'] = $this->topK;
        }

        if (null !== $this->types) {
            if (\is_array($this->types)) {
                $res['types'] = [];
                $n1 = 0;
                foreach ($this->types as $item1) {
                    $res['types'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['enableRerank'])) {
            $model->enableRerank = $map['enableRerank'];
        }

        if (isset($map['metadata'])) {
            if (!empty($map['metadata'])) {
                $model->metadata = [];
                foreach ($map['metadata'] as $key1 => $value1) {
                    $model->metadata[$key1] = $value1;
                }
            }
        }

        if (isset($map['minScore'])) {
            $model->minScore = $map['minScore'];
        }

        if (isset($map['minSimilarity'])) {
            $model->minSimilarity = $map['minSimilarity'];
        }

        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        if (isset($map['scope'])) {
            $model->scope = scope::fromMap($map['scope']);
        }

        if (isset($map['topK'])) {
            $model->topK = $map['topK'];
        }

        if (isset($map['types'])) {
            if (!empty($map['types'])) {
                $model->types = [];
                $n1 = 0;
                foreach ($map['types'] as $item1) {
                    $model->types[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
