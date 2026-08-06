<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MilvusKnowledgeBase\V20260604\Models\SearchKnowledgeBaseResponseBody\results;

use AlibabaCloud\Dara\Model;

class scoreDetails extends Model
{
    /**
     * @var float
     */
    public $keywordScore;

    /**
     * @var float
     */
    public $semanticScore;
    protected $_name = [
        'keywordScore' => 'keywordScore',
        'semanticScore' => 'semanticScore',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keywordScore) {
            $res['keywordScore'] = $this->keywordScore;
        }

        if (null !== $this->semanticScore) {
            $res['semanticScore'] = $this->semanticScore;
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
        if (isset($map['keywordScore'])) {
            $model->keywordScore = $map['keywordScore'];
        }

        if (isset($map['semanticScore'])) {
            $model->semanticScore = $map['semanticScore'];
        }

        return $model;
    }
}
