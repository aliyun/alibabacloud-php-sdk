<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetWebSearchRequest\history;

class GetWebSearchRequest extends Model
{
    /**
     * @var string
     */
    public $contentType;

    /**
     * @var history[]
     */
    public $history;

    /**
     * @var string
     */
    public $query;

    /**
     * @var bool
     */
    public $queryRewrite;

    /**
     * @var int
     */
    public $topK;

    /**
     * @var string
     */
    public $way;
    protected $_name = [
        'contentType' => 'content_type',
        'history' => 'history',
        'query' => 'query',
        'queryRewrite' => 'query_rewrite',
        'topK' => 'top_k',
        'way' => 'way',
    ];

    public function validate()
    {
        if (\is_array($this->history)) {
            Model::validateArray($this->history);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentType) {
            $res['content_type'] = $this->contentType;
        }

        if (null !== $this->history) {
            if (\is_array($this->history)) {
                $res['history'] = [];
                $n1 = 0;
                foreach ($this->history as $item1) {
                    $res['history'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->query) {
            $res['query'] = $this->query;
        }

        if (null !== $this->queryRewrite) {
            $res['query_rewrite'] = $this->queryRewrite;
        }

        if (null !== $this->topK) {
            $res['top_k'] = $this->topK;
        }

        if (null !== $this->way) {
            $res['way'] = $this->way;
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
        if (isset($map['content_type'])) {
            $model->contentType = $map['content_type'];
        }

        if (isset($map['history'])) {
            if (!empty($map['history'])) {
                $model->history = [];
                $n1 = 0;
                foreach ($map['history'] as $item1) {
                    $model->history[$n1] = history::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        if (isset($map['query_rewrite'])) {
            $model->queryRewrite = $map['query_rewrite'];
        }

        if (isset($map['top_k'])) {
            $model->topK = $map['top_k'];
        }

        if (isset($map['way'])) {
            $model->way = $map['way'];
        }

        return $model;
    }
}
