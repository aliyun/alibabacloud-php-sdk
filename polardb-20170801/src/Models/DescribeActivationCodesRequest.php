<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DescribeActivationCodesRequest extends Model
{
    /**
     * @description The ID of the Alibaba Cloud order. The value can be the ID of a virtual order.
     *
     * This parameter is required.
     *
     * @example 2233****445566
     *
     * @var string
     */
    public $aliyunOrderId;

    /**
     * @example aa:bb:cc:dd:ee:ff
     *
     * @var string
     */
    public $macAddress;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @example 3312548696141831911
     *
     * @var string
     */
    public $systemIdentifier;
    protected $_name = [
        'aliyunOrderId' => 'AliyunOrderId',
        'macAddress' => 'MacAddress',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'systemIdentifier' => 'SystemIdentifier',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunOrderId) {
            $res['AliyunOrderId'] = $this->aliyunOrderId;
        }
        if (null !== $this->macAddress) {
            $res['MacAddress'] = $this->macAddress;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->systemIdentifier) {
            $res['SystemIdentifier'] = $this->systemIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeActivationCodesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunOrderId'])) {
            $model->aliyunOrderId = $map['AliyunOrderId'];
        }
        if (isset($map['MacAddress'])) {
            $model->macAddress = $map['MacAddress'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SystemIdentifier'])) {
            $model->systemIdentifier = $map['SystemIdentifier'];
        }

        return $model;
    }
}
