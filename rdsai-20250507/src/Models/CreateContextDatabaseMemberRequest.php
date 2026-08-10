<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;

class CreateContextDatabaseMemberRequest extends Model
{
    /**
     * @var bool
     */
    public $generateInitialKey;

    /**
     * @var string
     */
    public $initialKeyName;

    /**
     * @var string
     */
    public $memberName;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'generateInitialKey' => 'GenerateInitialKey',
        'initialKeyName' => 'InitialKeyName',
        'memberName' => 'MemberName',
        'role' => 'Role',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->generateInitialKey) {
            $res['GenerateInitialKey'] = $this->generateInitialKey;
        }

        if (null !== $this->initialKeyName) {
            $res['InitialKeyName'] = $this->initialKeyName;
        }

        if (null !== $this->memberName) {
            $res['MemberName'] = $this->memberName;
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['GenerateInitialKey'])) {
            $model->generateInitialKey = $map['GenerateInitialKey'];
        }

        if (isset($map['InitialKeyName'])) {
            $model->initialKeyName = $map['InitialKeyName'];
        }

        if (isset($map['MemberName'])) {
            $model->memberName = $map['MemberName'];
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
