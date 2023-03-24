<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class UpdateUserGroupShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $attributesShrink;

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
     * @example usergroup-6f1ef2fc56b6****
     *
     * @var string
     */
    public $userGroupId;
    protected $_name = [
        'attributesShrink' => 'Attributes',
        'description'      => 'Description',
        'modifyType'       => 'ModifyType',
        'userGroupId'      => 'UserGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributesShrink) {
            $res['Attributes'] = $this->attributesShrink;
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
     * @return UpdateUserGroupShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attributes'])) {
            $model->attributesShrink = $map['Attributes'];
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
