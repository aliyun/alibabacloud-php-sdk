<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Dara\Model;

class AddCustomAudienceUserShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $adAccountId;

    /**
     * @var bool
     */
    public $batchLastFlag;

    /**
     * @var string
     */
    public $custSpaceId;

    /**
     * @var string
     */
    public $customAudienceId;

    /**
     * @var int
     */
    public $estimatedNumTotal;

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

    /**
     * @var string
     */
    public $usersShrink;
    protected $_name = [
        'adAccountId' => 'AdAccountId',
        'batchLastFlag' => 'BatchLastFlag',
        'custSpaceId' => 'CustSpaceId',
        'customAudienceId' => 'CustomAudienceId',
        'estimatedNumTotal' => 'EstimatedNumTotal',
        'ownerId' => 'OwnerId',
        'pageId' => 'PageId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'usersShrink' => 'Users',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adAccountId) {
            $res['AdAccountId'] = $this->adAccountId;
        }

        if (null !== $this->batchLastFlag) {
            $res['BatchLastFlag'] = $this->batchLastFlag;
        }

        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }

        if (null !== $this->customAudienceId) {
            $res['CustomAudienceId'] = $this->customAudienceId;
        }

        if (null !== $this->estimatedNumTotal) {
            $res['EstimatedNumTotal'] = $this->estimatedNumTotal;
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

        if (null !== $this->usersShrink) {
            $res['Users'] = $this->usersShrink;
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
        if (isset($map['AdAccountId'])) {
            $model->adAccountId = $map['AdAccountId'];
        }

        if (isset($map['BatchLastFlag'])) {
            $model->batchLastFlag = $map['BatchLastFlag'];
        }

        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }

        if (isset($map['CustomAudienceId'])) {
            $model->customAudienceId = $map['CustomAudienceId'];
        }

        if (isset($map['EstimatedNumTotal'])) {
            $model->estimatedNumTotal = $map['EstimatedNumTotal'];
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

        if (isset($map['Users'])) {
            $model->usersShrink = $map['Users'];
        }

        return $model;
    }
}
