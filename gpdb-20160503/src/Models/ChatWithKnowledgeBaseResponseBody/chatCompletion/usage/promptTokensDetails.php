<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ChatWithKnowledgeBaseResponseBody\chatCompletion\usage;

use AlibabaCloud\Dara\Model;

class promptTokensDetails extends Model
{
    /**
     * @var int
     */
    public $cachedTokens;
    protected $_name = [
        'cachedTokens' => 'CachedTokens',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cachedTokens) {
            $res['CachedTokens'] = $this->cachedTokens;
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
        if (isset($map['CachedTokens'])) {
            $model->cachedTokens = $map['CachedTokens'];
        }

        return $model;
    }
}
