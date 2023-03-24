<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\UpdateUserGroupRequest;

use AlibabaCloud\Tea\Model;

class attributes extends Model
{
    /**
     * @example 12
     *
     * @var int
     */
    public $idpId;

    /**
     * @example Equal
     *
     * @var string
     */
    public $relation;

    /**
     * @example department
     *
     * @var string
     */
    public $userGroupType;

    /**
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
     * @return attributes
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
