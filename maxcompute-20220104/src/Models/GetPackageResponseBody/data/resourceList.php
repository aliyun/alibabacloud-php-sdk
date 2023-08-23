<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetPackageResponseBody\data;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetPackageResponseBody\data\resourceList\function_;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetPackageResponseBody\data\resourceList\resource;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetPackageResponseBody\data\resourceList\table;
use AlibabaCloud\Tea\Model;

class resourceList extends Model
{
    /**
     * @description The functions.
     *
     * @var function_[]
     */
    public $function;

    /**
     * @description The resources.
     *
     * @var resource[]
     */
    public $resource;

    /**
     * @description The tables.
     *
     * @var table[]
     */
    public $table;
    protected $_name = [
        'function' => 'function',
        'resource' => 'resource',
        'table'    => 'table',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->function) {
            $res['function'] = [];
            if (null !== $this->function && \is_array($this->function)) {
                $n = 0;
                foreach ($this->function as $item) {
                    $res['function'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resource) {
            $res['resource'] = [];
            if (null !== $this->resource && \is_array($this->resource)) {
                $n = 0;
                foreach ($this->resource as $item) {
                    $res['resource'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->table) {
            $res['table'] = [];
            if (null !== $this->table && \is_array($this->table)) {
                $n = 0;
                foreach ($this->table as $item) {
                    $res['table'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['function'])) {
            if (!empty($map['function'])) {
                $model->function = [];
                $n               = 0;
                foreach ($map['function'] as $item) {
                    $model->function[$n++] = null !== $item ? function_::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['resource'])) {
            if (!empty($map['resource'])) {
                $model->resource = [];
                $n               = 0;
                foreach ($map['resource'] as $item) {
                    $model->resource[$n++] = null !== $item ? resource::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['table'])) {
            if (!empty($map['table'])) {
                $model->table = [];
                $n            = 0;
                foreach ($map['table'] as $item) {
                    $model->table[$n++] = null !== $item ? table::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
