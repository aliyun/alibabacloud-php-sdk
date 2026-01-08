<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Dara\Model;

class ListCustomAudienceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $adAccountId;

    /**
     * @var string
     */
    public $custSpaceId;

    /**
     * @var string
     */
    public $customAudienceId;

    /**
     * @var string
     */
    public $customAudienceName;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $pageShrink;

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
    public $tokenType;
    protected $_name = [
        'adAccountId' => 'AdAccountId',
        'custSpaceId' => 'CustSpaceId',
        'customAudienceId' => 'CustomAudienceId',
        'customAudienceName' => 'CustomAudienceName',
        'ownerId' => 'OwnerId',
        'pageShrink' => 'Page',
        'pageId' => 'PageId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'tokenType' => 'TokenType',
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

        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }

        if (null !== $this->customAudienceId) {
            $res['CustomAudienceId'] = $this->customAudienceId;
        }

        if (null !== $this->customAudienceName) {
            $res['CustomAudienceName'] = $this->customAudienceName;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->pageShrink) {
            $res['Page'] = $this->pageShrink;
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

        if (null !== $this->tokenType) {
            $res['TokenType'] = $this->tokenType;
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

        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }

        if (isset($map['CustomAudienceId'])) {
            $model->customAudienceId = $map['CustomAudienceId'];
        }

        if (isset($map['CustomAudienceName'])) {
            $model->customAudienceName = $map['CustomAudienceName'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Page'])) {
            $model->pageShrink = $map['Page'];
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

        if (isset($map['TokenType'])) {
            $model->tokenType = $map['TokenType'];
        }

        return $model;
    }
}
