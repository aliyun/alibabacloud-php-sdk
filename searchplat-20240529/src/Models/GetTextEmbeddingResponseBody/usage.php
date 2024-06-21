<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetTextEmbeddingResponseBody;

use AlibabaCloud\Tea\Model;

class usage extends Model
{
    /**
     * @var int
     */
    public $tokenCount;
    protected $_name = [
        'tokenCount' => 'token_count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tokenCount) {
            $res['token_count'] = $this->tokenCount;
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
        if (isset($map['token_count'])) {
            $model->tokenCount = $map['token_count'];
        }

        return $model;
    }
}
