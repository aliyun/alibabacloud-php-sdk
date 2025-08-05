<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\GetUploadDocumentJobResponseBody;

use AlibabaCloud\Dara\Model;

class usage extends Model
{
    /**
     * @var int
     */
    public $embeddingEntries;

    /**
     * @var int
     */
    public $embeddingTokens;
    protected $_name = [
        'embeddingEntries' => 'EmbeddingEntries',
        'embeddingTokens' => 'EmbeddingTokens',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
