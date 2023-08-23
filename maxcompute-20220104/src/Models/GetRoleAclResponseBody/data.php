<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetRoleAclResponseBody;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetRoleAclResponseBody\data\function_;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetRoleAclResponseBody\data\instance;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetRoleAclResponseBody\data\package;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetRoleAclResponseBody\data\project;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetRoleAclResponseBody\data\resource;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetRoleAclResponseBody\data\table;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The function.
     *
     * @var function_[]
     */
    public $function;

    /**
     * @description The instance.
     *
     * @var instance[]
     */
    public $instance;

    /**
     * @description The package.
     *
     * @var package[]
     */
    public $package;

    /**
     * @description The project.
     *
     * @var project[]
     */
    public $project;

    /**
     * @description The resource.
     *
     * @var resource[]
     */
    public $resource;

    /**
     * @description The table.
     *
     * @var table[]
     */
    public $table;
    protected $_name = [
        'function' => 'function',
        'instance' => 'instance',
        'package'  => 'package',
        'project'  => 'project',
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
        if (null !== $this->instance) {
            $res['instance'] = [];
            if (null !== $this->instance && \is_array($this->instance)) {
                $n = 0;
                foreach ($this->instance as $item) {
                    $res['instance'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->package) {
            $res['package'] = [];
            if (null !== $this->package && \is_array($this->package)) {
                $n = 0;
                foreach ($this->package as $item) {
                    $res['package'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->project) {
            $res['project'] = [];
            if (null !== $this->project && \is_array($this->project)) {
                $n = 0;
                foreach ($this->project as $item) {
                    $res['project'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return data
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
        if (isset($map['instance'])) {
            if (!empty($map['instance'])) {
                $model->instance = [];
                $n               = 0;
                foreach ($map['instance'] as $item) {
                    $model->instance[$n++] = null !== $item ? instance::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['package'])) {
            if (!empty($map['package'])) {
                $model->package = [];
                $n              = 0;
                foreach ($map['package'] as $item) {
                    $model->package[$n++] = null !== $item ? package::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['project'])) {
            if (!empty($map['project'])) {
                $model->project = [];
                $n              = 0;
                foreach ($map['project'] as $item) {
                    $model->project[$n++] = null !== $item ? project::fromMap($item) : $item;
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
