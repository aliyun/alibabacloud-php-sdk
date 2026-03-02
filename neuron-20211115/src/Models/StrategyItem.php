<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class StrategyItem extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $resource;
    protected $_name = [
        'action' => 'action',
        'resource' => 'resource',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }

        if (null !== $this->resource) {
            $res['resource'] = $this->resource;
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
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }

        if (isset($map['resource'])) {
            $model->resource = $map['resource'];
        }

        return $model;
    }
}
