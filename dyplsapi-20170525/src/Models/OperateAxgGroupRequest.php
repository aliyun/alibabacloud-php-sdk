<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class OperateAxgGroupRequest extends Model
{
    /**
     * @description The group ID in the AXG binding.
     *
     * You can view the group ID by using either of the following methods:
     *
     *   On the **Number Pool Management** page in the [Phone Number Protection console](https://dypls.console.aliyun.com/dypls.htm#/account), filter AXG private numbers and click **Number Group G Management** to view the group IDs of number groups G.****
     *   If the [CreateAxgGroup](https://help.aliyun.com/document_detail/110250.html) operation is called to create number group G, the value of **GroupId** in the response of the CreateAxgGroup operation is specified as the value of the request parameter **GroupId** of the OperateAxgGroup operation.
     *
     * This parameter is required.
     * @example 1234
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The phone numbers that you add to number group G. Separate the phone numbers with commas (,). You can add up to 200 phone numbers at a time.
     *
     * This parameter is required.
     * @example 1390000****,1380000****
     *
     * @var string
     */
    public $numbers;

    /**
     * @description The type of the operation on number group G. Valid values:
     *
     *   **addNumbers**: adds phone numbers to number group G.
     *   **deleteNumbers**: deletes phone numbers from number group G.
     *   **overwriteNumbers**: replaces all phone numbers in number group G. All the original phone numbers are deleted from number group G, and new phone numbers are added to number group G.
     *
     * >
     *
     *   When you replace all phone numbers in number group G, the quantity of original phone numbers in number group G cannot exceed 200.
     *
     *   You can add up to 200 phone numbers to number group G at a time.
     *
     * This parameter is required.
     * @example addNumbers
     *
     * @var string
     */
    public $operateType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The key of the phone number pool. Log on to the [Phone Number Protection console](https://dypls.console.aliyun.com/dypls.htm#/account) and view the key of the phone number pool on the **Number Pool Management** page.
     *
     * This parameter is required.
     * @example FC123456
     *
     * @var string
     */
    public $poolKey;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'groupId'              => 'GroupId',
        'numbers'              => 'Numbers',
        'operateType'          => 'OperateType',
        'ownerId'              => 'OwnerId',
        'poolKey'              => 'PoolKey',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->numbers) {
            $res['Numbers'] = $this->numbers;
        }
        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->poolKey) {
            $res['PoolKey'] = $this->poolKey;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OperateAxgGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Numbers'])) {
            $model->numbers = $map['Numbers'];
        }
        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PoolKey'])) {
            $model->poolKey = $map['PoolKey'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
