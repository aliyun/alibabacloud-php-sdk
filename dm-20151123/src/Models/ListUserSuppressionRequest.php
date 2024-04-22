<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Tea\Model;

class ListUserSuppressionRequest extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var int
     */
    public $endBounceTime;

    /**
     * @var int
     */
    public $endCreateTime;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $pageNo;

    /**
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
     * @var int
     */
    public $startBounceTime;

    /**
     * @var int
     */
    public $startCreateTime;
    protected $_name = [
        'address'              => 'Address',
        'endBounceTime'        => 'EndBounceTime',
        'endCreateTime'        => 'EndCreateTime',
        'ownerId'              => 'OwnerId',
        'pageNo'               => 'PageNo',
        'pageSize'             => 'PageSize',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'startBounceTime'      => 'StartBounceTime',
        'startCreateTime'      => 'StartCreateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->endBounceTime) {
            $res['EndBounceTime'] = $this->endBounceTime;
        }
        if (null !== $this->endCreateTime) {
            $res['EndCreateTime'] = $this->endCreateTime;
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
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->startBounceTime) {
            $res['StartBounceTime'] = $this->startBounceTime;
        }
        if (null !== $this->startCreateTime) {
            $res['StartCreateTime'] = $this->startCreateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserSuppressionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['EndBounceTime'])) {
            $model->endBounceTime = $map['EndBounceTime'];
        }
        if (isset($map['EndCreateTime'])) {
            $model->endCreateTime = $map['EndCreateTime'];
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
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['StartBounceTime'])) {
            $model->startBounceTime = $map['StartBounceTime'];
        }
        if (isset($map['StartCreateTime'])) {
            $model->startCreateTime = $map['StartCreateTime'];
        }

        return $model;
    }
}
