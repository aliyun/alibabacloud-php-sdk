<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDeployGraphResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDeployGraphResponseBody\result\graph;

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
        if (null !== $this->graph) {
            $this->graph->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->graph) {
            $res['graph'] = null !== $this->graph ? $this->graph->toArray($noStream) : $this->graph;
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
        if (isset($map['graph'])) {
            $model->graph = graph::fromMap($map['graph']);
        }

        return $model;
    }
}
