<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\Tea\Model;

class CreateWorkspaceRequest extends Model
{
    /**
     * @example TestToken
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example This is a test workspace
     *
     * @var string
     */
    public $description;

    /**
     * @example 30
     *
     * @var int
     */
    public $jobLifecycle;

    /**
     * @example {"key":"value"}
     *
     * @var string
     */
    public $labels;

    /**
     * @example TestRole
     *
     * @var string
     */
    public $role;

    /**
     * @example oss://gstor-default-workspace-cn-shanghai-bae3193d/
     *
     * @var string
     */
    public $storage;

    /**
     * @example TestWorkspace
     *
     * @var string
     */
    public $workspace;
    protected $_name = [
        'clientToken'  => 'ClientToken',
        'description'  => 'Description',
        'jobLifecycle' => 'JobLifecycle',
        'labels'       => 'Labels',
        'role'         => 'Role',
        'storage'      => 'Storage',
        'workspace'    => 'Workspace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
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
        if (null !== $this->storage) {
            $res['Storage'] = $this->storage;
        }
        if (null !== $this->workspace) {
            $res['Workspace'] = $this->workspace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateWorkspaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
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
        if (isset($map['Storage'])) {
            $model->storage = $map['Storage'];
        }
        if (isset($map['Workspace'])) {
            $model->workspace = $map['Workspace'];
        }

        return $model;
    }
}
