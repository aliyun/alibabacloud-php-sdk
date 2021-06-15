<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class ModifyAccountRelationRequest extends Model
{
    /**
     * @var string
     */
    public $relationType;

    /**
     * @var string
     */
    public $relationOperation;

    /**
     * @var int
     */
    public $parentUserId;

    /**
     * @var string
     */
    public $childNick;

    /**
     * @var int
     */
    public $childUserId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $roleCodes;

    /**
     * @var string[]
     */
    public $permissionCodes;
    protected $_name = [
        'relationType'      => 'RelationType',
        'relationOperation' => 'RelationOperation',
        'parentUserId'      => 'ParentUserId',
        'childNick'         => 'ChildNick',
        'childUserId'       => 'ChildUserId',
        'requestId'         => 'RequestId',
        'roleCodes'         => 'RoleCodes',
        'permissionCodes'   => 'PermissionCodes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->relationType) {
            $res['RelationType'] = $this->relationType;
        }
        if (null !== $this->relationOperation) {
            $res['RelationOperation'] = $this->relationOperation;
        }
        if (null !== $this->parentUserId) {
            $res['ParentUserId'] = $this->parentUserId;
        }
        if (null !== $this->childNick) {
            $res['ChildNick'] = $this->childNick;
        }
        if (null !== $this->childUserId) {
            $res['ChildUserId'] = $this->childUserId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->roleCodes) {
            $res['RoleCodes'] = $this->roleCodes;
        }
        if (null !== $this->permissionCodes) {
            $res['PermissionCodes'] = $this->permissionCodes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAccountRelationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RelationType'])) {
            $model->relationType = $map['RelationType'];
        }
        if (isset($map['RelationOperation'])) {
            $model->relationOperation = $map['RelationOperation'];
        }
        if (isset($map['ParentUserId'])) {
            $model->parentUserId = $map['ParentUserId'];
        }
        if (isset($map['ChildNick'])) {
            $model->childNick = $map['ChildNick'];
        }
        if (isset($map['ChildUserId'])) {
            $model->childUserId = $map['ChildUserId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RoleCodes'])) {
            if (!empty($map['RoleCodes'])) {
                $model->roleCodes = $map['RoleCodes'];
            }
        }
        if (isset($map['PermissionCodes'])) {
            if (!empty($map['PermissionCodes'])) {
                $model->permissionCodes = $map['PermissionCodes'];
            }
        }

        return $model;
    }
}
