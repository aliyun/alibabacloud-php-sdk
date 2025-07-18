<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\UpdatePrivateAccessPolicyRequest;

use AlibabaCloud\Tea\Model;

class customUserAttributes extends Model
{
    /**
     * @description The identity source ID of the custom user group. Required when the custom user group type is **department**.
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
     * This parameter is required.
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
     * This parameter is required.
     *
     * @example department
     *
     * @var string
     */
    public $userGroupType;

    /**
     * @description Custom user group attribute values. - When the user group type is **username**, it represents the value of the username. The length should be 1 to 128 characters, supporting Chinese and case-sensitive English letters, and can include numbers, half-width periods (.), underscores (_), hyphens (-), asterisks (*), at symbols (@), and spaces. - When the user group type is **department**, it represents the value of the department. For example: OU=Department1,OU=SASE DingTalk. - When the user group type is **email**, it represents the value of the email. For example: username@example.com. - When the user group type is **telephone**, it represents the value of the mobile phone. For example: 13900001234.
     *
     * This parameter is required.
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
