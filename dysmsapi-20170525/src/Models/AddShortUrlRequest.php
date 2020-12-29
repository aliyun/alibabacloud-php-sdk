<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class AddShortUrlRequest extends Model
{
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
    public $sourceUrl;

    /**
     * @var string
     */
    public $shortUrlName;

    /**
     * @var string
     */
    public $effectiveDays;

    /**
     * @var string
     */
    public $prodCode;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'sourceUrl'            => 'SourceUrl',
        'shortUrlName'         => 'ShortUrlName',
        'effectiveDays'        => 'EffectiveDays',
        'prodCode'             => 'ProdCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->sourceUrl) {
            $res['SourceUrl'] = $this->sourceUrl;
        }
        if (null !== $this->shortUrlName) {
            $res['ShortUrlName'] = $this->shortUrlName;
        }
        if (null !== $this->effectiveDays) {
            $res['EffectiveDays'] = $this->effectiveDays;
        }
        if (null !== $this->prodCode) {
            $res['ProdCode'] = $this->prodCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddShortUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SourceUrl'])) {
            $model->sourceUrl = $map['SourceUrl'];
        }
        if (isset($map['ShortUrlName'])) {
            $model->shortUrlName = $map['ShortUrlName'];
        }
        if (isset($map['EffectiveDays'])) {
            $model->effectiveDays = $map['EffectiveDays'];
        }
        if (isset($map['ProdCode'])) {
            $model->prodCode = $map['ProdCode'];
        }

        return $model;
    }
}
