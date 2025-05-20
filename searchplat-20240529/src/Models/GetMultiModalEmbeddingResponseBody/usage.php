<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetMultiModalEmbeddingResponseBody;

use AlibabaCloud\Dara\Model;

class usage extends Model
{
    /**
     * @var int
     */
    public $image;

    /**
     * @var int
     */
    public $tokenCount;
    protected $_name = [
        'image' => 'image',
        'tokenCount' => 'token_count',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->image) {
            $res['image'] = $this->image;
        }

        if (null !== $this->tokenCount) {
            $res['token_count'] = $this->tokenCount;
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
        if (isset($map['image'])) {
            $model->image = $map['image'];
        }

        if (isset($map['token_count'])) {
            $model->tokenCount = $map['token_count'];
        }

        return $model;
    }
}
