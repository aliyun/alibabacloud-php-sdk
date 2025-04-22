<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class QuerySmsAuthorizationLetterRequest extends Model
{
    /**
     * @var int[]
     */
    public $authorizationLetterIdList;

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
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $signName;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'authorizationLetterIdList' => 'AuthorizationLetterIdList',
        'organizationCode' => 'OrganizationCode',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'signName' => 'SignName',
        'state' => 'State',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->authorizationLetterIdList)) {
            Model::validateArray($this->authorizationLetterIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizationLetterIdList) {
            if (\is_array($this->authorizationLetterIdList)) {
                $res['AuthorizationLetterIdList'] = [];
                $n1 = 0;
                foreach ($this->authorizationLetterIdList as $item1) {
                    $res['AuthorizationLetterIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->organizationCode) {
            $res['OrganizationCode'] = $this->organizationCode;
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

        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AuthorizationLetterIdList'])) {
            if (!empty($map['AuthorizationLetterIdList'])) {
                $model->authorizationLetterIdList = [];
                $n1 = 0;
                foreach ($map['AuthorizationLetterIdList'] as $item1) {
                    $model->authorizationLetterIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['OrganizationCode'])) {
            $model->organizationCode = $map['OrganizationCode'];
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

        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
