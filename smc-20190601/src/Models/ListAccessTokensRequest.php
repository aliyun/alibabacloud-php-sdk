<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models;

use AlibabaCloud\Tea\Model;

class ListAccessTokensRequest extends Model
{
    /**
     * @description The information about activation codes.
     *
     * @var string[]
     */
    public $accessTokenId;

    /**
     * @description The name of the activation code.
     *
     * @example test_name
     *
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
     * @description The status of the activation code. Valid values:
     *
     *   activated
     *   unactivated
     *   expired
     *
     * @example activated
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'accessTokenId'        => 'AccessTokenId',
        'name'                 => 'Name',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'status'               => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessTokenId) {
            $res['AccessTokenId'] = $this->accessTokenId;
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

    /**
     * @param array $map
     *
     * @return ListAccessTokensRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessTokenId'])) {
            if (!empty($map['AccessTokenId'])) {
                $model->accessTokenId = $map['AccessTokenId'];
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
