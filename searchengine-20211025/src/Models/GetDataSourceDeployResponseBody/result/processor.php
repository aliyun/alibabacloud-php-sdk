<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDataSourceDeployResponseBody\result;

use AlibabaCloud\Dara\Model;

class processor extends Model
{
    /**
     * @var string
     */
    public $args;

    /**
     * @var string
     */
    public $resource;
    protected $_name = [
        'args' => 'args',
        'resource' => 'resource',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->args) {
            $res['args'] = $this->args;
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
        if (isset($map['args'])) {
            $model->args = $map['args'];
        }

        if (isset($map['resource'])) {
            $model->resource = $map['resource'];
        }

        return $model;
    }
}
