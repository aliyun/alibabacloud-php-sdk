<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodeDependenciesResponseBody\pagingInfo\nodes\outputs\variables;

use AlibabaCloud\Dara\Model;

class node extends Model
{
    /**
     * @var string
     */
    public $output;
    protected $_name = [
        'output' => 'Output',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->output) {
            $res['Output'] = $this->output;
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
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }

        return $model;
    }
}
