<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class CreateSmsAuthorizationLetterRequest extends Model
{
    /**
     * @var string
     */
    public $authorization;

    /**
     * @var string
     */
    public $authorizationLetterExpDate;

    /**
     * @var string
     */
    public $authorizationLetterName;

    /**
     * @var string
     */
    public $authorizationLetterPic;

    /**
     * @var string
     */
    public $organizationCode;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $proxyAuthorization;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string[]
     */
    public $signList;
    protected $_name = [
        'authorization' => 'Authorization',
        'authorizationLetterExpDate' => 'AuthorizationLetterExpDate',
        'authorizationLetterName' => 'AuthorizationLetterName',
        'authorizationLetterPic' => 'AuthorizationLetterPic',
        'organizationCode' => 'OrganizationCode',
        'ownerId' => 'OwnerId',
        'proxyAuthorization' => 'ProxyAuthorization',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'signList' => 'SignList',
    ];

    public function validate()
    {
        if (\is_array($this->signList)) {
            Model::validateArray($this->signList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorization) {
            $res['Authorization'] = $this->authorization;
        }

        if (null !== $this->authorizationLetterExpDate) {
            $res['AuthorizationLetterExpDate'] = $this->authorizationLetterExpDate;
        }

        if (null !== $this->authorizationLetterName) {
            $res['AuthorizationLetterName'] = $this->authorizationLetterName;
        }

        if (null !== $this->authorizationLetterPic) {
            $res['AuthorizationLetterPic'] = $this->authorizationLetterPic;
        }

        if (null !== $this->organizationCode) {
            $res['OrganizationCode'] = $this->organizationCode;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->proxyAuthorization) {
            $res['ProxyAuthorization'] = $this->proxyAuthorization;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->signList) {
            if (\is_array($this->signList)) {
                $res['SignList'] = [];
                $n1 = 0;
                foreach ($this->signList as $item1) {
                    $res['SignList'][$n1++] = $item1;
                }
            }
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
        if (isset($map['Authorization'])) {
            $model->authorization = $map['Authorization'];
        }

        if (isset($map['AuthorizationLetterExpDate'])) {
            $model->authorizationLetterExpDate = $map['AuthorizationLetterExpDate'];
        }

        if (isset($map['AuthorizationLetterName'])) {
            $model->authorizationLetterName = $map['AuthorizationLetterName'];
        }

        if (isset($map['AuthorizationLetterPic'])) {
            $model->authorizationLetterPic = $map['AuthorizationLetterPic'];
        }

        if (isset($map['OrganizationCode'])) {
            $model->organizationCode = $map['OrganizationCode'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['ProxyAuthorization'])) {
            $model->proxyAuthorization = $map['ProxyAuthorization'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['SignList'])) {
            if (!empty($map['SignList'])) {
                $model->signList = [];
                $n1 = 0;
                foreach ($map['SignList'] as $item1) {
                    $model->signList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
