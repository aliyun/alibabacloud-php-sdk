<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\SearchKnowledgeBaseResponseBody\data\chunks;

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
        'fusion' => 'fusion',
        'keyword' => 'keyword',
        'rerank' => 'rerank',
        'vector' => 'vector',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fusion) {
            $res['fusion'] = $this->fusion;
        }

        if (null !== $this->keyword) {
            $res['keyword'] = $this->keyword;
        }

        if (null !== $this->rerank) {
            $res['rerank'] = $this->rerank;
        }

        if (null !== $this->vector) {
            $res['vector'] = $this->vector;
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
        if (isset($map['fusion'])) {
            $model->fusion = $map['fusion'];
        }

        if (isset($map['keyword'])) {
            $model->keyword = $map['keyword'];
        }

        if (isset($map['rerank'])) {
            $model->rerank = $map['rerank'];
        }

        if (isset($map['vector'])) {
            $model->vector = $map['vector'];
        }

        return $model;
    }
}
