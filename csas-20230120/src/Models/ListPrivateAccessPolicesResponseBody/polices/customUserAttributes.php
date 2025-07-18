<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListPrivateAccessPolicesResponseBody\polices;

use AlibabaCloud\Tea\Model;

class customUserAttributes extends Model
{
    /**
     * @description The ID of the identity provider (IdP) for the user group. If the value of UserGroupType is **department**, this parameter is returned.
     *
     * @example 12
     *
     * @var int
     */
    public $idpId;

    /**
     * @description The logical operator for the user group. Valid values:
     *
     *   **Equal**
     *   **Unequal**
     *
     * @example Equal
     *
     * @var string
     */
    public $relation;

    /**
     * @description The type of the user group, which is the key of the attribute. Valid values:
     *
     *   **username**
     *   **department**
     *   **email**
     *   **telephone**
     *
     * @example department
     *
     * @var string
     */
    public $userGroupType;

    /**
     * @description The value of the attribute.
     *
     *   If the value of UserGroupType is **username**, the value of this parameter is a username. The value must be 1 to 128 characters in length and can contain letters, digits, hyphens (-), underscores (_), and periods (.).
     *   If the value of UserGroupType is **department**, the value of this parameter is a department. Examples: OU=Department 1, OU=SASE DingTalk.
     *   If the value of UserGroupType is **email**, the value of this parameter is an email address. Example: username@example.com.
     *   If the value of UserGroupType is **telephone**, the value of this parameter is a mobile phone number. Example: 13900001234.
     *
     * @example OU=Department 1, OU=SASE DingTalk
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
