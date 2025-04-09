<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetTextSparseEmbeddingResponseBody\result\sparseEmbeddings;

use AlibabaCloud\Dara\Model;

class embedding extends Model
{
    /**
     * @var string
     */
    public $token;

    /**
     * @var int
     */
    public $tokenId;

    /**
     * @var float
     */
    public $weight;
    protected $_name = [
        'token' => 'token',
        'tokenId' => 'token_id',
        'weight' => 'weight',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->token) {
            $res['token'] = $this->token;
        }

        if (null !== $this->tokenId) {
            $res['token_id'] = $this->tokenId;
        }

        if (null !== $this->weight) {
            $res['weight'] = $this->weight;
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
        if (isset($map['token'])) {
            $model->token = $map['token'];
        }

        if (isset($map['token_id'])) {
            $model->tokenId = $map['token_id'];
        }

        if (isset($map['weight'])) {
            $model->weight = $map['weight'];
        }

        return $model;
    }
}
