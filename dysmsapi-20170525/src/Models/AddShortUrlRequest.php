<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class AddShortUrlRequest extends Model
{
    /**
     * @description The validity period of the short URL. Unit: days. The maximum validity period is 90 days.
     *
     * This parameter is required.
     * @example 7
     *
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
     * @description The service name of the short URL. The name cannot exceed 13 characters in length.
     *
     * This parameter is required.
     * @example The Alibaba Cloud Short Link service.
     *
     * @var string
     */
    public $shortUrlName;

    /**
     * @description The source URL. The URL cannot exceed 1,000 characters in length.
     *
     * This parameter is required.
     * @example https://www.****.com/product/sms
     *
     * @var string
     */
    public $sourceUrl;
    protected $_name = [
        'effectiveDays'        => 'EffectiveDays',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'shortUrlName'         => 'ShortUrlName',
        'sourceUrl'            => 'SourceUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return AddShortUrlRequest
     */
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
