<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class GetAuthorizationUrlRequest extends Model
{
    /**
     * @var string
     */
    public $endDate;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $phoneNo;

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
    public $schemeId;
    protected $_name = [
        'endDate'              => 'EndDate',
        'ownerId'              => 'OwnerId',
        'phoneNo'              => 'PhoneNo',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'schemeId'             => 'SchemeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->phoneNo) {
            $res['PhoneNo'] = $this->phoneNo;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->schemeId) {
            $res['SchemeId'] = $this->schemeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAuthorizationUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PhoneNo'])) {
            $model->phoneNo = $map['PhoneNo'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SchemeId'])) {
            $model->schemeId = $map['SchemeId'];
        }

        return $model;
    }
}
