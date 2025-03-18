<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentResponseBody;

use AlibabaCloud\Tea\Model;

class usage extends Model
{
    /**
     * @description The number of entries used for vectorization.
     * > An entry refers to the number of processing items when performing vectorization on text or images. For example, processing one piece of text counts as 1 entry, while processing one image counts as 2 entries.
     *
     * @example 10
     *
     * @var string
     */
    public $embeddingEntries;

    /**
     * @description Number of tokens used for vectorization.
     *
     * > A token refers to the smallest unit into which the input text is divided; a token can be a word, a phrase, a punctuation mark, or a character, etc.
     *
     * @example 100
     *
     * @var string
     */
    public $embeddingTokens;
    protected $_name = [
        'embeddingEntries' => 'EmbeddingEntries',
        'embeddingTokens' => 'EmbeddingTokens',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->embeddingEntries) {
            $res['EmbeddingEntries'] = $this->embeddingEntries;
        }
        if (null !== $this->embeddingTokens) {
            $res['EmbeddingTokens'] = $this->embeddingTokens;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return usage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EmbeddingEntries'])) {
            $model->embeddingEntries = $map['EmbeddingEntries'];
        }
        if (isset($map['EmbeddingTokens'])) {
            $model->embeddingTokens = $map['EmbeddingTokens'];
        }

        return $model;
    }
}
