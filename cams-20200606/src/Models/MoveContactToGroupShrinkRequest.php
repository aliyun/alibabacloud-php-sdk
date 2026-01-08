<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Dara\Model;

class MoveContactToGroupShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $bizCode;

    /**
     * @var string
     */
    public $bizExtendShrink;

    /**
     * @var string
     */
    public $contacts;

    /**
     * @var string
     */
    public $linkExistGroups;

    /**
     * @var string
     */
    public $linkNewGroups;

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
    protected $_name = [
        'bizCode' => 'BizCode',
        'bizExtendShrink' => 'BizExtend',
        'contacts' => 'Contacts',
        'linkExistGroups' => 'LinkExistGroups',
        'linkNewGroups' => 'LinkNewGroups',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }

        if (null !== $this->bizExtendShrink) {
            $res['BizExtend'] = $this->bizExtendShrink;
        }

        if (null !== $this->contacts) {
            $res['Contacts'] = $this->contacts;
        }

        if (null !== $this->linkExistGroups) {
            $res['LinkExistGroups'] = $this->linkExistGroups;
        }

        if (null !== $this->linkNewGroups) {
            $res['LinkNewGroups'] = $this->linkNewGroups;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }

        if (isset($map['BizExtend'])) {
            $model->bizExtendShrink = $map['BizExtend'];
        }

        if (isset($map['Contacts'])) {
            $model->contacts = $map['Contacts'];
        }

        if (isset($map['LinkExistGroups'])) {
            $model->linkExistGroups = $map['LinkExistGroups'];
        }

        if (isset($map['LinkNewGroups'])) {
            $model->linkNewGroups = $map['LinkNewGroups'];
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

        return $model;
    }
}
