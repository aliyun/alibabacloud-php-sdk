<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class AddShortUrlRequest extends Model
{
    /**
     * @var string
     */
    public $effectiveDays;

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
    public $shortUrlName;

    /**
     * @var string
     */
    public $sourceUrl;
    protected $_name = [
        'effectiveDays' => 'EffectiveDays',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'shortUrlName' => 'ShortUrlName',
        'sourceUrl' => 'SourceUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->effectiveDays) {
            $res['EffectiveDays'] = $this->effectiveDays;
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

        if (null !== $this->shortUrlName) {
            $res['ShortUrlName'] = $this->shortUrlName;
        }

        if (null !== $this->sourceUrl) {
            $res['SourceUrl'] = $this->sourceUrl;
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
        if (isset($map['EffectiveDays'])) {
            $model->effectiveDays = $map['EffectiveDays'];
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

        if (isset($map['ShortUrlName'])) {
            $model->shortUrlName = $map['ShortUrlName'];
        }

        if (isset($map['SourceUrl'])) {
            $model->sourceUrl = $map['SourceUrl'];
        }

        return $model;
    }
}
