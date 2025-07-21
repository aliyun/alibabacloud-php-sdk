<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Tea\Model;

class CreateReceiverRequest extends Model
{
    /**
     * @description List description.
     *
     * @example the description
     *
     * @var string
     */
    public $desc;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description List alias, an email address less than 30 characters long.
     *
     * This parameter is required.
     *
     * @example a***@example.net
     *
     * @var string
     */
    public $receiversAlias;

    /**
     * @description List name, must be unique, with a length of 1-30 characters.
     *
     * This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $receiversName;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'desc' => 'Desc',
        'ownerId' => 'OwnerId',
        'receiversAlias' => 'ReceiversAlias',
        'receiversName' => 'ReceiversName',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->receiversAlias) {
            $res['ReceiversAlias'] = $this->receiversAlias;
        }
        if (null !== $this->receiversName) {
            $res['ReceiversName'] = $this->receiversName;
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
     * @return CreateReceiverRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ReceiversAlias'])) {
            $model->receiversAlias = $map['ReceiversAlias'];
        }
        if (isset($map['ReceiversName'])) {
            $model->receiversName = $map['ReceiversName'];
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
