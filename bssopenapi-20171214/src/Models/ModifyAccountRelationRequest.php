<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class ModifyAccountRelationRequest extends Model
{
    /**
     * @description The display name of the member. This helps clarify the scenario in which the account is used.
     *
     * @example Display name of the member
     *
     * @var string
     */
    public $childNick;

    /**
     * @description The ID of the Alibaba Cloud account that is used as the member.
     *
     * @example 1512996702208737
     *
     * @var int
     */
    public $childUserId;

    /**
     * @description The ID of the Alibaba Cloud account that is used as the management account.
     *
     * @example 1738376485192612
     *
     * @var int
     */
    public $parentUserId;

    /**
     * @description The permissions that can be modified. Valid values:
     *
     *   SYNCHRONIZE_FINANCE_IDENTITY: allows the credit control identity to be shared with the member.
     *   SYNCHRONIZE_FINANCE_DISCOUNT_POLICY_TO_TARGET: allows the discount policy to be shared with the member.
     *   FORBID_WITHDRAW_CASH: does not allow the member to withdraw the balance.
     *   FORBID_MANAGE_INVOICE: does not allow the member to manage invoices.
     *   CHECK_FINANCE_INFO: requests to view information about the financial relationship.
     *   MANAGE_TARGET_INVOICE: allows the member to manage invoices.
     *   CHECK_TARGET_CONSUMPTION: allows the member to view the bills.
     *
     * @example SYNCHRONIZE_FINANCE_IDENTITY
     *
     * @var string[]
     */
    public $permissionCodes;

    /**
     * @description The ID of the financial relationship. Set this parameter to the value of the relationId response parameter returned by calling the QueryRelationList operation.
     *
     * @example 51463
     *
     * @var int
     */
    public $relationId;

    /**
     * @description The operation to be performed. Valid values:
     *
     *   ADD
     *   DELETE
     *
     * @example ADD
     *
     * @var string
     */
    public $relationOperation;

    /**
     * @description The type of the financial relationship. Set the value to enterprise_group.
     *
     * @example enterprise_group
     *
     * @var string
     */
    public $relationType;

    /**
     * @description The unique ID of the request. The ID is used to mark a request and troubleshoot a problem.
     *
     * @example request_id
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The roles that can be assigned to the member. You cannot modify the roles.
     *
     * @example trusteeship
     *
     * @var string[]
     */
    public $roleCodes;
    protected $_name = [
        'childNick'         => 'ChildNick',
        'childUserId'       => 'ChildUserId',
        'parentUserId'      => 'ParentUserId',
        'permissionCodes'   => 'PermissionCodes',
        'relationId'        => 'RelationId',
        'relationOperation' => 'RelationOperation',
        'relationType'      => 'RelationType',
        'requestId'         => 'RequestId',
        'roleCodes'         => 'RoleCodes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->childNick) {
            $res['ChildNick'] = $this->childNick;
        }
        if (null !== $this->childUserId) {
            $res['ChildUserId'] = $this->childUserId;
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
        if (null !== $this->relationOperation) {
            $res['RelationOperation'] = $this->relationOperation;
        }
        if (null !== $this->relationType) {
            $res['RelationType'] = $this->relationType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->roleCodes) {
            $res['RoleCodes'] = $this->roleCodes;
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
        if (isset($map['ChildNick'])) {
            $model->childNick = $map['ChildNick'];
        }
        if (isset($map['ChildUserId'])) {
            $model->childUserId = $map['ChildUserId'];
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
        if (isset($map['RelationOperation'])) {
            $model->relationOperation = $map['RelationOperation'];
        }
        if (isset($map['RelationType'])) {
            $model->relationType = $map['RelationType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RoleCodes'])) {
            if (!empty($map['RoleCodes'])) {
                $model->roleCodes = $map['RoleCodes'];
            }
        }

        return $model;
    }
}
