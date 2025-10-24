<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListRolesResponseBody\data\roles;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListRolesResponseBody\data\roles\acl\function_;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListRolesResponseBody\data\roles\acl\instance;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListRolesResponseBody\data\roles\acl\package;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListRolesResponseBody\data\roles\acl\project;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListRolesResponseBody\data\roles\acl\resource;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListRolesResponseBody\data\roles\acl\table;

class acl extends Model
{
    /**
     * @var function_[]
     */
    public $function;

    /**
     * @var instance[]
     */
    public $instance;

    /**
     * @var package[]
     */
    public $package;

    /**
     * @var project[]
     */
    public $project;

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
        'instance' => 'instance',
        'package' => 'package',
        'project' => 'project',
        'resource' => 'resource',
        'table' => 'table',
    ];

    public function validate()
    {
        if (\is_array($this->function)) {
            Model::validateArray($this->function);
        }
        if (\is_array($this->instance)) {
            Model::validateArray($this->instance);
        }
        if (\is_array($this->package)) {
            Model::validateArray($this->package);
        }
        if (\is_array($this->project)) {
            Model::validateArray($this->project);
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
                    $res['function'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instance) {
            if (\is_array($this->instance)) {
                $res['instance'] = [];
                $n1 = 0;
                foreach ($this->instance as $item1) {
                    $res['instance'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->package) {
            if (\is_array($this->package)) {
                $res['package'] = [];
                $n1 = 0;
                foreach ($this->package as $item1) {
                    $res['package'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->project) {
            if (\is_array($this->project)) {
                $res['project'] = [];
                $n1 = 0;
                foreach ($this->project as $item1) {
                    $res['project'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resource) {
            if (\is_array($this->resource)) {
                $res['resource'] = [];
                $n1 = 0;
                foreach ($this->resource as $item1) {
                    $res['resource'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->table) {
            if (\is_array($this->table)) {
                $res['table'] = [];
                $n1 = 0;
                foreach ($this->table as $item1) {
                    $res['table'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
                    $model->function[$n1] = function_::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['instance'])) {
            if (!empty($map['instance'])) {
                $model->instance = [];
                $n1 = 0;
                foreach ($map['instance'] as $item1) {
                    $model->instance[$n1] = instance::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['package'])) {
            if (!empty($map['package'])) {
                $model->package = [];
                $n1 = 0;
                foreach ($map['package'] as $item1) {
                    $model->package[$n1] = package::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['project'])) {
            if (!empty($map['project'])) {
                $model->project = [];
                $n1 = 0;
                foreach ($map['project'] as $item1) {
                    $model->project[$n1] = project::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['resource'])) {
            if (!empty($map['resource'])) {
                $model->resource = [];
                $n1 = 0;
                foreach ($map['resource'] as $item1) {
                    $model->resource[$n1] = resource::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['table'])) {
            if (!empty($map['table'])) {
                $model->table = [];
                $n1 = 0;
                foreach ($map['table'] as $item1) {
                    $model->table[$n1] = table::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
