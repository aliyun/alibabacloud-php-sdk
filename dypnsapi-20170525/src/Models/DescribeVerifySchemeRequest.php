<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class DescribeVerifySchemeRequest extends Model
{
    /**
     * @description The user ID.
     *
     * @example 1234****
     *
     * @var int
     */
    public $customerId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The service code.
     *
     * @example FC10000010643****
     *
     * @var string
     */
    public $schemeCode;
    protected $_name = [
        'customerId'           => 'CustomerId',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'schemeCode'           => 'SchemeCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customerId) {
            $res['CustomerId'] = $this->customerId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->schemeCode) {
            $res['SchemeCode'] = $this->schemeCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVerifySchemeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomerId'])) {
            $model->customerId = $map['CustomerId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SchemeCode'])) {
            $model->schemeCode = $map['SchemeCode'];
        }

        return $model;
    }
}
