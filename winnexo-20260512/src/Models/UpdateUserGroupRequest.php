<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class UpdateUserGroupRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $moveToRoot;

    /**
     * @var string
     */
    public $parentId;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $userGroupId;

    /**
     * @var string
     */
    public $userGroupName;
    protected $_name = [
        'description' => 'description',
        'moveToRoot' => 'moveToRoot',
        'parentId' => 'parentId',
        'tenantId' => 'tenantId',
        'userGroupId' => 'userGroupId',
        'userGroupName' => 'userGroupName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->moveToRoot) {
            $res['moveToRoot'] = $this->moveToRoot;
        }

        if (null !== $this->parentId) {
            $res['parentId'] = $this->parentId;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->userGroupId) {
            $res['userGroupId'] = $this->userGroupId;
        }

        if (null !== $this->userGroupName) {
            $res['userGroupName'] = $this->userGroupName;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['moveToRoot'])) {
            $model->moveToRoot = $map['moveToRoot'];
        }

        if (isset($map['parentId'])) {
            $model->parentId = $map['parentId'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['userGroupId'])) {
            $model->userGroupId = $map['userGroupId'];
        }

        if (isset($map['userGroupName'])) {
            $model->userGroupName = $map['userGroupName'];
        }

        return $model;
    }
}
