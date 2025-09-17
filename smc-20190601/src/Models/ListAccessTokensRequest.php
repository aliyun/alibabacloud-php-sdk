<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models;

use AlibabaCloud\Dara\Model;

class ListAccessTokensRequest extends Model
{
    /**
     * @var string[]
     */
    public $accessTokenId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'accessTokenId' => 'AccessTokenId',
        'name' => 'Name',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->accessTokenId)) {
            Model::validateArray($this->accessTokenId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessTokenId) {
            if (\is_array($this->accessTokenId)) {
                $res['AccessTokenId'] = [];
                $n1 = 0;
                foreach ($this->accessTokenId as $item1) {
                    $res['AccessTokenId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
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
        if (isset($map['AccessTokenId'])) {
            if (!empty($map['AccessTokenId'])) {
                $model->accessTokenId = [];
                $n1 = 0;
                foreach ($map['AccessTokenId'] as $item1) {
                    $model->accessTokenId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
