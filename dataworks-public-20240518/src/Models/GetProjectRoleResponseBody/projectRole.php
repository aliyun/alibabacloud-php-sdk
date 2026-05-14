<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetProjectRoleResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetProjectRoleResponseBody\projectRole\modulePermissions;

class projectRole extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var modulePermissions[]
     */
    public $modulePermissions;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'code' => 'Code',
        'modulePermissions' => 'ModulePermissions',
        'name' => 'Name',
        'projectId' => 'ProjectId',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->modulePermissions)) {
            Model::validateArray($this->modulePermissions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->modulePermissions) {
            if (\is_array($this->modulePermissions)) {
                $res['ModulePermissions'] = [];
                $n1 = 0;
                foreach ($this->modulePermissions as $item1) {
                    $res['ModulePermissions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['ModulePermissions'])) {
            if (!empty($map['ModulePermissions'])) {
                $model->modulePermissions = [];
                $n1 = 0;
                foreach ($map['ModulePermissions'] as $item1) {
                    $model->modulePermissions[$n1] = modulePermissions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
