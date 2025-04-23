<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetPackageResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetPackageResponseBody\data\resourceList\function_;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetPackageResponseBody\data\resourceList\resource;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetPackageResponseBody\data\resourceList\table;

class resourceList extends Model
{
    /**
     * @var function_[]
     */
    public $function;

    /**
     * @var resource[]
     */
    public $resource;

    /**
     * @var table[]
     */
    public $table;
    protected $_name = [
        'function' => 'function',
        'resource' => 'resource',
        'table' => 'table',
    ];

    public function validate()
    {
        if (\is_array($this->function)) {
            Model::validateArray($this->function);
        }
        if (\is_array($this->resource)) {
            Model::validateArray($this->resource);
        }
        if (\is_array($this->table)) {
            Model::validateArray($this->table);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->function) {
            if (\is_array($this->function)) {
                $res['function'] = [];
                $n1 = 0;
                foreach ($this->function as $item1) {
                    $res['function'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->resource) {
            if (\is_array($this->resource)) {
                $res['resource'] = [];
                $n1 = 0;
                foreach ($this->resource as $item1) {
                    $res['resource'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->table) {
            if (\is_array($this->table)) {
                $res['table'] = [];
                $n1 = 0;
                foreach ($this->table as $item1) {
                    $res['table'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['function'])) {
            if (!empty($map['function'])) {
                $model->function = [];
                $n1 = 0;
                foreach ($map['function'] as $item1) {
                    $model->function[$n1++] = function_::fromMap($item1);
                }
            }
        }

        if (isset($map['resource'])) {
            if (!empty($map['resource'])) {
                $model->resource = [];
                $n1 = 0;
                foreach ($map['resource'] as $item1) {
                    $model->resource[$n1++] = resource::fromMap($item1);
                }
            }
        }

        if (isset($map['table'])) {
            if (!empty($map['table'])) {
                $model->table = [];
                $n1 = 0;
                foreach ($map['table'] as $item1) {
                    $model->table[$n1++] = table::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
