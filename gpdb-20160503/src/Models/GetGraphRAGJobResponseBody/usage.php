<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\GetGraphRAGJobResponseBody;

use AlibabaCloud\Dara\Model;

class usage extends Model
{
    /**
     * @var int
     */
    public $embeddingTokens;

    /**
     * @var int
     */
    public $LLMInputTokens;

    /**
     * @var int
     */
    public $LLMOutputTokens;
    protected $_name = [
        'embeddingTokens' => 'EmbeddingTokens',
        'LLMInputTokens' => 'LLMInputTokens',
        'LLMOutputTokens' => 'LLMOutputTokens',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->embeddingTokens) {
            $res['EmbeddingTokens'] = $this->embeddingTokens;
        }

        if (null !== $this->LLMInputTokens) {
            $res['LLMInputTokens'] = $this->LLMInputTokens;
        }

        if (null !== $this->LLMOutputTokens) {
            $res['LLMOutputTokens'] = $this->LLMOutputTokens;
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
        if (isset($map['EmbeddingTokens'])) {
            $model->embeddingTokens = $map['EmbeddingTokens'];
        }

        if (isset($map['LLMInputTokens'])) {
            $model->LLMInputTokens = $map['LLMInputTokens'];
        }

        if (isset($map['LLMOutputTokens'])) {
            $model->LLMOutputTokens = $map['LLMOutputTokens'];
        }

        return $model;
    }
}
