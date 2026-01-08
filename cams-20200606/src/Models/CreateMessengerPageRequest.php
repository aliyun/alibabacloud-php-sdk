<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Dara\Model;

class CreateMessengerPageRequest extends Model
{
    /**
     * @var string[]
     */
    public $adAccountIds;

    /**
     * @var string
     */
    public $authenticationCode;

    /**
     * @var string
     */
    public $businessId;

    /**
     * @var string
     */
    public $custSpaceId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $pageId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'adAccountIds' => 'AdAccountIds',
        'authenticationCode' => 'AuthenticationCode',
        'businessId' => 'BusinessId',
        'custSpaceId' => 'CustSpaceId',
        'ownerId' => 'OwnerId',
        'pageId' => 'PageId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
        if (\is_array($this->adAccountIds)) {
            Model::validateArray($this->adAccountIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adAccountIds) {
            if (\is_array($this->adAccountIds)) {
                $res['AdAccountIds'] = [];
                $n1 = 0;
                foreach ($this->adAccountIds as $item1) {
                    $res['AdAccountIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->authenticationCode) {
            $res['AuthenticationCode'] = $this->authenticationCode;
        }

        if (null !== $this->businessId) {
            $res['BusinessId'] = $this->businessId;
        }

        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->pageId) {
            $res['PageId'] = $this->pageId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdAccountIds'])) {
            if (!empty($map['AdAccountIds'])) {
                $model->adAccountIds = [];
                $n1 = 0;
                foreach ($map['AdAccountIds'] as $item1) {
                    $model->adAccountIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AuthenticationCode'])) {
            $model->authenticationCode = $map['AuthenticationCode'];
        }

        if (isset($map['BusinessId'])) {
            $model->businessId = $map['BusinessId'];
        }

        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PageId'])) {
            $model->pageId = $map['PageId'];
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
