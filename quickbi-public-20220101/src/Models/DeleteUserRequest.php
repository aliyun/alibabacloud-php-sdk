<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class DeleteUserRequest extends Model
{
    /**
     * @description The ID of the successor. If not empty, the report resources in the workspace of the deleted user will be transferred to the successor; otherwise, they will be transferred to the space owner.
     * - The successor cannot be an organization visitor
     * - The permissions of the successor in the workspace must not be less than those of the deleted user, with management permissions > development permissions > sharing permissions > viewing permissions
     * - If the successor is not in the workspace, they will be automatically added to the workspace
     *
     * @example f5****afccd9e434a274
     *
     * @var string
     */
    public $transferUserId;

    /**
     * @description The ID of the user to be deleted. This user ID is the Quick BI UserID, not the Alibaba Cloud UID.
     *
     * This parameter is required.
     *
     * @example fe67f61a35a94b7da1a34ba174a7****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'transferUserId' => 'TransferUserId',
        'userId' => 'UserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->transferUserId) {
            $res['TransferUserId'] = $this->transferUserId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TransferUserId'])) {
            $model->transferUserId = $map['TransferUserId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
