<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Tea\Model;

class CreateWorkspaceRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example description
     *
     * @var string
     */
    public $description;

    /**
     * @example display name
     *
     * @var string
     */
    public $displayName;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $envTypes;

    /**
     * @description This parameter is required.
     *
     * @example workspace_example
     *
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'description'   => 'Description',
        'displayName'   => 'DisplayName',
        'envTypes'      => 'EnvTypes',
        'workspaceName' => 'WorkspaceName',
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
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->envTypes) {
            $res['EnvTypes'] = $this->envTypes;
        }
        if (null !== $this->workspaceName) {
            $res['WorkspaceName'] = $this->workspaceName;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['EnvTypes'])) {
            if (!empty($map['EnvTypes'])) {
                $model->envTypes = $map['EnvTypes'];
            }
        }
        if (isset($map['WorkspaceName'])) {
            $model->workspaceName = $map['WorkspaceName'];
        }

        return $model;
    }
}
