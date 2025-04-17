<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class Runtime extends Model
{
    /**
     * @var Hyperparameters
     */
    public $hyperparameters;

    /**
     * @var resource
     */
    public $resource;
    protected $_name = [
        'hyperparameters' => 'Hyperparameters',
        'resource' => 'Resource',
    ];

    public function validate()
    {
        if (null !== $this->hyperparameters) {
            $this->hyperparameters->validate();
        }
        if (null !== $this->resource) {
            $this->resource->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hyperparameters) {
            $res['Hyperparameters'] = null !== $this->hyperparameters ? $this->hyperparameters->toArray($noStream) : $this->hyperparameters;
        }

        if (null !== $this->resource) {
            $res['Resource'] = null !== $this->resource ? $this->resource->toArray($noStream) : $this->resource;
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
        if (isset($map['Hyperparameters'])) {
            $model->hyperparameters = Hyperparameters::fromMap($map['Hyperparameters']);
        }

        if (isset($map['Resource'])) {
            $model->resource = Resource::fromMap($map['Resource']);
        }

        return $model;
    }
}
