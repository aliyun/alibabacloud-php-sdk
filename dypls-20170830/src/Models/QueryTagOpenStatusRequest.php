<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypls\V20170830\Models;

use AlibabaCloud\Tea\Model;

class QueryTagOpenStatusRequest extends Model
{
    /**
     * @var string
     */
    public $attributeKey;

    /**
     * @var int
     */
    public $bizType;

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
    public $subAttributeKey;
    protected $_name = [
        'attributeKey'         => 'AttributeKey',
        'bizType'              => 'BizType',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'subAttributeKey'      => 'SubAttributeKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributeKey) {
            $res['AttributeKey'] = $this->attributeKey;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
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
        if (null !== $this->subAttributeKey) {
            $res['SubAttributeKey'] = $this->subAttributeKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTagOpenStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttributeKey'])) {
            $model->attributeKey = $map['AttributeKey'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
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
        if (isset($map['SubAttributeKey'])) {
            $model->subAttributeKey = $map['SubAttributeKey'];
        }

        return $model;
    }
}
