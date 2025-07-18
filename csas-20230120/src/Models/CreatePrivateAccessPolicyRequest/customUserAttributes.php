<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\CreatePrivateAccessPolicyRequest;

use AlibabaCloud\Tea\Model;

class customUserAttributes extends Model
{
    /**
     * @description The ID of the identity source for the custom user group. Required when the custom user group type is **department**.
     *
     * @example 12
     *
     * @var int
     */
    public $idpId;

    /**
     * @description Relation of the custom user group. Values:
     * - **Equal**: Equal.
     * - **Unequal**: Not equal.
     *
     * @example Equal
     *
     * @var string
     */
    public $relation;

    /**
     * @description Type of the custom user group. Values:
     * - **username**: Username.
     * - **department**: Department.
     * - **email**: Email.
     * - **telephone**: Telephone.
     *
     * @example department
     *
     * @var string
     */
    public $userGroupType;

    /**
     * @description Value of the custom user group attribute.
     * - When the user group type is **username**, it represents the value of the username. The length is 1 to 128 characters, supporting Chinese and uppercase and lowercase English letters, and can include numbers, periods (.), underscores (_), hyphens (-), asterisks (*), at (@) symbols, and spaces.
     * - When the user group type is **department**, it represents the value of the department. For example: OU=Department1,OU=SASE DingTalk.
     * - When the user group type is **email**, it represents the value of the email. For example: username@example.com.
     * - When the user group type is **telephone**, it represents the value of the telephone. For example: 13900001234.
     *
     * @example OU=部门1,OU=SASE钉钉
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'idpId' => 'IdpId',
        'relation' => 'Relation',
        'userGroupType' => 'UserGroupType',
        'value' => 'Value',
    ];

    public function validate() {}

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
