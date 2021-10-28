<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\Tea\Model;

class UpdateWorkspaceRequest extends Model
{
    /**
     * @description 工作空间描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 工作空间内任务生命周期
     *
     * @var int
     */
    public $jobLifecycle;

    /**
     * @description 工作空间标签
     *
     * @var string
     */
    public $labels;

    /**
     * @description 工作空间内Ram角色
     *
     * @var string
     */
    public $role;

    /**
     * @description 工作空间名称
     *
     * @var string
     */
    public $workspace;
    protected $_name = [
        'description'  => 'Description',
        'jobLifecycle' => 'JobLifecycle',
        'labels'       => 'Labels',
        'role'         => 'Role',
        'workspace'    => 'Workspace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->jobLifecycle) {
            $res['JobLifecycle'] = $this->jobLifecycle;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->workspace) {
            $res['Workspace'] = $this->workspace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateWorkspaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['JobLifecycle'])) {
            $model->jobLifecycle = $map['JobLifecycle'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Workspace'])) {
            $model->workspace = $map['Workspace'];
        }

        return $model;
    }
}
