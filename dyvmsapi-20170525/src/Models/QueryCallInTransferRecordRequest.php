<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class QueryCallInTransferRecordRequest extends Model
{
    /**
     * @description The calling number of the inbound call.
     *
     * @example 150****0000
     *
     * @var string
     */
    public $callInCaller;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The page number. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries per page. Valid values: 1 to 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The phone number to which a call is transferred.
     *
     * @example 400****
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description The time at which call transfer records are queried, in the YYYY-MM-DD hh:mm:ss format.
     *
     * > The query result is all the call transfer records of the specified day.
     * @example 2021-06-28 00:00:00
     *
     * @var string
     */
    public $queryDate;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'callInCaller'         => 'CallInCaller',
        'ownerId'              => 'OwnerId',
        'pageNo'               => 'PageNo',
        'pageSize'             => 'PageSize',
        'phoneNumber'          => 'PhoneNumber',
        'queryDate'            => 'QueryDate',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callInCaller) {
            $res['CallInCaller'] = $this->callInCaller;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->queryDate) {
            $res['QueryDate'] = $this->queryDate;
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
     * @return QueryCallInTransferRecordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallInCaller'])) {
            $model->callInCaller = $map['CallInCaller'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['QueryDate'])) {
            $model->queryDate = $map['QueryDate'];
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
