<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\GetUploadDocumentJobResponseBody;

use AlibabaCloud\Tea\Model;

class usage extends Model
{
    /**
     * @var int
     */
    public $embeddingEntries;

    /**
     * @description The number of tokens that are used for vectorization.
     *
     * >  A token is the minimum unit for splitting text. A token can be a word, phrase, punctuation, or character.
     * @example 475
     *
     * @var int
     */
    public $embeddingTokens;
    protected $_name = [
        'embeddingEntries' => 'EmbeddingEntries',
        'embeddingTokens'  => 'EmbeddingTokens',
    ];

    public function validate()
    {
    }

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
