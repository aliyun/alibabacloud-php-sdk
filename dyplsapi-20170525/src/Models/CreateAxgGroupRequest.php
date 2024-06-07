<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class CreateAxgGroupRequest extends Model
{
    /**
     * @description The name of number group G. If the name of number group G is not specified, the ID of number group G is used as the name of number group G.
     *
     * >  The value must be 1 to 128 characters in length.
     * @example Aliyun
     *
     * @var string
     */
    public $name;

    /**
     * @description The phone numbers that you add to number group G. Separate multiple phone numbers with commas (,). A maximum of 200 phone numbers can be added to number group G.
     *
     * @example 1390000****,1380000****
     *
     * @var string
     */
    public $numbers;

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
     * @description The remarks of number group G. The value must be 0 to 256 characters in length.
     *
     * @example test
     *
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'name'                 => 'Name',
        'numbers'              => 'Numbers',
        'ownerId'              => 'OwnerId',
        'poolKey'              => 'PoolKey',
        'remark'               => 'Remark',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->numbers) {
            $res['Numbers'] = $this->numbers;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->poolKey) {
            $res['PoolKey'] = $this->poolKey;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
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
     * @return CreateAxgGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Numbers'])) {
            $model->numbers = $map['Numbers'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PoolKey'])) {
            $model->poolKey = $map['PoolKey'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
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
