<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;

class CreateContextDatabaseWorkspaceRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var bool
     */
    public $generateInitialKey;

    /**
     * @var string
     */
    public $memberName;

    /**
     * @var string
     */
    public $permissionMode;

    /**
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'generateInitialKey' => 'GenerateInitialKey',
        'memberName' => 'MemberName',
        'permissionMode' => 'PermissionMode',
        'workspaceName' => 'WorkspaceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->generateInitialKey) {
            $res['GenerateInitialKey'] = $this->generateInitialKey;
        }

        if (null !== $this->memberName) {
            $res['MemberName'] = $this->memberName;
        }

        if (null !== $this->permissionMode) {
            $res['PermissionMode'] = $this->permissionMode;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['GenerateInitialKey'])) {
            $model->generateInitialKey = $map['GenerateInitialKey'];
        }

        if (isset($map['MemberName'])) {
            $model->memberName = $map['MemberName'];
        }

        if (isset($map['PermissionMode'])) {
            $model->permissionMode = $map['PermissionMode'];
        }

        if (isset($map['WorkspaceName'])) {
            $model->workspaceName = $map['WorkspaceName'];
        }

        return $model;
    }
}
