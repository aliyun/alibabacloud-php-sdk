<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class CreateDataPermissionsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $dataId;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $permissionUserInfosShrink;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'dataId' => 'DataId',
        'dataType' => 'DataType',
        'permissionUserInfosShrink' => 'PermissionUserInfos',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }

        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }

        if (null !== $this->permissionUserInfosShrink) {
            $res['PermissionUserInfos'] = $this->permissionUserInfosShrink;
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
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }

        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }

        if (isset($map['PermissionUserInfos'])) {
            $model->permissionUserInfosShrink = $map['PermissionUserInfos'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
