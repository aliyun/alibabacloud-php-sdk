<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class ListServiceInstanceForPageShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $pagerShrink;

    /**
     * @var string
     */
    public $relationNumber;

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
    public $sceneId;

    /**
     * @var int
     */
    public $usageId;
    protected $_name = [
        'code' => 'Code',
        'ownerId' => 'OwnerId',
        'pagerShrink' => 'Pager',
        'relationNumber' => 'RelationNumber',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'sceneId' => 'SceneId',
        'usageId' => 'UsageId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->pagerShrink) {
            $res['Pager'] = $this->pagerShrink;
        }

        if (null !== $this->relationNumber) {
            $res['RelationNumber'] = $this->relationNumber;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }

        if (null !== $this->usageId) {
            $res['UsageId'] = $this->usageId;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Pager'])) {
            $model->pagerShrink = $map['Pager'];
        }

        if (isset($map['RelationNumber'])) {
            $model->relationNumber = $map['RelationNumber'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        if (isset($map['UsageId'])) {
            $model->usageId = $map['UsageId'];
        }

        return $model;
    }
}
