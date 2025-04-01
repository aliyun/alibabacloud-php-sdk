<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class CreateWorkspaceRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string[]
     */
    public $envTypes;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'envTypes' => 'EnvTypes',
        'resourceGroupId' => 'ResourceGroupId',
        'workspaceName' => 'WorkspaceName',
    ];

    public function validate()
    {
        if (\is_array($this->envTypes)) {
            Model::validateArray($this->envTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->envTypes) {
            if (\is_array($this->envTypes)) {
                $res['EnvTypes'] = [];
                $n1 = 0;
                foreach ($this->envTypes as $item1) {
                    $res['EnvTypes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->workspaceName) {
            $res['WorkspaceName'] = $this->workspaceName;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['EnvTypes'])) {
            if (!empty($map['EnvTypes'])) {
                $model->envTypes = [];
                $n1 = 0;
                foreach ($map['EnvTypes'] as $item1) {
                    $model->envTypes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['WorkspaceName'])) {
            $model->workspaceName = $map['WorkspaceName'];
        }

        return $model;
    }
}
