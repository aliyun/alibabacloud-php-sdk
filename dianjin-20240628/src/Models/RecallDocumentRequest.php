<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\SDK\DianJin\V20240628\Models\RecallDocumentRequest\filters;
use AlibabaCloud\Tea\Model;

class RecallDocumentRequest extends Model
{
    /**
     * @var filters[]
     */
    public $filters;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $query;

    /**
     * @example false
     *
     * @var bool
     */
    public $rearrangement;

    /**
     * @example 10
     *
     * @var int
     */
    public $topK;
    protected $_name = [
        'filters'       => 'filters',
        'query'         => 'query',
        'rearrangement' => 'rearrangement',
        'topK'          => 'topK',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filters) {
            $res['filters'] = [];
            if (null !== $this->filters && \is_array($this->filters)) {
                $n = 0;
                foreach ($this->filters as $item) {
                    $res['filters'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return RecallDocumentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['filters'])) {
            if (!empty($map['filters'])) {
                $model->filters = [];
                $n              = 0;
                foreach ($map['filters'] as $item) {
                    $model->filters[$n++] = null !== $item ? filters::fromMap($item) : $item;
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
