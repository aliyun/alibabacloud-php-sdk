<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class ConfirmRelationRequest extends Model
{
    /**
     * @example 1512996702208737
     *
     * @var int
     */
    public $childUserId;

    /**
     * @example child_agree
     *
     * @var string
     */
    public $confirmCode;

    /**
     * @example 1738376485192612
     *
     * @var int
     */
    public $parentUserId;

    /**
     * @example SYNCHRONIZE_FINANCE_IDENTITY
     *
     * @var string[]
     */
    public $permissionCodes;

    /**
     * @example 51463
     *
     * @var int
     */
    public $relationId;

    /**
     * @var string
     */
    public $relationType;

    /**
     * @example request_id
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'childUserId'     => 'ChildUserId',
        'confirmCode'     => 'ConfirmCode',
        'parentUserId'    => 'ParentUserId',
        'permissionCodes' => 'PermissionCodes',
        'relationId'      => 'RelationId',
        'relationType'    => 'RelationType',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->childUserId) {
            $res['ChildUserId'] = $this->childUserId;
        }
        if (null !== $this->confirmCode) {
            $res['ConfirmCode'] = $this->confirmCode;
        }
        if (null !== $this->parentUserId) {
            $res['ParentUserId'] = $this->parentUserId;
        }
        if (null !== $this->permissionCodes) {
            $res['PermissionCodes'] = $this->permissionCodes;
        }
        if (null !== $this->relationId) {
            $res['RelationId'] = $this->relationId;
        }
        if (null !== $this->relationType) {
            $res['RelationType'] = $this->relationType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfirmRelationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChildUserId'])) {
            $model->childUserId = $map['ChildUserId'];
        }
        if (isset($map['ConfirmCode'])) {
            $model->confirmCode = $map['ConfirmCode'];
        }
        if (isset($map['ParentUserId'])) {
            $model->parentUserId = $map['ParentUserId'];
        }
        if (isset($map['PermissionCodes'])) {
            if (!empty($map['PermissionCodes'])) {
                $model->permissionCodes = $map['PermissionCodes'];
            }
        }
        if (isset($map['RelationId'])) {
            $model->relationId = $map['RelationId'];
        }
        if (isset($map['RelationType'])) {
            $model->relationType = $map['RelationType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
