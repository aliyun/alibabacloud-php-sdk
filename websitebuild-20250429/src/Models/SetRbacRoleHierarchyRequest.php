<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class SetRbacRoleHierarchyRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $childRoleId;

    /**
     * @var string
     */
    public $parentRoleId;
    protected $_name = [
        'bizId' => 'BizId',
        'childRoleId' => 'ChildRoleId',
        'parentRoleId' => 'ParentRoleId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->childRoleId) {
            $res['ChildRoleId'] = $this->childRoleId;
        }

        if (null !== $this->parentRoleId) {
            $res['ParentRoleId'] = $this->parentRoleId;
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['ChildRoleId'])) {
            $model->childRoleId = $map['ChildRoleId'];
        }

        if (isset($map['ParentRoleId'])) {
            $model->parentRoleId = $map['ParentRoleId'];
        }

        return $model;
    }
}
