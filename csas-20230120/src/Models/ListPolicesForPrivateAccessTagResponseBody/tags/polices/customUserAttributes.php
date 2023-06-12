<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListPolicesForPrivateAccessTagResponseBody\tags\polices;

use AlibabaCloud\Tea\Model;

class customUserAttributes extends Model
{
    /**
     * @description 用户组的身份源ID。当自定义用户组类型为**department**时，存在该值。
     *
     * @example 12
     *
     * @var int
     */
    public $idpId;

    /**
     * @description 用户组的关系。取值：
     * - **Equal**：等于。
     * - **Unequal**：不等于。
     * @example Equal
     *
     * @var string
     */
    public $relation;

    /**
     * @description 用户组的类型。取值：
     * - **username**：用户名。
     * - **department**：部门。
     * - **email**：邮箱。
     * - **telephone**：手机。
     * @example department
     *
     * @var string
     */
    public $userGroupType;

    /**
     * @description 用户组属性的值。
     * - 当用户组类型为**username**时，表示用户名的值。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。
     * - 当用户组类型为**department**时，表示部门的值。如：OU=部门1,OU=SASE钉钉。
     * - 当用户组类型为**email**时，表示邮箱的值。如：username@example.com。
     * - 当用户组类型为**telephone**时，表示手机的值。如：13900001234。
     * @example OU=部门1,OU=SASE钉钉
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'idpId'         => 'IdpId',
        'relation'      => 'Relation',
        'userGroupType' => 'UserGroupType',
        'value'         => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->idpId) {
            $res['IdpId'] = $this->idpId;
        }
        if (null !== $this->relation) {
            $res['Relation'] = $this->relation;
        }
        if (null !== $this->userGroupType) {
            $res['UserGroupType'] = $this->userGroupType;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customUserAttributes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IdpId'])) {
            $model->idpId = $map['IdpId'];
        }
        if (isset($map['Relation'])) {
            $model->relation = $map['Relation'];
        }
        if (isset($map['UserGroupType'])) {
            $model->userGroupType = $map['UserGroupType'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
