<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\KnowledgeBaseSearchChunk;

use AlibabaCloud\Dara\Model;

class scores extends Model
{
    /**
     * @var float
     */
    public $fusion;

    /**
     * @var float
     */
    public $keyword;

    /**
     * @var float
     */
    public $rerank;

    /**
     * @var float
     */
    public $vector;
    protected $_name = [
        'fusion' => 'Fusion',
        'keyword' => 'Keyword',
        'rerank' => 'Rerank',
        'vector' => 'Vector',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fusion) {
            $res['Fusion'] = $this->fusion;
        }

        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        if (null !== $this->rerank) {
            $res['Rerank'] = $this->rerank;
        }

        if (null !== $this->vector) {
            $res['Vector'] = $this->vector;
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
        if (isset($map['Fusion'])) {
            $model->fusion = $map['Fusion'];
        }

        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        if (isset($map['Rerank'])) {
            $model->rerank = $map['Rerank'];
        }

        if (isset($map['Vector'])) {
            $model->vector = $map['Vector'];
        }

        return $model;
    }
}
