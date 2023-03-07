<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class ConfirmRelationRequest extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account that is used as the member.
     *
     * @example 1512996702208737
     *
     * @var int
     */
    public $childUserId;

    /**
     * @description The operation to be performed to confirm the invitation. Valid values:
     *
     *   child_agree: The member accepts the invitation.
     *   child_disagree: The member rejects the invitation.
     *   Canceled by the master account: The management account cancels the confirmation.
     *
     * @example child_agree
     *
     * @var string
     */
    public $confirmCode;

    /**
     * @description The ID of the Alibaba Cloud account that is used as the management account.
     *
     * @example 1738376485192612
     *
     * @var int
     */
    public $parentUserId;

    /**
     * @description The permissions that can be granted to the member. Valid values:
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
     * @description The ID of the financial relationship. Set this parameter to the value of the RelationId response parameter returned by calling the QueryRelationList operation.
     *
     * @example 51463
     *
     * @var int
     */
    public $relationId;

    /**
     * @description The type of the financial relationship. Set the value to enterprise_group.
     *
     * @example Type of the financial relationship
     *
     * @var string
     */
    public $relationType;

    /**
     * @description The unique ID of the request.
     *
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
