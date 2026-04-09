<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CreateDataPermissionsRequest\permissionUserInfos;

class CreateDataPermissionsRequest extends Model
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
     * @var permissionUserInfos[]
     */
    public $permissionUserInfos;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'dataId' => 'DataId',
        'dataType' => 'DataType',
        'permissionUserInfos' => 'PermissionUserInfos',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->permissionUserInfos)) {
            Model::validateArray($this->permissionUserInfos);
        }
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

        if (null !== $this->permissionUserInfos) {
            if (\is_array($this->permissionUserInfos)) {
                $res['PermissionUserInfos'] = [];
                $n1 = 0;
                foreach ($this->permissionUserInfos as $item1) {
                    $res['PermissionUserInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['PermissionUserInfos'])) {
                $model->permissionUserInfos = [];
                $n1 = 0;
                foreach ($map['PermissionUserInfos'] as $item1) {
                    $model->permissionUserInfos[$n1] = permissionUserInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
