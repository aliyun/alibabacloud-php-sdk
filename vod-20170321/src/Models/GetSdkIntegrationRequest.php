<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class GetSdkIntegrationRequest extends Model
{
    /**
     * @var string
     */
    public $businessType;

    /**
     * @var string
     */
    public $integrationType;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $product;

    /**
     * @var int
     */
    public $sdkCodeId;
    protected $_name = [
        'businessType' => 'BusinessType',
        'integrationType' => 'IntegrationType',
        'platform' => 'Platform',
        'product' => 'Product',
        'sdkCodeId' => 'SdkCodeId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }

        if (null !== $this->integrationType) {
            $res['IntegrationType'] = $this->integrationType;
        }

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }

        if (null !== $this->sdkCodeId) {
            $res['SdkCodeId'] = $this->sdkCodeId;
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
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }

        if (isset($map['IntegrationType'])) {
            $model->integrationType = $map['IntegrationType'];
        }

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }

        if (isset($map['SdkCodeId'])) {
            $model->sdkCodeId = $map['SdkCodeId'];
        }

        return $model;
    }
}
