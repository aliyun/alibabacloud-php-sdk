<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RecallDocumentRequest\filters;

class RecallDocumentRequest extends Model
{
    /**
     * @var filters[]
     */
    public $filters;

    /**
     * @var string
     */
    public $query;

    /**
     * @var bool
     */
    public $rearrangement;

    /**
     * @var int
     */
    public $topK;
    protected $_name = [
        'filters' => 'filters',
        'query' => 'query',
        'rearrangement' => 'rearrangement',
        'topK' => 'topK',
    ];

    public function validate()
    {
        if (\is_array($this->filters)) {
            Model::validateArray($this->filters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filters) {
            if (\is_array($this->filters)) {
                $res['filters'] = [];
                $n1 = 0;
                foreach ($this->filters as $item1) {
                    $res['filters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->query) {
            $res['query'] = $this->query;
        }

        if (null !== $this->rearrangement) {
            $res['rearrangement'] = $this->rearrangement;
        }

        if (null !== $this->topK) {
            $res['topK'] = $this->topK;
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
        if (isset($map['filters'])) {
            if (!empty($map['filters'])) {
                $model->filters = [];
                $n1 = 0;
                foreach ($map['filters'] as $item1) {
                    $model->filters[$n1++] = filters::fromMap($item1);
                }
            }
        }

        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        if (isset($map['rearrangement'])) {
            $model->rearrangement = $map['rearrangement'];
        }

        if (isset($map['topK'])) {
            $model->topK = $map['topK'];
        }

        return $model;
    }
}
