<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodeDependenciesResponseBody\pagingInfo\nodes\inputs\variables;

use AlibabaCloud\Tea\Model;

class node extends Model
{
    /**
     * @description The output of the node.
     *
     * @example 860438872620113XXXX
     *
     * @var string
     */
    public $output;
    protected $_name = [
        'output' => 'Output',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return node
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }

        return $model;
    }
}
