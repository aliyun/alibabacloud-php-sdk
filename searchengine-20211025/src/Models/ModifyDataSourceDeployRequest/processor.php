<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyDataSourceDeployRequest;

use AlibabaCloud\Tea\Model;

class processor extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $args;

    /**
     * @example {}
     *
     * @var string
     */
    public $resource;
    protected $_name = [
        'args'     => 'args',
        'resource' => 'resource',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return processor
     */
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
