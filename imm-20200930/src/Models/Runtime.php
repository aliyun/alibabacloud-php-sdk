<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class Runtime extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var Hyperparameters
     */
    public $hyperparameters;

    /**
     * @description This parameter is required.
     *
     * @var resource
     */
    public $resource;
    protected $_name = [
        'hyperparameters' => 'Hyperparameters',
        'resource'        => 'Resource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hyperparameters) {
            $res['Hyperparameters'] = null !== $this->hyperparameters ? $this->hyperparameters->toMap() : null;
        }
        if (null !== $this->resource) {
            $res['Resource'] = null !== $this->resource ? $this->resource->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Runtime
     */
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
