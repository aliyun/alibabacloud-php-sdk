<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDeployGraphResponseBody;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDeployGraphResponseBody\result\graph;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var graph
     */
    public $graph;
    protected $_name = [
        'graph' => 'graph',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->graph) {
            $res['graph'] = null !== $this->graph ? $this->graph->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['graph'])) {
            $model->graph = graph::fromMap($map['graph']);
        }

        return $model;
    }
}
