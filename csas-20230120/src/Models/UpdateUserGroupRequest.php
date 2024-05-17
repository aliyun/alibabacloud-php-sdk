<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateUserGroupRequest\attributes;
use AlibabaCloud\Tea\Model;

class UpdateUserGroupRequest extends Model
{
    /**
     * @var attributes[]
     */
    public $attributes;

    /**
     * @var string
     */
    public $description;

    /**
     * @example Cover
     *
     * @var string
     */
    public $modifyType;

    /**
     * @description This parameter is required.
     *
     * @example usergroup-6f1ef2fc56b6****
     *
     * @var string
     */
    public $userGroupId;
    protected $_name = [
        'attributes'  => 'Attributes',
        'description' => 'Description',
        'modifyType'  => 'ModifyType',
        'userGroupId' => 'UserGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributes) {
            $res['Attributes'] = [];
            if (null !== $this->attributes && \is_array($this->attributes)) {
                $n = 0;
                foreach ($this->attributes as $item) {
                    $res['Attributes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->modifyType) {
            $res['ModifyType'] = $this->modifyType;
        }
        if (null !== $this->userGroupId) {
            $res['UserGroupId'] = $this->userGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateUserGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attributes'])) {
            if (!empty($map['Attributes'])) {
                $model->attributes = [];
                $n                 = 0;
                foreach ($map['Attributes'] as $item) {
                    $model->attributes[$n++] = null !== $item ? attributes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ModifyType'])) {
            $model->modifyType = $map['ModifyType'];
        }
        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }

        return $model;
    }
}
